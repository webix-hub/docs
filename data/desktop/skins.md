Skins
===================

Webix provides a number of skins that you can use to change the overall look of your application:

1. [Air](desktop/skins.md#air)
2. [Air Compact](desktop/skins.md#aircompact)
3. [Clouds](desktop/skins.md#clouds)
4. [Compact](desktop/skins.md#compact) 
5. [Contrast](desktop/skins.md#contrast)
6. [Flat (default skin)](desktop/skins.md#flat)
7. [Glamour](desktop/skins.md#glamour)
8. [Light](desktop/skins.md#light)
9.	[Material Design](desktop/skins.md#materialdesign)
10. [Metro](desktop/skins.md#metro)
11. [Terrace](desktop/skins.md#terrace)
12. [Touch](desktop/skins.md#touch)
13. [Web](desktop/skins.md#web)

Each skin requires including its specific CSS file. 

{{note
All CSS files for skins reside in the **codebase/skins** folder of the package.
}}

Skin JS File Config
--------------------------

Below you will find the full *skin.js* file for the Flat skin:

~~~js
webix.skin.flat = {
	topLayout:"space",
	//bar in accordion
	barHeight:46,			//!!!Set the same in skin.less!!!
	tabbarHeight: 46,
	rowHeight:34,
	toolbarHeight:46,
	listItemHeight:34,		//list, grouplist, dataview, etc.
	inputHeight: 38,
	buttonHeight: 38,
	inputPadding: 3,
	menuHeight: 34,
	labelTopHeight: 22,
	propertyItemHeight: 28,

	inputSpacing: 4,
	borderWidth: 1,

	sliderHandleWidth: 16,
	sliderPadding: 10,
	sliderBorder: 1,

	//margin - distance between cells
	layoutMargin:{ 
    	space:10, wide:10, clean:0, head:4, line:-1, toolbar:4, form:8, accordion: 10  
    },
	//padding - distance insede cell between cell border and cell content
	layoutPadding:{ 
    	space:10, wide:0, clean:0, head:0, line:0, toolbar:4, form:17, accordion: 0  
    },
	//space between tabs in tabbar
	tabMargin:4,
	tabOffset: 0,
	tabBottomOffset: 6,
	tabTopOffset:1,

	customCheckbox: true,
	customRadio: true,

	popupPadding: 8,

	calendarHeight: 70,
	padding:0,
	accordionType: "accordion",

	optionHeight: 32
};
~~~

Air 
------------------------
To apply the **Air** skin, include the *air.css* file:

{{snippet
Applying the 'Air' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/air.css" rel="stylesheet" type="text/css"> 
~~~


<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/air_skin.png"/>

Air Compact
---------------------------
To apply the **AirCompact** skin, include the *aircompact.css* file:

{{snippet
Applying the 'AirCompact' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/aircompact.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/aircompact_skin.png"/>

Clouds
--------------------------------
To apply the **Clouds** skin, include the *clouds.css* file:

{{snippet
Applying the 'Clouds' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/clouds.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/clouds_skin.png"/>


Compact
--------
To apply the **Compact** skin, include the *compact.css* file:

{{snippet
Applying the 'Compact' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/compact.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/compact_skin.png"/>


Contrast
------------------------
To apply the **Contrast** skin, include the *contrast.css* file:

{{snippet
Applying the 'Contrast' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/contrast.css" rel="stylesheet" type="text/css"> 
~~~


<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/contrast_skin.png"/>


Flat
------
To apply the **Flat** skin, include the default CSS file:

{{snippet
Applying the 'Flat' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/webix.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/flat_skin.png"/>


Glamour
---------------------------------
To apply the **Glamour** skin, include the *glamour.css* file:

{{snippet
Applying the 'Glamour' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/glamour.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/glamour_skin.png"/>


Light
-----------------------------------
To apply the **Light** skin, include the *light.css* file:

{{snippet
Applying the 'Light' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/light.css" rel="stylesheet" type="text/css"> 
~~~


<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/light_skin.png"/>



Material Design
-----------------
To apply the **Material Design** skin:

- download it from a separate repository at [github.com](https://github.com/webix-hub/material-design-skin)  
- copy files into *codebase* folder of Webix UI package
- include the *material.css* file:

{{snippet
Applying the 'Material Design' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href=".../codebase/skins/material.css" rel="stylesheet" type="text/css">
~~~

<img src="desktop/skins/material_skin.png"/>

You can read a more [detailed article](desktop/material_design.md) about the usage of Material Design skin.



Metro
------------------------------------
To apply the **Metro** skin, include the *metro.css* file:

{{snippet
Applying the 'Metro' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/metro.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/metro_skin.png"/>

Terrace
-------------------------------------
To apply the **Terrace** skin, include the *terrace.css* file:

{{snippet
Applying the 'Terrace' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/terrace.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/terrace_skin.png"/>

Touch 
------------------------
To apply the **Touch** skin, include the *touch.css* file:

{{snippet
Applying the 'Touch' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/touch.css" rel="stylesheet" type="text/css"> 
~~~


<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/touch_skin.png"/>

Web
--------------------------------------
To apply the **Web** skin, include the *web.css* file:

{{snippet
Applying the 'Web' skin to the app
}}
~~~js
<script src="../codebase/webix.js"></script>   
<link href="../codebase/skins/web.css" rel="stylesheet" type="text/css"> 
~~~

<img style="margin: 20px auto 20px auto;display: block;box-shadow: #D8D8D8 0px 0px 7px 1px;" src="desktop/skins/web_skin.png"/>

@index:
- desktop/material_design.md