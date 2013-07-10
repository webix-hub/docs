<?php

class SearchCache {

	protected $driver;
	protected $config;

	public function __construct($config) {
		$this->driver = new CacheDriver($config);
		$this->config = $config;
	}

	public function check($request) {
		if (is_array($request)) $request = implode('_', $request);
		$hash = $this->hash($request);
		$hit = $this->driver->load($hash);
		if (!$hit) {
			$this->log(false);
			return false;
		} else {
			$this->log(true);
			return $hit;
		}
	}

	public function add($request, $found) {
		if (is_array($request)) $request = implode('_', $request);
		$hash = $this->hash($request);
		$this->driver->save($hash, $found);
	}

	protected function hash($request) {
		return md5($request);
	}

	protected function log($hit = false) {
		$filename = $this->config['docdir']."/".$this->config['cachedir']."/hits.log";
		$log = (file_exists($filename)) ? file_get_contents($filename) : "0/0";

		$tmp = explode("/", $log);
		$hits = (int) trim($tmp[0]);
		$total = (int) trim($tmp[1]);

		$total++;
		$hits += $hit ? 1 : 0;

		$message = "{$hits}/{$total}";
		file_put_contents($filename, $message);
	}
}

class CacheDriver {

	protected $config;
	
	public function __construct($config) {
		$this->config = $config;
	}

	public function save($id, $content) {
		$filename = $this->config['docdir']."/".$this->config['cachedir']."/{$id}.cache";
		file_put_contents($filename, $content);
	}

	public function load($id) {
		$filename = $this->config['docdir']."/".$this->config['cachedir']."/{$id}.cache";
		if (file_exists($filename))
			return file_get_contents($filename);
		return false;
	}

}

?>