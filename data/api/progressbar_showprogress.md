showProgress
=============

@short: displays a progress bar/ progress icon

@params:
* config		object		configuration of a progress bar (icon)

@related:
	desktop/progress.md#settingprogressbaricon
@relatedapi:
	api/progressbar_hideprogress.md
@relatedsample:
	19_api/04_progress_data.html
    19_api/05_progress_app.html
@example:

$$("data").showProgress({
    type:"bottom",
    delay:delay,
    hide:true
});

@template:	api_method
@descr:

####Progress Types

Possible type values are:

- **top** - draw a bar above the view/application
- **bottom** - draws a bar below a view/application
- **icon** - draw an icon in the middle of a view/application

Icon types are taken from [FontAwesome](http://fortawesome.github.io/Font-Awesome/icons/) collection. 

####Defaults

If configuration is not passed, the default one will be used, namely:

~~~js
{
	position:0,
	delay: 2000,
	type:"icon",
	icon:"refresh",
	hide:false
}    
~~~

If the above mentioned values are not redefined by a custom configuration, they will be applied. 

