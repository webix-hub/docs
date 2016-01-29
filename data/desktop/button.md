Button
=================

##API Reference

- [Methods, properties and events](api__refs__ui.button.html)
- [Shared functionality](desktop/controls_guide.md)

##Button Types

**Standard Buttons**

<img src="desktop/buttons.png"/>

~~~js
{ view:"button", id:"my_button", value:"Button", type:"...", inputWidth:100 } 
~~~

{{editor http://webix.com/snippet/918706da	Button ('button')}}

*Type* property of a button defines the way is looks like: 

- base (**no type**) - default button;
- **'form'** - a button for a form (darker than standard);
- **'danger'** - a red button to attract user attention;
- **'prev'** - a button with left arrow;
- **'next'** - a button with right arrow;

**Icon Buttons**

<img src="desktop/toolbar_icons.png"/>

~~~js
{ view:"button", type:"icon", icon:"mail", label:"Mail", width:80 }
~~~

{{editor	http://webix.com/snippet/3070bdda	Icons}}

Icon button features some specific configuration options:

- **icon** (string) - icon name. Full list of icon names is available on [Font Awesome](http://fortawesome.github.io/Font-Awesome/);
- **label** (string) - text on a button by the icon;
- **type** (string) - defines the type of a button:
	- *icon* - an icon button without a distinct border;
    - *iconTop* - an big borderless icon button with a text label below the icon;
    - *iconButton* - a small icon button with a label right of the icon;
    - *iconButtonTop* - a big icon button with a label below the icon;

For further information about icons in Webix components read the desktop/icon_types.md article.

**Image Buttons**

<img src="desktop/image_buttons.png"/>

~~~js
{ view:"button", type: "image", image:".../img.gif", label: "Image Button" }
~~~

{{editor http://webix.com/snippet/decd1b75	Buttons: Type 'image'}}

Image button features some specific configuration options: 

- **image** (path) - path to the desired image;
- **label** (string) - text on a button by the image;
- **type** (string) - defines the type of a button:
	- *image* - a borderless image with a left-hand label (if any); 
    - *imageTop* - a borderless image with a bottom label;
 	- *imageButton* - a button with an image and a left-hand label:  
    - *imageButtonTop* - a button with an image and a label below the image;

**HTML Buttons**

<img src="desktop/html_buttons.png"/>

~~~js
{ view:"button", type: "htmlbutton", css: "icon_back_btn", 
  label: '<span class="webix_icon fa-angle-left"></span><span class="text">back</span>', 
  inputWidth:100
}
~~~

{{editor http://webix.com/snippet/62d39898	Buttons: Styling}}

A button with an 'htmlbutton' type can be defined by HTML markup and CSS styling. Setting the *css* property you indicate the CSS class 
through which you can style the button itself, its text, icon or image: 

~~~css
.icon_back_btn .webix_icon{ ...}
.icon_back_btn .text{ ... }
.icon_back_btn button{ ... }
~~~

**Buttons with Badges**

<img src="desktop/buttons_badges.png"/>

~~~js
{ view:"button", width:40, badge:12, type:"icon", icon:"envelope" }
~~~

Any button regardless of its *type* can be equipped with a badge with the help of a same-name property.

{{editor http://webix.com/snippet/f52c9f81	Buttons: Type 'icon' with Badges}}



##Button Configuration

- **value** (string) - defines the text displayed on standard buttons (basic, *form*, *danger*, *prev*, *next*);
- **label** (string) - defines the text or/and HTML markup for the button of *imabeButton* and *iconButton* types and their valiarions as well as for *htmlbutton*;
- **width** (number) - sets the width of the button;
- **inputWidth** (number) - sets the width of the text on the button and adjusts button's width to it;
- **image** (string) - sets a path to the button icon;
- **align** (string)- positions a button with relation to a parent view;
- **popup** (string)- defines the ID of a popup window that will be shown on button click;
- **click** (function) - defines a function that will be executed on clicking the button (another possibility is to attach an event to it using the button's ID);
- **css** (string) - name of CSS class applied to a button;
- **badge** (number/string) - adds an orange circle that notifies about the number of new message for an icon button;
- **autowidth** (boolean)  - sets the mode in which the button's width automatically adjusts to the button's content.

##Setting Autowidth for Buttons

<img src="desktop/button_autowidth.png">

~~~js
{ view:"button", label:"Short", autowidth:true }
~~~

It's possible to adjust the width of a button to the size of its content, using the *autowidth* property set to true.

{{editor
http://webix.com/snippet/5546f03f	Buttons - AutoWidth
}}

@index:
	  - desktop/button_groups.md