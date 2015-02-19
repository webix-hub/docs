Text Editor Integration
=================

{{note JS files for these components aren't included in the lib package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components) }}

Webix library supports integration of popular text editors in the application with the help of its own components. For now, the following text editors can be included: 

- [Mercury](#mercury);
- [NicEdit](#nicedit);
- [Tinymce](#tinymce);
- [CodeMirror](#codemirror);
- [CKEditor](#ckeditor).


To embed any of the editors into your web page, you should link not only to Webix, but also to a **special JavaScript file** from the [components folder](https://github.com/webix-hub/components). This file will connect
you to the chosen editor as well load extra required files for it. 

Note that in documentation samples files are linked in another way, but in your apps you should follow the patterns described below.

##Mercury Text Editor {#mercury}

Mercury is a fully featured HTML5 editor with **full HTML, simple, markdown, snippet** and **image** areas to get the utmost from in-browser content editing.

<a href="http://jejacks0n.github.com/mercury/">Learn more about Mercury text editor</a>

<img src="desktop/mercury.png"/>

{{sample 32_thirdparty/01_mercury.html }}

####Component Initialization: 

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./mercury.js"></script>
~~~
{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	id: "editor",
 	view: "mercury-editor",
	value: "..." //text and HTML markup
});
~~~

##NicEdit Text Editor {#nicedit}

NicEdit is a simple and fast **WYSIWYG** editor for websites. Being extremely lightweight it makes any element/HTML container editable or converts standard textareas to rich text editing fields.

<a href="http://nicedit.com/">Learn more about NiceEdit text editor</a>

<img src="desktop/nic_editor.png"/>

{{sample 32_thirdparty/02_nicedit.html }}

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./nicedit.js"></script>
~~~

{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	id: "editor",
	view: "nic-editor",
	value: "..." //text and HTML markup
});
</script>
~~~

##TinyMCE Text Editor {#tinymce}

TinyMCE is a platform independent web based **Javascript HTML WYSIWYG** editor control. It has the ability to convert HTML TEXTAREA fields or other HTML 
elements to editor instances.

<a href="http://www.tinymce.com/">Learn more about TinyMCE text editor</a>

<img src="desktop/tinymce.png">

{{sample 32_thirdparty/03_tinymce.html}}

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./tinymce.js"></script>
~~~

{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	id: "editor",
	view: "tinymce-editor",
	value: "..." //text and HTML markup
});
</script>
~~~

##Codemirror Text Editor {#codemirror}

CodeMirror is a JavaScript component that provides a **code editor** in a browser. When a mode is available for the language you are coding in, it will 
color your code, and optionally help with indentation.

<a href="http://codemirror.net/">Learn more about Codemirror text editor</a>

<img src="desktop/codemirror.png">

{{sample 32_thirdparty/08_codemirror.html }}

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./codemirror.js"></script>
~~~

{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	id: "editor",
	view: "codemirror-editor",
	mode: "javascript",
	value: "..." //text and HTML markup
});
~~~

Note that here an extra property appears - **mode** that denotes a language you are coding in.

##CKEditor Text Editor {#ckeditor}

CKEditor is a ready-for-use WYSIWYG editor that brings word processor features directly to your web pages. It is suitable for editing plain texts as well as HTML markup. 

<a href="http://ckeditor.com/">Learn more about TinyMCE text editor</a>

<img src="desktop/ckeditor.png"/>

Related Sample: <a href="http://cdns.webix.io/components/ckeditor/sample.html">Ckeditor Text Editor</a> 

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script type="text/javascript" src="./ckeditor.js"></script>
~~~

{{snippet
JS code
}}
~~~js
//path from which extra libraries are autoloaded
webix.codebase = "./";

webix.ui({
	id: "editor",
	view: "ckeditor",
	value: "..." //text and HTML markup
});
~~~

##Common Methods: 

- **setValue(**value**);** - sets text for the editor (equal to **value** property, but allows doing it dynamically). The function is called from the component referring to its ID. 

~~~js
$$("editor").setValue("<p>some text or code snippet</p>");
~~~

- **getValue();** - gets the current editor text with current formatting.  Formatted text pieces are wrapped into corresponding HTML tags;

~~~js
$$("editor").getValue(); // returns e.g "some<b> text</b> "
~~~

- **getEditor();** - gets the editor object so that you can use its specific API (exept for Mercury editor).

~~~js
$$("editor").getEditor();
~~~

- **focus();** - in case of several editors on the page this method allows placing cursor mark into the desired editor. 

~~~js
$$("editor").focus();
~~~

@complexity:2