hideProgress
=============

@short: hides a progress bar/icon

@params:

@related:
	desktop/progress.md#settingprogressbaricon
@relatedapi:
	api/progressbar_showprogress.md
@relatedsample:
    19_api/05_progress_app.html

@example:
$$("app").hideProgress();

@template:	api_method
@descr:

Instead of calling the method, one can tune a progress bar to hide after a certain period of time: 

~~~js
//this progress icon will be hidden after 3 seconds
$$("app").showProgress({
	delay:3000, //ms
    hide:true
});
~~~

This progress icon will be hidden after 3 seconds. 