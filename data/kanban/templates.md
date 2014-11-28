Data Visualization
====================

Data items of Kanban Board are sorted by their status and displayed in the corresponding lists. 
Any data can be presented in the Kanban Board: various HTML-elements or images. 

Each KanbanList allows configuring dimensions and templates of its items. It can be done in the [type](desktop/type.md) property.

{{note
Pay attention that you shouldn't redefine templates in order not to lose data. Otherwise, you'll have to specify data collection by yourself.
}}


<br><br>

You can set the following properties in the type:

- <a href="#width">'width'</a> - the width of a list item ("auto" or fixed number in pixels),
- <a href="#height">'height'</a> - the height of a list item ("auto" or fixed number in pixels),
- 'template' - [data template](desktop/html_templates.md) that defines inner html for each item. The default definition of this property applies many other templates: icons, text, avatar, 
- <a href="#template_body">'templateBody'</a> - template for main content of items. It is applied in the main 'template' and displays an item's text by default,
- <a href="#template_footer">'templateFooter'</a> - template for content below the item's body (it is applied in the main 'template' and displays an item's tags and icons),
- <a href="#icons">'icons'</a>  - the array of icons. The icons are taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection 
- <a href="#template_icons">'templateIcons'</a> - template for icons representation (is applied in the 'templateFooter')
- <a href="#template_tags">'templateTags'</a> - template for tags representation (is applied in the 'templateFooter')
- <a href="#template_avatar">'templateAvatar'</a> - template for an item's avatar (an assignee's photo or other data)
- <a href="#template_noavatar">'templateNoAvatar'</a> - this template is applied if the 'templateAvatar' doesn't set html content for the element that shows an assignee's information.

###Main templates

<img src="kanban/kanban_templates.png"/>

###Avatar templates

<img src="kanban/kanban_template_avatar.png"/>

###Width and height of an item

<img src="kanban/kanban_width_height.png"/>


<h3 id="width"><b>width</b></h3>

Specifies the width of an item in the list.

~~~js
type:{
		width:"auto",
}
~~~

<h3 id="height"><b>height</b></h3>

Specifies the height of an item in the list.

~~~js
type:{
		width:"auto",
}
~~~

<h3 id="template_body"><b>templateBody</b></h3>

Defines the main content of items, displays an item's text by default

~~~js
type:{
	templateBody: webix.template("#text#"),
}
~~~

Parameters:

- #text# - a template for items' text

<h3 id="template_footer"><b>templateFooter</b></h3>

Defines the content below the item's body, displays an item's tags and icons

~~~js
type:{
	templateFooter: function(obj,common){
		var tags = common.templateTags(obj,common);
		return (tags?tags:"&nbsp;")+ common.templateIcons(obj,common);
	},
}
~~~

Parameters:

- obj - the event object
- common - 


<h3 id="icons"><b>icons</b></h3>

Specifies an array of icons for Kanban Board 

~~~js
typr:{
	icons:[
		{ icon:"pencil" }
	],
}
~~~

<h3 id="template_icons"><b>templateIcons</b></h3>

Defines icons representation

~~~js
type:{
	templateIcons: function(obj,common){
		var icons = [];
		var icon = null;
		for (var i = 0; i < common.icons.length; i++){
			icon = common.icons[i];
			if(!icon.show || icon.show(obj)){
				icons.push('<span class="fa-'+icon.icon+' webix_icon"></span>');
				if(icon.template){
					icons.push('<span class="webix_kanban_icon_text">'
                    	+webix.template(icon.template)(obj)
                    	+'</span>');
				}
			}
		}
		return '<div  class="webix_kanban_icons">' +icons.join(" ")+'</div>';
	},
}
~~~

Parameters:

- obj - the event object
- common  - 

<h3 id="template_tags"><b>templateTags</b></h3>

Defines tags representation

~~~js
type:{
	templateTags: function(obj,common){
		var res = [];
		if(obj.tags){
			var tags = obj.tags.split(common.tagDemiliter);
			for (var i = 0; i < tags.length; i++){
				res.push('<span class="webix_kanban_tag kanban_tag_'
            	+tags[i]+'">'+tags[i]+'</span>');
			}
    	}	
		return '<div  class="webix_kanban_tags">' 
    	+(res.length?res.join(' '):"&nbsp;")+'</div>';
},
~~~

Parameters:

- obj - the event object
- common  - 

<h3 id="template_avatar"><b>templateAvatar</b></h3>

Specifies an item's avatar

~~~js
type:{
	var avatarResult = common.templateAvatar(obj,common);

	templateAvatar: webix.template(""),
}
~~~

Parameters:

- obj - the event object
- common  - 

<h3 id="template_noavatar"><b>templateNoAvatar</b></h3>

Applied if the 'templateAvatar' doesn't set html content for the element that shows an assignee's information

~~~js
type:{
	templateNoAvatar: webix.template("<span class='webix_icon fa-user'></span>"),
}
~~~
