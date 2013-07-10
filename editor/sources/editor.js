function doSave(){
	document.getElementById("result_code").value = window.editor.getValue();
	if(window.linked){
		document.getElementById("linked_code").value = window.linked.getValue();

	}
	var value = document.getElementById("action_form").submit();
}

function back(){
	window.location.href = document.getElementById("page_name").value + ".html";
}

function initEditor(id){
	 var editor = CodeMirror.fromTextArea(document.getElementById(id), {
        mode: 'markdown',
        lineNumbers: true,
        matchBrackets: true,
        theme: "default"
    });

    var box = editor.getWrapperElement().lastChild;
    box.style.height = (window.innerHeight || (document.body.clientHeight-50)) - 110 + "px";
	if(window[id+"_config"]){
		editor.setValue(window[id+"_config"].code);
		delete window[id+"_config"];
	}
	return editor;
}
function init(container, linked){
	if(container)
		window.editor = initEditor(container);
    if(linked){
		window.linked = initEditor(linked);
		var editors = document.getElementsByName("code");
		editors[0].parentNode.parentNode.className = "editor_left";
		editors[0].parentNode.parentNode.style.width = Math.floor(document.body.clientWidth/2)-1 + "px";
		editors[1].parentNode.parentNode.className = "editor_right";
	}
};


window.onkeydown = checkKeys;
document.onkeydown = checkKeys;

function checkKeys(e){
	

	e = e || window.event;
	var isCtrl = !!e.ctrlKey
	var isAlt =  !!e.altKey;
	var key = e.which || e.keyCode;

	if( key == 27){//esc
		back();
		return false;
	}else if(isCtrl && 83 == key){
		e.cancelBubble=true;
		e.preventDefault();
		doSave();
	}
	return true;
}
