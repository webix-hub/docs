track
=============

@short: remember the currently open tab to show it after page refresh
	

@params:

- view	string	ID of the switching control (tabbar, segmented) or tabview ID.
- url	string	hashbang url loaded after refresh. If not stated, the last opened tab URL is loaded. 

@example:

webix.history.track("tabbar");

@related:
	desktop/history_track.md
@relatedsample:
	80_docs/history.html

@template:	api_method
@descr:

Each time you click the tab to switch for another cell, a **hashbang URL** is generated on the base of **cell ID** 
(under *http://current_url.html#!/cellID* pattern) and memorized. You'll see them in the address bar of your browser. 

###Disabling history tracking

You can disable current history tracking process by calling the method again in some moment: 

~~~js
webix.history.track("tabbar");
..
//disables history tracking for tabbar
webix.history.track();
~~~

In addition, you can set another view as a history tracking master: 


~~~js
webix.history.track("tabbar1");
..
//disables history tracking for tabbar1 and starts tracking tabbar2 tabs
webix.history.track("tabbar2");
~~~




