@link: api/atomdataloader_data_config.md

@example: 
var data = [
	{ id:"1", open:true, value:"The Shawshank Redemption", data:[
    	{ id:"1.1", value:"Part 1" },
    	{ id:"1.2", value:"Part 2" },
    	{ id:"1.3", value:"Part 3" }
  	]},
  	{ id:"2", value:"The Godfather", open:true, data:[
    	{ id:"2.1", value:"Part 1" },
    	{ id:"2.2", value:"Part 2" }
  	]}
];

webix.ui({
	view:"tree", data:data
});
@relatedsample:
	17_datatree/01_loading/01_json_data.html
@related:
	desktop/data_loading.md
    datatree/node_templates.md
    
@descr:

After the data is parsed, each data item will be supplied 
with the following properties to form the hierarchy: 

- **$level** - (*number*) the level of nesting (one-based numbering);
- **parent** - (*string*) the id of thr item's parent;
- **$count** - (*number*) the number of childs
	

@seolinktop: [javascript ui library](https://webix.com)
@seolink: [tree ui](https://webix.com/widget/tree/)