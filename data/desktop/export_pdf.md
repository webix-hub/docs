Data Components Export to PDF
==================================


You can export Webix data components to the PDF format. The components don't require any special configuration to be exported.

{{note
The described functionality is available both in Standard and Pro versions, but pay attention that the IE browser is supported starting from version 10.
}}


To export a component into a PDF file, you need to call the api/_topdf.md method. The method takes the next parameters:

- **id** - (string, object) id or object of the exported view 
- **name** - (string) optional, name of an exported png file

For example, if you want to export a list to a PDF file, you need to call the toPDF() method with the list id as a parameter:

~~~js
webix.ui({
    view:"list",
    id: "mylist",
    // list configuration
    ...
});
 
webix.toPDF($$("mylist"));
~~~

{{sample 15_datatable/10_export/06_pdf.html }}

Customizing Export to PDF
-------------------------

The toPDF() method returns all data specified in the dataset of a component without any data formatting. However, you may 
need to get data from some particular fields. 


**Export API allows** 

- setting **columns** you'd like to see in the export file 

~~~js
webix.toPDF($$("mylist"), {
	columns:{
		"rank":true,
		"title":true
	}
});

~~~

- defining custom parameters, such as **header**, **width** or **template** for data in the specified column: 

~~~js
webix.toPDF($$("mylist"), {
  columns:{
	title:{ header: "My title", width: 200, template: webix.template("#id#.#title#")},
	year:{ header:"Year", width:150}
  }
});
~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters. 

- **including extra fields** into export by forming them right within the export function:

~~~js
webix.toPDF(list, { 
	columns:{ 
		Custom1:{
			template:function(obj){
				return "Year " + obj.year;
			},
			width:50,
			header:"Year"
		},
        //other columns
		title:true
	}
});
~~~

"Custom1" (any name can be used) receives data from the **year** field even if it is not seen in this component but is presented in its dataset.
The field is rendered with **width** and **template** as well as **header** that will be the header of the corresponding column in the resulting table. 


- specifying the **autowidth** parameter to define the columns' width automatically. By default, the paper size of a PDF document is A4. 
If you set the autowidth property to true, columns will be able to have any possible width that will define the width of a PDF page

~~~js
webix.toPDF($$("mylist"), {
	autowidth:true
});
~~~

- setting the **orientation** parameter which defines the PDF page orientation: *portrait* (default) or *landscape*

~~~js
webix.toPDF($$("mylist"), {
	orientation:"landscape"
});
~~~

- specifying the **docHeader** and **docHeaderImage** parameters to display some text or image in the header of the export file

~~~js
// setting a custom text in the header of the PDF file
webix.toPDF($$("mylist"), {
	docHeader:"This document was made with Webix library. http://webix.com"
});

// setting a custom image in the header of the PDF file
webix.toPDF($$("mylist"), {
	docHeaderImage:"../common/logo.jpg",
});
~~~

{{sample 15_datatable/10_export/07_pdf_config.html}}

Styling the exported data
-----------------------

Since data export to PDF is implemented with the help of the [third-party library](https://github.com/rkusa/pdfjs), 
you can tune the appearance of elements in the exported PDF document using properties described 
in its [documentation](https://github.com/rkusa/pdfjs/tree/master/docs). 

###Configuring the document's header


To configure the header of the exported PDF document, you can set a configuration object as a value of the **docHeader** property.
Inside this object besides the text string specify all the needed properties, e.g. define the text alignment and color.

An example config may look as:

~~~js
webix.toPDF($$("mylist"), {
	docHeader:{
		text: "List with custom styling",
		textAlign:"center",
		color:0x663399
	}
});
~~~

Pay attention that the color should be set in hex format starting from the 0x prefix. 

There are many other possible properties of the config object. You can look all them up in the [corresponding documentation](https://github.com/rkusa/pdfjs/tree/master/docs)
(follow the "document/headeropts" section).

###Configuring the header image

The export API allows you not only to set the link to the image, but also to specify an object with the necessary configuration properties of the image: 

~~~js
webix.toPDF($$("mylist"), {
	docHeaderImage:{ 
		url:"link", 
    	align:"left", // "right"/"center"
    	width:300, 
    	height:20 
	}
});
~~~

Thus, you can configure the image's alignment, as well as its width and the height. More options are enumerated in the [specific documentation](https://github.com/rkusa/pdfjs/tree/master/docs) 
(see the "document/imageimg-opts" section).

{{sample 15_datatable/10_export/08_pdf_style.html}}

###Configuring the document's table

It's also quite easy to configure the look of the resulting table with data. You can manage the table's elements to get the desired result:

- the table's header, e.g. set text alignment, the font size, the background color and the color of the text:

~~~js
webix.toPDF($$("mylist"), {
	header:{
		textAlign:"center",
		fontSize:13,
		backgroundColor:0x3498DB,
		color:0xFFFFFF
	}
});
~~~

- the table itself, e.g. align the text in it:

~~~js
webix.toPDF($$("mylist"), {
	table:{
		textAlign:"center"
	}
});
~~~

- the table's footer, e.g. by specifying the font size, its height and text alignment:

~~~js
webix.toPDF($$("mylist"), {
	footer:{
		fontSize:9,
		height:20,
		textAlign:"right"
	}
});
~~~

{{sample 15_datatable/10_export/08_pdf_style.html}}

More possible configuration properties are described in the [corresponding documentation](https://github.com/rkusa/pdfjs/tree/master/docs)
(follow the "document/tableopts" section).


