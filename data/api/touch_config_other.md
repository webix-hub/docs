config
=============


@short: the property stores general touch settings. Used to set up touch behaviour.
	

@type:object

@example:
webix.Touch.config.scrollDelay = 180;
@template:	api_config
@defined:	Touch	
@descr:

By default, the **config** object looks as in:

~~~js
config:{
	longTouchDelay:1000,
	scrollDelay:150,
	gravity:500,
	deltaStep:30,
	speed:"0ms",
	finish:1500,
	ellastic:true
}
~~~

where 

- **longTouchDelay** - (*number*) the number of milliseconds to wait before firing the longTouch event.
- **scrollDelay** - (*number*)  the time in milliseconds between each drawing of the content. The greater you set the delay, the slower the text will appear to scroll.
- **gravity** - (*number*) the 	coefficient which affects the speed of scrolling. The greater the coefficient, the slower scrolling.
- **deltaStep** - (*number*) the minimum length of the finger movement in pixels to detect this movement as scrolling. 
- **speed** - (*string*) the time in milliseconds during which the component is scrolled to the specified position.
- **finish** - (*number*) the time in milliseconds during which the component will proceed scrolling after getting the finger off the screen.
- **ellastic** - (*bool*) defines whether the view will be scrolled up/down when the scroll knob achieves the top/bottom point of the bar and the finger is still on the screen.