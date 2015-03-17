multiview
=============


@short: enables switching between multiview cells
	

@type: boolean
@example:
rows:[
	{view:"tabbar", id:'tabbar', multiview:true, options: [
              { value: 'List', id: 'listView'},
              { value: 'Form', id: 'formView'},
              { value: 'Empty', id: 'emptyView'}
              ]
    },
    {cells:[
     	{id:"listView", ....},
        {id:"formView", ....},
     	{id:"emptyView", ....},
        ]
    }
]

@template:	api_config
@related:
	desktop/tabbar_switching.md
@relatedsample:
	02_toolbar/02_tabbar.html
@descr:

Segmented options and multiview cells must have the same IDs. 
