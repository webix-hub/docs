Video
=================

##API Reference

- [Methods, properties and events](api__refs__ui.video.html)
- [Samples](http://docs.webix.com/samples/27_video/index.html)

##Overview

Webix **video** is a UI component designed for embedding video files into the application. It is based on **HTML5 video tag** to provide support for most popular video formats: **MP4**, **WebM** and **Ogg**.

<img src="desktop/video.png"/>

{{sample 27_video/01_init.html}}

##Initialization

The component inherits from Webix [view](desktop/view.md) and is initialized with the help of **webix.ui()** constructor. 

~~~js
//<div id="video_div" style="width:300px; height:200px;"></div>

webix.ui({
	view:"video",
    id:"video1", //used to work with the component later
    container:"video_div",
	src: ["data/movie.ogv","data/movie.mp4"]
});
~~~

Video source defined by **src** property can be either a single video file or an array of several ones. In case of **multiple src** browsers will use the first supported format, which ensures that your video will be recognized 
regardless of the client side browser.

Video component can be initialized inside an HTML container (as above) as well as inside Webix [window](desktop/window.md):

~~~js
webix.ui({
	view:"window",
    head:"My Video",
    body:{
    	view:"video",
        src:"..." //or [...]
    }
});
~~~

{{sample 27_video/01_init.html}}

###Customizing Video Player

Not much customization is possible, but still:

- **controls** property can be used to disable player controls by setting its value to *false*. By default controls are enabled (*true*);
- **autoplay** property can be used to start playing the video right after the component initialization. Default value is *false*.

~~~js
view:"video",
src:[], 
autoplay:true
~~~

{{sample 27_video/02_autoplay.html}}

##Working with Video

HTML5 video can be controlled using methods and properties of the video DOM element:

- **play()** and **pause()** methods to control the video;
- **paused** - read-only property that stores video state.

To get the object of video DOM element, use the **getVideo()** method of Webix video component.

Let's get rid of prebuilt controls and assign **play-and-pause** function to a Webix [button](desktop/button.md):

<img src="desktop/video_api.png"/>

{{sample 27_video/03_api.html}}

{{snippet
UI - window with toolbar
}}
~~~js
webix.ui({
	view:"window",
	body:{
		view:"video",
		id: "video1",
		src:".."
		controls: false //removing default controls
	},
	head:{
		view:"toolbar", elements:[ //assigning a custom function to the button
			{view: "button", id: "playButton", value: "Play", click: playPause}
		]
	},	
}).show();
~~~

{{snippet
Logic
}}
~~~js
function playPause(){
	//getting video object
	var video = $$("video1").getVideo();

	//palying video if it's paused
	if (video.paused){
		video.play();
		$$("playButton").setValue("Pause")
	}
	else{
    	//otherwise - pausing video
		video.pause();
		$$("playButton").setValue("Play")
	}
}
~~~

Alongside with playing and pausing the video, we change **button text value** with its api/ui.button_setvalue.md to correspond video state. 




