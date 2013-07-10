xml
=============


@short:the parser for data of the XML format.
	

@type:object

@example:
$$('mylist').data.driver = webix.DataDriver.xml;
$$('mylist').load("data.xml");
// it is the same as
$$('mylist').load("data.xml","xml");

@template:	api_config
@relatedsample:
	17_datatree/01_loading/02_xml_data.html
@related:
	desktop/data_types.md
    desktop/custom_data_types.md
@defined:	DataDriver	
@descr:
The object contains methods and properties for correct processing XML data. Processing logic can be changed, which allows using [custom tags for hierarchical data](desktop/custom_data_types.md). 
 

Component data can be loaded during initialization with datasource specified by the data property:

~~~js
var xml_data =
	'<data>
    	<item id="1" title="The Shawshank Redemption" year="1994"  />
        <item id="2" title="The Godfather" year="1972"  />
    </data>';
 
webix.ui({
    view:"datatable",
    columns:[..],
    datatype:"xml",
    data: xml_data
});
~~~


