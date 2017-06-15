Accordion Item Configuration
===============

The "accordionitem" view inherits from [view](desktop/view.md) and is an integral part of the ui-related desktop/accordion.md component.
You need at least two Accordion items to make a workable Accordion. 

Any Accordion item must have two properties: **header** for heading and **body** for main text or some ui component.

~~~js
webix.ui({ 
     rows:[ // or cols
       	{
        	view:"accordionitem",
       		header:"Pane 1",
            headerHeight:20, 
            headerAlt:"Pane 2 Closed", 
            body:{ view:"form", ...} //ui component
        },
        { 
        	view:"accordionitem",
            header:"Pane ",
            headerAlt:"Pane 2 Closed",
            body:"This is Pane 2 body", //just text
            collapsed: true
        }]
})
~~~

####Comments: 

- **header** - defines text heading for a panel in an expanded state;
- **headerAlt** - defines text heading for a panel in a collapsed state;
- **headerHeight / headerAltHeight** - defines the height of a panel in an expanded/collapsed state;
- **collapsed** (false or true) - defines the panel that will be expanded/collapsed on the app's loading.

If you initialize **accordion** like below, you can omit initialization of accordion items: 

~~~js
webix.ui({ 
	view:"accordion",
    rows:[ 
       	{header:"Pane", body:"Pane 1"},
        {...}
       });
~~~

{{sample 80_docs/accordionitem.html}}

Accordion items can be collapsed and expanded with the help of dedicated methods: 

~~~js
$$('item1').collapse();
$$('item1').expand();
//don't forget to specify IDs to accordionitems!
~~~

{{note
If the items of your accordion are arranged in cols, their headers are collapsed to vertical panels as you close an accordionitem. 
}}




@seolinktop: [js frameworks](https://webix.com)
@seolink: [accordion js](https://webix.com/widget/accordion/)