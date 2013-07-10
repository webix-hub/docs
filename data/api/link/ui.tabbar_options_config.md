@link: api/ui.segmented_options_config.md

@short:
	defines tabs in a tabbar

@example:
webix.ui({
	view:"tabbar", 
    id:'tabbar', 
    value: 'listView', // the initially selected tab
    multiview:true, 
    options: [
          { value: 'List', id: 'listView'},
          { value: 'Form', id: 'formView'},
          { value: 'Empty', id: 'emptyView'}
          ]
});
