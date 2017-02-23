webWorker
=============


@short:
	sets the path to the web worker source file

@type: 
@example:
webix.ui({
	view:"pivot",
	webWorker:"../../codebase/pivot.worker.js",
});

@template:	api_config
@descr:

The file with the worker script is provided in the Pivot package.

@relatedapi:
api/ui.pivot_onwebworkerstart_event.md
api/ui.pivot_onwebworkerend_event.md

@relatedsample:
61_pivot/08_performance/01_web_worker.html

@related:
pivot/webworkers.md