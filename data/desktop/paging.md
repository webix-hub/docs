Paging
====================

Paging helps present numerous items from the dataset dividing them into groups to display on separate pages. It is used in conjunction with 
data-presenting components like [dataview](desktop/dataview.md), [datatable](datatable/index.md) and [list](desktop/list.md). 

Pager can be initialized as 

- separate ui-related component (should be linked to a component to enable paging);
- as property of the component it is used for.

In both cases pager can be placed into its own HTML container different from that of the associated component. 

Main properties of a pager object: 

- api/ui.pager_size_config.md - the number of records per page;
- api/ui.pager_group_config.md -  the number of pages (numbered squares for paging);
- api/ui.pager_page_config.md - sets the page that will be shown intially (zero-based numbering). 

If a component container is too small to display the number of items specified by api/ui.pager_size_config.md, a scrollbar appears.

<img src="desktop/pager.png"/>

{{sample
25_pager/07_animate.html
}}

##Paging and Dynamic Loading

With dynamic loading, only part of the stored records are loaded into the component during init. 
Each time you page through the component, a data request is sent to server to load the next portion of data. 

Read more about [dynamic loading](desktop/dynamic_loading.md).

##Pager as separate view

In this case pager is initialized as separate component in layout and is linked to the datatable by ID. 

~~~js
webix.ui({
	rows:[
		{ 
    	   	view:"datatable",
			columns:[ ...],
			pager:"pagerA", //linking to a pager
		},
		{
			view:"pager", id:"pagerA",
			size:50,
			group:5
		}]
})      
~~~

{{sample 25_pager/03_layout.html}}

In this case when pager is a standalone view api/ui.pager_size_config.md property can be combined with either api/ui.pager_limit_config.md or api/ui.pager_count_config.md property to set the total values for the pager, namely:

- api/ui.pager_limit_config.md - the total number of pages in pager. The number of records will be calculated automatically. 
- api/ui.pager_count_config.md - the total number of records the pager will process. The number of pages will be calculated automatically. 

You can as well use Webix pager as a separate entity without master component and provide fully custom login for it - go to [the end of the article](#standalonepager) for details. 


##Pager as component property

Here pager object appears to be the property of a datatable and includes two parameters of its own.  

~~~js
webix.ui({
	view:"datatable",
	columns:[...],
	pager:{
		size:50,
		group:5
	}
});
~~~

{{sample 25_pager/01_visible.html }}

##Several Pagers per Component

If you want more than one pager for the component, for instance the ones above and below the view, there should be two containers in HTML layout, or 
two views with pager instances. The two pagers must be linked to each other with the help of the api/ui.pager_clone.md method. 

<img src="desktop/twoarea_pager.png">

You can clone both standalone pagers and those included into the component constructor. 

{{snippet
Cloning a standalone pager
}}
~~~js
//an identical pager
$$("pagerA").clone($$("pagerB")); 

//a pager with some properties of its own
$$('pagerA').clone({
	container:"pagingB_here",
	size:50,
	group:5
});
~~~

{{sample 25_pager/05_twoareas.html }}

With a component pager you need to get the pager object with the **getPager()** method: 

{{snippet
Cloning a component pager
}}
~~~js

grida.getPager().clone({
	container:"paging_here_too",
	size:10,
	group:5
});
~~~

{{sample 15_datatable/19_paging/04_many_pagers.html}}

{{note
Cloned pagers will change their values sumultaneously!
}}
 
##Invisible pager

Paging can be implemented through an invisible pager, which gives you an ability to control the process by custom functions and create your own 
"Next/Previous Page", "Jump to Start/End" buttons, etc. instead of a standard pager. 

For these needs you should include **apiOnly** parameter with *true* value into the pager constructor, whether it is initialized as a separate view or as a component's property. 

{{snippet
Datatable with Invisible Pager
}}
~~~js
view:"datatable",
...
pager:{
	id:"pagerA",
	apiOnly:true, //makes pager invisible
	size:50,
	group:5
}
~~~

In this case, dedicated buttons will help us page:

{{snippet 
Next Page Button
}}
~~~js
<input type='button' value='next page' onclick='next_page()'>
...
function next_page(){
	$$("pagerA").select("next");
}
~~~

{{sample 25_pager/02_apionly.html}}

**Select()** function can take the **index** of the desired pager (zero-based numbering,) or its **order* ("next", "prev", "first", "last"). 

##Custom Templates for Paging

By default, pager looks as numbered squares accompanying the component . But at the same time you can change the pattern with the help of a 
custom template: 

<img src="desktop/paging_custom.png"/>

**Template** elements may include the following elements: 

- *{common.prev()}* - 'less-than' sign, directs to previous page;
- *{common.first()}* - double 'less-than' sign, directs to the first page;
- *{common.next()}* - 'greater-than' sign, directs to the next page;
- *{common.last()}* - double 'greater-than' sign, directs to the last page;
- *{common.page()}* - displays the number of the current page (starting from 1);
- *{common.pages()}* - displays a set of numbered squares;
- pager data elements (e.g. '#limit#' to display the total number of pages);
- standard text.

~~~js
pager: {
	template: "{common.prev()}{common.next()}Page {common.page()} from #limit#"
}
~~~

{{sample 25_pager/04_template.html }}

##HTML Custom Pager

You can use HTML elements as a base for a custom pager that includes both **HTML tags** and **pager properties** in its **template**.  

**Properties** of the component pager are stored in the **data** object, pager templates reside in the **common** object:

- **data.page** - the index of the current page(zero-based numbering);
- **data.size** - the number of data records per page (either set manually, or calculated on the base of component size)
- **data.limit** - the number of record processed. Equals to the number of records in the connected component. 
- **common.next(), common.prev(), common.first(), common.last()** - page order signs. 

####Custom 'select' pager

<img src="desktop/select_pager.png">

~~~js
pager:{ 
	template:function(data, common){
		var current = data.page + 1;
		var html = "<select onchange='grida.setPage(this.value)' style='text-align:center; width:150px'>";
		for (var i=1; i<=data.limit; i++)
			html+="<option "+(i == current?"selected='true'":"")+">"+i+"</option>";
		html+="</select> from "+data.limit;
		return html;
	},
	container:"paging_here",
	size:10,
	group:5
}
~~~

{{sample 15_datatable/19_paging/06_custom_template.html}}

##Pager Localization

By default, pager uses recognizable signes to display **order buttons** (first, last, prev, next).  

{{snippet
Default Locale
}}
~~~js
webix.locale.pager = {
	first: " &lt;&lt; ",
	last: " &gt;&gt; ",
	next: " &gt; ",
	prev: " &lt; "
};
~~~

Pager localization allows using words of any language for these buttons:

<img src="desktop/custom_pager_locale.png">

{{snippet
Custom Locale
}}
~~~js
webix.locale.pager = {
	first: "First",
	last: "Last",
	next: "Next",
	prev: "Prev"
};
~~~

{{sample 15_datatable/19_paging/07_localization.html}}

##Animation during Paging

Animation it switched on by **animate** property. Set to *true*, it allows scrolling through the view in X or Y mode, depending on the scroll 
value of the main component. 

Animation can take various effects when they are stated in the **animate** constructor through type, subtype and direction parameters.

~~~js
pager: {
	animate:{
    	direction:"top",
        type:"flip"
    }
}
~~~

{{sample 25_pager/08_animate_types.html }}

Learn more about animation types and subtypes in the [corresponding chapter of the manual](desktop/animation.md). 

##Page and Component Size

Here we treat two tasks:

1 . How to ensure that the number of records per page equals to the number of records the component can display?

The number of records per page is stated by the **size**:(number) parameter of a pager. 

At the same time, the number of records can be limited in the component itself by the following parameters: 

- **yCount** (number) - the number of items in a vertical mode;
- **xCount**(number) - the number of items in the horizontal mode (typical of [dataview](desktop/dataview.md) and [x-list](desktop/xlist.md)).

All you need is to make these two parameters the same:

~~~
rows:[
	{
		view:"pager", 
    	id:"pagerA",
		size:10
	},
	{	
		view:"datatable",
		columns:[...],
		pager:"pagerA",
		yCount:10
    }
]
~~~

{{sample 25_pager/10_size_to_page.html }}

2 . How to **adjust component size** to page size? 

To adjust the number of records shown per page to the size of parent HTML container and, hence, to the component's height, you should let pager autosize. 

~~~js
<div id="testA" style='height:600px; width:300px;'></div>
...
webix.ui({
	rows:[
		{
			view:"pager", 
    		id:"pagerB",
			autosize:true,
			group:5
		},
		{
			view:"list",
			pager:"pagerB",
        	container:"testA"
		}
	]
});
~~~

{{sample 25_pager/11_page_to_size.html}}

##Paging Methods

**Getting Pager Object**

~~~js
$$("datatable1").getPager();
~~~

**Getting Current Page**

Note that you'll get page index (zero-based numbering), so add 1 to get the actual page number. 

~~~js
$$("datatable1").getPage(); 

//or, using the pager object
$$("pagerA").config.page; 
~~~

**Setting (Opening) Page**

To programmatically switch to the necessary page, specify the page's index within the dedicated method:

~~~js
$$("datatable1").setPage(2); // makes the third page visible
~~~

..or select the needed page:

~~~js
$$("datatable1").getPager().select(2); // -> selects the third page
~~~

##Standalone Pager

Pager can be used without master component for creating custom logic. To render such pager, the following code should be used:

~~~js
webix.ui({
  view: 'pager',
  template: '{common.prev()} {common.pages()} {common.next()}',
  master:false,
  size: 50,
  group: 5,
  count: 1000,
  on: {
      onItemClick: function(id, e, node) {
          //..some custom logic..
      }
  }
});
~~~

Template parameter can be omitted in favour of default template. 

{{sample 25_pager/12_standalone_pager.html }}


{{note 
Note that count and size parameters should be used anyway, **count** divided by **size** equals to the **total number** of pages. 
}}

@complexity:2
