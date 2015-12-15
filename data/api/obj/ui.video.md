
{{memo Video player view}}

### Constructor

{{snippet HTML}}
~~~html
<div id="video_div" style="width:300px; height:200px;"></div>
~~~

{{snippet JS}}
~~~js
var video = webix.ui({
	view:"video",
  	container:"video_div",
    id:"video1", 
    src: [
		"http://cdn.webix.io/demodata/movie.ogv",
		"http://cdn.webix.io/demodata/movie.mp4"
	]
});
~~~

### Where to start

- [Overview of the Video Widget](desktop/video.md)
- [Samples](http://docs.webix.com/samples/27_video/index.html)