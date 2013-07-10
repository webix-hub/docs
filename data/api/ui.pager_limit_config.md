limit
=============


@short: the total number of pages in the pager
	

@type:number

@example:
var myPager = webix.ui ({
		view:"pager",
		container:"paging_here",
		limit:30
});

@template:	api_config
@relatedapi:api/ui.pager_count_config.md, api/ui.pager_size_config.md
	
@descr:
{{note
The parameter has sense only when ui.pager is used stand-alone.
}}

The api/ui.pager_count_config.md and **limit** parameters are interchangeable and used in pair with the api/ui.pager_size_config.md parameter to limit the number of records to process.<br>
In case of api/ui.pager_count_config.md, the total number of <u>pages</u> is calculated automatically.<br>
In case of **limit**, the total number of <u>records</u> is calculated automatically.



###Integration with Webix components

If **ui.pager** is integrated with some Webix component, the total number of pages will be generated automatically and the parameter (if it's set) will be ignored.


~~~js
//if you set the 'limit' parameter for this pager it will be ignored
var myPager = webix.ui ({
		view:"pager",
		container:"paging_here",
		size:100
});

dtable = new webix.ui({
		view:"datatable",
        pager:myPager,
        ...
})
~~~





