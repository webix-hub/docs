@link: api/atomdataloader_data_config.md

@example:

var data: [
	{ "id":"1", 
      "value":"The Shawshank Redemption",
      "open":true, 
      "data":[
		{ "id":"1.1", "value":"Part 1", "chapter":"alpha"},
		{ "id":"1.2", "value":"Part 2", "chapter":"beta", "open":true, 
           "data":[
			{ "id":"1.2.1", "value":"Part 1", "chapter":"beta-twin"},
			{ "id":"1.2.2", "value":"Part 1", "chapter":"beta-twin"}
            ]
        }
     }
];

webix.ui({
	view:"treetable",
    data:data,
    columns:[
		{ id:"id", header:""},
		{ id:"value", header:"Film title",
						template:"{common.treetable()} #value#" },
		{ id:"chapter",	header:"Mode",	width:200}
	]
});

@relatedsample:15_datatable/30_treetable/01_init.html


@related:
	desktop/data_loading.md
    datatree/node_templates.md
    
@descr:

After the data is parsed, each data item will be supplied 
with the following properties to form the hierarchy: 

- **$level** - (*number*) the level of nesting (one-based numbering);
- **parent** - (*string*) the id of thr item's parent;
- **$count** - (*number*) the number of childs

@seolinktop: [ui widget library](https://webix.com)
@seolink: [tree table widget](https://webix.com/widget/treetable/)