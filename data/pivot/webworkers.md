Using Pivot with Web Worker
=============================

You can enhance Pivot performance by using a web worker. It will allow processing data operations in the background without blocking 
Pivot UI work in the browser.

The web worker script is provided in the Pivot package. To use it in an application with Pivot, you should set the path to the web worker script
with the help of the the api/ui.pivot_webworker_config.md property: 

~~~js
webix.ui({
    view:"pivot",
    webWorker:"../../codebase/pivot.worker.js",
});
~~~

{{sample 61_pivot/08_performance/01_web_worker.html}}

After that you will be able to apply the related API.

Web Worker API
-------------

There are two web worker-specific events you use:  

- api/ui.pivot_onwebworkerstart_event.md
- api/ui.pivot_onwebworkerend_event.md

