
window.onkeydown = openEditor;
document.onkeydown = openEditor;

function openEditor(event){
	if(editorKeys(event)){

		var parts = window.location.href.split("/");
		if(parts.length)
		var page = parts.pop().replace(".html", "");

		var lang = parts.pop();
		if (lang == "docs"){
			parts.push(lang);
			lang = "";
		}

		window.location = parts.join("/")+"/view.php?lang="+lang+"&edit="+page;
		return false;
	}
}

function editorKeys(e)
{
	var editor_key = "e";
	var key;
	var isCtrl;
	var isAlt;
	if(window.event){
		key = window.event.keyCode;     //IE
		isCtrl = !!(window.event.ctrlKey);
		isAlt =  !!(window.event.altKey);
	}
	else{
		key = e.which;     //firefox
		isCtrl = !!e.ctrlKey;
		isAlt =  !!e.altKey;
		e.cancelBubble=true;
		e.preventDefault();
	}

	if(isCtrl && 69 == key)
		return true;

	
	return false;
}