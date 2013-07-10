apiOnly
=============


@short: makes the pager invisible to enable paging with custom buttons
	

@type: 
@example:

	{view:pager
	id:"pagerA",
	apiOnly:true,
	size:50,
	group:5
		}

@related: 
	desktop/paging.md

@relatedsample:
	25_pager/02_apionly.html
    
@template:	api_config
@descr: 

Standard pager won't be displayed yet the paging functionality can still be connected to the necessary component. 

In addition, here you should create JS or HTML button and attach 'paging' functions to them. Here is the 'Next Page' fucntion: 

~~~js
function next_page(){
            $$("pagerA").select("next");
~~~


