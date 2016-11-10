Material Design Skin
======================

The skin works with Webix 2.3+. It is not included in the package and should be
[downloaded from GitHub](https://github.com/webix-hub/material-design-skin).

You can see live demo by [this link](http://webix.com/demos/material/admin-app/index.html#!/app/forms). 

How to use
------------

- copy files into the *codebase* folder of Webix UI package
- use skin file on a page as any other skin

~~~js
<html>
<head>
    <script type="codebase/webix.js"></script>
    <link rel="stylesheet" type="text/css" href="codebase/skins/material.css">
</head>
<body>
webix.ready(function(){
   //some webix related UI here
});
</body>
</html>
~~~

Shared CSS classes
--------------------

An example of CSS classes usage is given by [this link](http://webix.com/demos/material/admin-app/index.html#!/app/typography).


###Text and Background


The following CSS classes are available for text:

- text_primary
- text_info
- text_success
- text_warning
- text_danger
- text_muted

<img src="desktop/material_text_colors.png">

The background CSS classes have similar names. Just replace *text_* with *bg_*:

<img src="desktop/material_background_colors.png">

~~~js
webix.ui({
	rows:[{
		template:"Some text",
		css:"text_info"
	},{
		template:"Some background",
		css:"bg_danger"
    }]    
});
~~~

###Buttons

You can apply several classes for a button:

- button_primary 
- button_info
- button_success
- button_warning
- button_danger
- button_transparent
- button_raised

The flat buttons look like this by default:

<img src="desktop/material_flat_buttons.png">

You can also combine flat and "raised" buttons by using several CSS rules:

~~~js
webix.ui({
    view:"button",
    css:"button_success button_raised"
});
~~~

<img src="desktop/material_raised_buttons.png">


###Icons


There are 3 CSS icon classes:

- solid_icon
- action_icon
- danger_icon

<img src="desktop/material_icons.png">

~~~js
webix.ui({
    view:"icon",
    icon:"users",
    css:"solid_icon"
});
~~~

###Panels

The following types of panels can be used:

- bg_clean
- bg_panel
- bg_panel_raised

<img src="desktop/material_panels.png">

~~~js
webix.ui({
	rows:[
        { template:"A" },
        { template:"B", css:"bg_panel"},
        { template:"C" }
    ]
});
~~~

Material layout
--------------------

The skin adds one more type of layout:

~~~js
webix.ui({
    type:"material",
    rows:[
        { template:"A" },
        { template:"B" },
        { template:"C" }
    ]
});
~~~

This type of layout shows all content elements as material panels.

License
------------

Code is released under the MIT License:

Copyright (c) 2015

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.