Text Editor Integration
=================

webix library supports integration of third party elements into the apps. Such components include text editors, [scheduler](desktop/scheduler.md),
[charts](desktop/chart_integration.md) and [geographical maps](desktop/maps.md). 

The following text editors can be included: 

- **Mercury**;
- **NicEdit**;
- **Tinymce**;
- **CodeMirror**.

For each of these components a link to **special javascript library file** should be included into the document's head section. 

##Mercury Text Editor

Mercury is a fully featured HTML5 editor with **full HTML, simple, markdown, snippet** and **image** areas to get the utmost from in-browser content editing. 

<a href="http://jejacks0n.github.com/mercury/">Learn more about Mercury text editor</a>

<img src="desktop/mercury.png"/>

{{sample 32_thirdparty/01_mercury.html }}

####Component Initialization: 

{{snippet
Link to the library
}}
~~~html
<script src="../../codebase/thirdparty/nicedit.js" type="text/javascript" charset="utf-8">
</script>
~~~
{{snippet
JS code
}}
~~~js
webix.ui({
	id:'editor', view:"mercury-editor"		
});
~~~

##NicEdit Text Editor

NicEdit is a simple and fast **WYSIWYG** editor for websites. Being extremely lightweight it makes any element/html container editable or converts standard textareas
to rich text editing fields.

<a href="http://nicedit.com/">Learn more about NiceEdit text editor</a>

<img src="desktop/nic_editor.png"/>

{{sample 32_thirdparty/02_nicedit.html }}

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script src="../../codebase/thirdparty/nicedit.js" type="text/javascript" charset="utf-8">
</script>
~~~

{{snippet
JS code
}}
~~~js
webix.ui({
	id:'editor', config:{}, view:"nic-editor"
})
</script>
~~~

##TinyMCE Text Editor

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
<script src="../../codebase/thirdparty/tinymce.js" type="text/javascript" charset="utf-8"></script>
~~~

{{snippet
JS code
}}
~~~js
webix.ui({
	id:'editor2', config:{ theme:"advanced" }, view:"tinymce-editor"
})
</script>
~~~

##Codemirror Text Editor

CodeMirror is a JavaScript component that provides a **code editor** in a browser. When a mode is available for the language you are coding in, it will 
color your code, and optionally help with indentation.

<a href="http://codemirror.net/">Learn more about Codemirror text editor</a>

<img src="desktop/codemirror.png">

####Component Initialization

{{snippet
Link to the library
}}
~~~html
<script src="../../codebase/thirdparty/codemirror.js" type="text/javascript" charset="utf-8"></script>
<script>
~~~

{{snippet
JS code
}}
~~~js
webix.ui({
	id:'editor', view:"codemirror-editor"
})

~~~

##Common Methods: 

- setValue()

Allows setting text for the editor to be displayed on component initializing. The function is called from the component referring to its ID. 

~~~js
$$("editor"). setValue("some text or code snippet");
~~~

- focus()

In case of several editors on the page this method allows place cursor mark into the desired editor. The function doesn't take any parameters. 

~~~js
$$("editor").focus();
~~~

@complexity:2