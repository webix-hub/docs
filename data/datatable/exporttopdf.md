Export to PDF
=================

To export data from a data component into a PDF file, you need to call the api/_topdf.md method. The method takes the next parameters:

- **id** - (string, object) id or object of the exported view 
- **config** - (object) optional, configuration options

For example, if you want to export a datatable to a PDF file, you need to call the toPDF() method with the datatable id as a parameter:

~~~js
{
    view:"datatable",
    id: "myDatatable",
    // datatable configuration
    ...
}
~~~

And then the call of the toPDF() method should follow. 

~~~js
webix.toPDF($$("myDataTable"));
~~~

{{sample 15_datatable/10_export/06_pdf.html }}

Customizing Export to PDF
-------------------------

###Customizing export data

The toPDF() method returns all data specified in the **columns** parameter of the datatable view. However, you may 
need to get data from other fields as well as restrict the number of fields in the export file. You can set the necessary fields
in the **columns** property of the toPDF() method.

**Export API allows** 

- setting **columns** you'd like to see in the export file 

~~~js
webix.toPDF($$("myDataTable"), {
	columns:{
		"rank":true,
		"title":true
	}
});

~~~

- defining custom parameters, such as **header**, **width** or **template** for data in the specified column: 

~~~js
webix.toPDF($$("myDataTable"), {
  columns:{
	title:{ header: "My title", width: 200, template: webix.template("#id#.#title#")},
	year:{ header:"Year", width:150}
  }
});
~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters. 

- **including extra fields** into export by forming them right within the export function:

~~~js
webix.toPDF(datatable, { 
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

###Customizing exported document

**Export API allows** 

- setting a custom filename (it's *data* by default)

~~~js
webix.toPDF($$("myDataTable"), {
	filename:"datatable"
});
~~~

{{sample 15_datatable/10_export/06_pdf.html}} 

- specifying the **autowidth** parameter to define the columns' width automatically. By default, the paper size of a PDF document is A4. 
If you set the autowidth property to true, columns will be able to have any possible width that will define the width of a PDF page

~~~js
webix.toPDF($$("myDataTable"), {
	autowidth:true
});
~~~

- setting the **orientation** parameter which defines the PDF page orientation: *portrait* (default) or *landscape*

~~~js
webix.toPDF($$("myDataTable"), {
	orientation:"landscape"
});
~~~

- specifying the **docHeader** and **docHeaderImage** parameters to display some text or image in the header of the export file

~~~js
// setting a custom text in the header of the PDF file
webix.toPDF($$("myDataTable"), {
	docHeader:"This document was made with Webix library. http://webix.com"
});

// setting a custom image in the header of the PDF file
webix.toPDF($$("myDataTable"), {
	docHeaderImage:"../common/logo.jpg",
});
~~~

{{sample 15_datatable/10_export/07_pdf_config.html}}


Styling the exported data
-----------------------

You can tune the appearance of elements in the exported PDF document.

###Configuring the document's header


To configure the header of the exported PDF document, you can set a configuration object as a value of the **docHeader** property.
Inside this object beside the text string specify all the needed properties, e.g. define the text alignment and color.

An example config may look as:

~~~js
webix.toPDF($$("myDataTable"), {
	docHeader:{
		text: "Datatable with custom styling",
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
webix.toPDF($$("myDataTable"), {
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

###Configuring the document's table

It's also quite easy to configure the look of the resulting table with data. You can manage the appearance of the following component's elements to get the desired result:

- the table's header, e.g. set text alignment, the font size, the background color and the color of the text:

~~~js
webix.toPDF($$("myDataTable"), {
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
webix.toPDF($$("myDataTable"), {
	table:{
		textAlign:"center"
	}
});
~~~

- the table's footer, e.g. by specifying the font size, its height and text alignment:

~~~js
webix.toPDF($$("myDataTable"), {
	footer:{
		fontSize:9,
		height:20,
		textAlign:"right"
	}
});
~~~

More possible configuration properties are described in the [corresponding documentation](https://github.com/rkusa/pdfjs/tree/master/docs)
(follow the "document/tableopts" section)

{{sample 15_datatable/10_export/08_pdf_style.html}}
