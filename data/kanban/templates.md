Data Visualization in Kanban Board
====================

You can represent various HTML-elements in the Kanban Board.  

Data items of Kanban Board are sorted by their status and displayed in the corresponding lists. 

Each KanbanList allows configuring dimensions and [templates](desktop/html_templates.md) of its items. It is implemented in the [type](desktop/type.md) of KanbanList:

<br>

~~~js
// define a type for KanbanList views with a set of templates
webix.type(webix.ui.kanbanlist,{
	name: "cards",   // type name    /*!*/
	icons:[{id: "edit", icon: "edit"}],
	templateBody: function(obj){
		return (obj.img?"<img src='imgs/"+obj.img+"'/>":"")+obj.text;
	}
});

// create a Kanban board 
//and apply "cards" type for lists
webix.ui({
	view:"kanban",
	cols:[
		{ 
           header:"Backlog",
		   body:{ 
              view:"kanbanlist", 
              status:"new", 
              type: "cards"  // set type     /*!*/
           }
        },
        ...
    ]
});
~~~

<br>

{{sample
63_kanban/01_basic/04_templates.html
}}

<br>

You can set the following properties in the type:

- <a href="#width">'width'</a> - the width of a list item ('auto' or fixed number in pixels),
- <a href="#height">'height'</a> - the height of a list item ('auto' or fixed number in pixels),
- <a href="#template">'template'</a> - [data template](desktop/html_templates.md) that defines inner html for each item. The default definition of this property applies many other templates: icons, text, avatar, 
- <a href="#template_body">'templateBody'</a> - template for main content of items. It is applied in the main 'template' and displays an item's text by default,
- <a href="#template_footer">'templateFooter'</a> - template for content below the item's body (it is applied in the main 'template' and displays an item's tags and icons),
- <a href="#icons">'icons'</a>  - the array of icons. The icons are taken from the [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection 
- <a href="#template_icons">'templateIcons'</a> - template for icons representation (is applied in the 'templateFooter')
- <a href="#template_tags">'templateTags'</a> - template for tags representation (is applied in the 'templateFooter')
- 'tagDelimiter' - string that defines tags delimiter in datasource (',' by default)
- <a href="#template_avatar">'templateAvatar'</a> - template for an item's avatar ( the photo of an assignee or other data)
- <a href="#template_noavatar">'templateNoAvatar'</a> - this template is applied if the 'templateAvatar' doesn't set HTML content for 
the element that shows information about the assignee.


A template can be specified either in the format of string or in the format of function. Below you'll find the description of all available templates. 

###Main templates

<img src="kanban/kanban_templates.png"/>

###Avatar templates

<img src="kanban/kanban_template_avatar.png"/>

###Width and height of an item

<img src="kanban/kanban_width_height.png"/>


<h3 id="width"><b>width</b></h3>

Specifies the width of an item in the list. 

~~~js
{
   width:"auto"
}
~~~

"auto" is the default width value. However, you can set a fixed value and show more than one item in list rows:

~~~js
webix.type(webix.ui.kanbanlist,{
   name: "cards",
   width: 120
   ...
});

~~~

You can read more [here](kanban/configuration.md#changingstructureofkanbanlists). 


<h3 id="height"><b>height</b></h3>

Specifies the height of an item in the list.

~~~js
{
   height:"auto"
}
~~~

the 'height' property as well as 'width' can be defined as a fixed value.

<h3 id="template"><b>template</b></h3>

Defines inner html for each item. The default definition of this property applies many other templates: icons, text, avatar. 

~~~js

template: function(obj, t){
   var avatar, content;
   avatar = t.templateAvatar(obj,t)||t.templateNoAvatar(obj,t);
   avatar = '<div class="webix_kanban_user_avatar">'+avatar+'</div>';
   content = '<div class="webix_kanban_body">'+t.templateBody(obj,t)+'</div>';
   content += '<div class="webix_kanban_footer">'+t.templateFooter(obj,t)+ '</div>';
   var style = 'style="border-left-color:'+obj.color+'"';
   return avatar+'<div class="webix_kanban_list_content" '+style+'>'+content+'</div>';
}
~~~


{{note
Pay attention that you shouldn't redefine the main **template** in order not to lose data. Otherwise, you'll have to specify data collection by yourself.
}}

<h3 id="template_body"><b>templateBody</b></h3>

Defines the main content of items, displays an item's text by default

~~~js
webix.type(webix.ui.kanbanlist,{
    name: "cards",
    // displays images and text property in item content
    templateBody: function(obj,common){
		var html = "";
		if(obj.image)
			html += "<img class='image' src='../common/imgs/"+obj.image+"'/>";
		html += "<div>"+obj.text+"</div>";
		return html;
	},
    ...
});
~~~


<h3 id="template_footer"><b>templateFooter</b></h3>

Defines the content below the item's body, displays an item's tags and icons

~~~js
{
	templateFooter: function(obj,common){
		var tags = common.templateTags(obj,common);
		return (tags?tags:"&nbsp;")+ common.templateIcons(obj,common);
	},
    ...
}
~~~


<h3 id="icons"><b>icons</b></h3>

Specifies an array of icons for Kanban Board 

You need to specify icons array in the type for Kanban Lists. In the definition of each icon you can set the following properties:

- id - icon id,
- icon - name of a font icon in [Font Awesome](http://fortawesome.github.io/Font-Awesome/) collection, 
- tooltip - title for an icon element,
- show - function that takes an item object as a parameter and returns true/false value -to show/hide an icon for a certain item
- template - text that will be displayed next to the icon
- click - onClick event handler for the icon

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	icons:[
		{
			id: "comments",
			tooltip: "Comments",
			icon:"comment-o",
			show: function(obj){ 
				return !!obj.comments 
			},
			template:"#comments.length#",
			click: function(e,id){
				var item = this.getItem(id);
				...
			}
		},
		{
			id: "edit",
			icon:"edit",
			tooltip: "Edit Task",
			click: function(e,id){
				var item = $$("myBoard").getItem(id);
				...
			}
		}
	]
});

webix.ui({
	view:"kanban", 
	...
	cols:[
		{ 
			header:"Backlog",
			body:{ 
				view:"kanbanlist", 
				status:"new", 
				type: "cards" 
			}
		},
		....
	]
});
~~~

<h3 id="template_icons"><b>templateIcons</b></h3>

Defines icons representation

~~~js
templateIcons: function(obj,common){
    var icons = [], icon = null, id, html, text;
    for (var i = 0; i < common.icons.length; i++){
		icon = common.icons[i];
		if(!icon.show || icon.show(obj)){
            id = icon.id||icon.icon;
		    html = '<span webix_icon_id="'+id+'" class="webix_kanban_icon">';
			html += '<span class="fa-'+icon.icon+' webix_icon"></span>';
			if(icon.template){
                text = webix.template(icon.template)(obj);
				html += '<span class="webix_kanban_icon_text">'+text+'</span>';
			}
			html += '</span>';
			icons.push(html);
		}
	}
	return '<div  class="webix_kanban_icons">' +icons.join(" ")+'</div>';
},
...
~~~

<h3 id="template_tags"><b>templateTags</b></h3>

Defines tags representation

~~~js
templateTags: function(obj,common){
	var html = '';
	if(obj.tags){
		var tags = obj.tags.split(common.tagDemiliter);
		for (var i = 0; i < tags.length; i++){
			html += '<span class="webix_kanban_tag">'+tags[i]+'</span>';
		}
    }	
	return '<div class="webix_kanban_tags">'+(html||"&nbsp;")+'</div>';
}
~~~


<h3 id="template_avatar"><b>templateAvatar</b></h3>

Specifies an item's avatar

~~~js
webix.type(webix.ui.kanbanlist,{
	name: "cards",
	// avatar template
	templateAvatar: function(obj){
        var html = '';
		if(obj.personId){
			html = '<img class="avatar" src="../common/imgs/'+obj.personId+'.jpg" />';
		}
		return html;
	},
	...
});
~~~


<h3 id="template_noavatar"><b>templateNoAvatar</b></h3>

Applied if the 'templateAvatar' doesn't set html content for the element that shows information of an assignee

~~~js
{
	templateNoAvatar: "<span class='webix_icon fa-user'></span>"
}
~~~

<br>

{{sample
63_kanban/01_basic/04_templates.html
}}
