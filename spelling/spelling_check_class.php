<?php

ini_set ("max_execution_time", "1800");

class SpellingCheck {

	protected $extensions = Array('md');
	protected $ignore_words = Array('ignore_words');
	protected $ignore_file_name = "ignore.txt";
	protected $report = Array();
	protected $recoursive = true;
	protected $limit = 100;
	protected $plink;

	public function __construct() {
		$this->plink = pspell_new("en", "american", "", "utf-8", PSPELL_NORMAL);
	}
	
	/*! add file extension
	 * @param clear
	 *		to clear current list (optional)
	 * @params
	 *	list of extensions as strings
	 */
	public function setExtensions($clear) {
		$ext = func_get_args();
		if (is_bool($clear) && $clear == true) $this->extensions = Array();
		for ($i = (is_bool($clear) ? 1 : 0); $i < count($ext); $i++) {
			if ((is_string($ext[$i]))&&(!in_array($ext[$i], $this->extensions)))
				$this->extensions[] = $ext[$i];
		}
	}

	/*! enable/disable recoursive searching documents
	 *	@param rec
	 *		true - enable recoursive
	 */
	public function setRecoursive($rec) {
		$this->recoursive = $rec;
	}

	/*! sets words limit in report
	 *	@param limit
	 *		limit
	 */
	public function setLimit($limit) {
		$this->limit = $limit;
	}

	/*! check all dir documents and return html text of report
	 *	@param $path
	 *	path to directory
	 */
	public function checkDir($path) {
		if ($dir = opendir($path)) {
			while (false !== ($file = readdir($dir))) {
				if ($file != "." && $file != "..") {
					if (is_dir($path.'/'.$file)) {
						if ($this->recoursive == true)
							$this->checkDir($path.'/'.$file);
					} elseif (in_array(pathinfo($path.'/'.$file, PATHINFO_EXTENSION), $this->extensions)) {
						if (!preg_match("/[a-z0-9_]+\.md/i", $file)) continue;
						$result = $this->checkFile($path.'/'.$file);
						if ($result == false) break;
					}
				}
			}
			closedir($dir);
		}
		return $this->reportToHTML();
	}

	/*! check file and return report
	 */
	public function checkFile($content, $path = "") {
		$breaked = false;
		$content = $this->preprocessText($content);
		$content = explode("\n", $content);
		for ($i = 0; $i < count($content); $i++) {
			$words = $this->split($content[$i]);
			for ($j = 0; $j < count($words); $j++) {
				$result = $this->checkWord($words[$j]);
				if ($result !== true)
					$this->wordToReport($words[$j], $path, ($i + 1), implode(", ", $result));
				if (count($this->report) >= $this->limit) {
					$breaked = true;
					break;
				};
			}
			if ($breaked == true) break;
		}
		if ($breaked == true)
			return false;
		else
			return $this->reportToHTML();
	}

	/*! split text to words
	 *	@param text
	 *		text to split
	 *	@return
	 *		array of words
	 */
	protected function split($text) {
		$result = preg_split("/[^\d\w_]/", $text, -1, PREG_SPLIT_NO_EMPTY);
		return $result;
	}

	/*! check if word spelling is correct
	 *	@param word
	 *		word to check
	 *	@return
	 *		true if word is correct or array of suggestions otherwise
	 */
	protected function checkWord($word) {
		if (in_array($word, $this->ignore_words)) return true;
		if (preg_match("/^\d+/", $word)) return true;
		$result = pspell_check($this->plink, $word);
		if ($result == false)
			$result = pspell_suggest($this->plink, $word);
		return $result;
	}

	/*! add word to report
	 *	@param word
	 *		incorrect word
	 *	@param path
	 *		file name which contains this word
	 *	@param line
	 *		line number
	 *	@param suggestions
	 *		list of suggestions
	 */
	protected function wordToReport($word, $path, $line, $suggestions = '') {
		$this->report[] = Array(
			'word' => $word,
			'path' => $path,
			'line' => $line,
			'suggestions' => $suggestions
			);
	}

	/*! convert list of incorrect words to html report
	 */
	public function reportToHTML() {
		$html = "<form method='post' action='?to_ignore_words=true'>";
		$css = "<style>";
		$css .= ".word_report { border: 1px dotted #cccccc; background-color: #eeeeee; width: 700px; padding: 12px; }";
		$css .= ".word { font-weight: bold; }";
		$css .= ".location_label, .suggestions_label { font-weight: bold; }";
		$css .= ".file, .line { font-weight: bold; }";
		$css .= ".control { width: 50px; height: 45px; border: 1px dotted #cccccc; float: left; margin-right: 10px; text-align: center; padding-top: 25px; }";
		$css .= ".info { float: left; width: 630px; }";
		$css .= ".clear { clear: both; }";
		$css .= "</style>";
		$clear = "<div class='clear'></div>";
		$to_ignore_button = "<input type='submit' value='To ignore list' />";
		$js_check = "var el = this.getElementsByTagName(\"input\")[0]; el.checked = !el.checked;";
		$js_check_inp = "this.checked = !this.checked;";
		$html .= $to_ignore_button;
		for ($i = 0; $i < count($this->report); $i++) {
			$html .= "<div class='word_report'>";
			$html .= "<div class='control' onclick='".$js_check."'>";
			$html .= "<input type='checkbox' name='ignore_words[]' value='".$this->report[$i]['word']."' onclick='".$js_check_inp."' />";
			$html .= "</div>";
			$html .= "<div class='info'>";
			$html .= "<div class='word'>".($i + 1).". ".$this->report[$i]['word']."</div>";
			$html .= "<div class='location'><span class='location_label'>Location:</span> file <span class='file'><a href=\"../{$this->report[$i]['path']}\" target=\"blank\">".$this->report[$i]['path']."</a></span>";
			$html .= " line <span class='line'>".$this->report[$i]['line']."</span></div>";
			$html .= "<div class='suggestions'><span class='suggestions_label'>Suggestions:</span> ".$this->report[$i]['suggestions']."</div>";
			$html .= "</div>";
			$html .= $clear;
			$html .= "</div>";
		}
		$html .= $to_ignore_button;
		$html .= "</form>";
		return $css.$html;
	}

	/*! convert list of incorrect words to txt report
	 */
	protected function reportToTxt() {
		$txt = "";
		for ($i = 0; $i < count($this->report); $i++) {
			$txt .= ($i + 1).". ".$this->report[$i]['word']."\r\n";
			$txt .= "location: \"".$this->report[$i]['path']."\" line ".$this->report[$i]['line']."\r\n";
			$txt .= "Suggestions: ".$this->report[$i]['suggestions']."\r\n\r\n";
		}
		return $txt;
	}

	/*! load file with words to ignore
	 *	@param path
	 *		path to file
	 */
	public function loadIgnoreList($path) {
		$ignore = file_get_contents($path);
		$this->ignore_words = $this->split($ignore);
		$this->ignore_file_name = $path;
	}

	/*! save current ignore list to file
	 *	@param path
	 *		path where list should be saved, optional
	 */
	public function saveIgnoreList($path = false) {
		$words = implode("\r\n", $this->ignore_words);
		if ($path == false) $path = $this->ignore_file_name;
		file_put_contents($path, $words);
	}

	/*! add word to ignore list
	 */
	public function addIgnoreWords() {
		$words = func_get_args();
		for ($i = 0; $i < count($words); $i++) {
			if (!in_array($words[$i], $this->ignore_words))
				$this->ignore_words[] = $words[$i];
		}
	}

	/*! clear ignore list
	 */
	public function clearIgnoreWords() {
		$this->ignore_words = Array();
	}


	protected function preprocessText($text) {
$text = preg_replace_callback("/\<code[^\>]*\>.*\<\/code\>/Us", Array($this, "preprocessTextCallback"), $text);
		$text = preg_replace("/<[^>]+>/", " ", $text);
		$text = strtolower($text);
		return $text;
	}

	public function preprocessTextCallback($matches) {
		preg_match_all("/\{new_line_repl\d{6}new_line_repl\}/", $matches[0], $result);
		$text = "";
		if (isset($result[0]))
			for ($i = 0; $i < count($result[0]); $i++) {
				$text .= $result[0][$i];
			}
		return $text;
	}

}

?>