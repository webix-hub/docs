Full Code for Toolbar Elements
=============================

Below you will find the full configuration of Toolbar elements:

~~~js
toolbar: [
	{
		padding: 3,
		margin: 0,
		rows:[
			{
				margin: 2,
				cols: [
					{
						name: "sheet", 
                        view: "ssheet-button-icon-top", 
                        text: "Sheets", 
                        arrow: true,
						options:[
							{id: "new-sheet"},
							{id: "copy-sheet"},
							{id: "remove-sheet"}
						]
					},
					{
						rows:[
							{$button: "excel-import"},
							{$button: "excel-export"}
						]
					}
				]
			},
			{},
			{ template: "file", view: "ssheet-bar-title", height: 24, width: 85 }
		]
	},
	{view: "ssheet-separator"},
	{
		padding: 3,
		rows:[
			{
            	$button: "undo", 
                view: "ssheet-button", 
                label: "Undo", 
                width: 60 
            },
			{
            	$button: "redo", 
                view: "ssheet-button", 
                label: "Redo", 
                width: 60
            },
			{ template: "Undo/redo", view: "ssheet-bar-title", height: 24}
		]
	},
	{view: "ssheet-separator"},
	{
		padding: 3,
		rows:[
			{
				margin: 2,
				cols:[
					{
						margin: 2,
						cols:[
							{$button: "font-family", width: 90},
							{$button: "font-size"}
						]
					},
					{$button: "borders"}
				]
			},
			{
				margin: 2,
				cols:[
					{
						margin: 2,
						cols:[
							{$button: "font-weight"},
							{$button: "font-style"},
							{$button: "text-decoration"}
						]
					},

					{$button: "background"}
				]
			},
			{template: "font", view: "ssheet-bar-title", height: 24}
		]
	},
	{view: "ssheet-separator"},
	{
		padding: 3,
		rows:[
			{
				margin: 2,
				cols:[
					{$button: "text-align"},
					{$button: "span"}
				]
			},
			{
				margin: 2,
				cols:[
					{$button: "vertical-align"},
					{$button: "wrap"}
				]
			},
			{template: "Align", view: "ssheet-bar-title", height: 24}
		]
	},
	{view: "ssheet-separator"},
	{
		padding: 3,
		rows:[
			{$button: "format"},
			{$button: "custom-format"},
			{template: "Number", view: "ssheet-bar-title", height: 24}
		]
	},
	{ view: "ssheet-separator" },
	{
		padding: 3,
		rows:[
			{cols:[
				{ $button: "sort-asc"},
				{ $button: "create-filter"},
				{ $button: "conditional-format"},
				{ $button: "remove-format"},
				{ $button:"clear-data"},
				{ $button:"add-link"}
			]},
			{cols:[
				{ $button: "sort-desc"},
				{ $button: "add-range"},
				{ $button: "lock-cell"},
				{ $button: "add-dropdown"},
				{ $button: "clear-styles"}
			]},
			{template: "Edit", view: "ssheet-bar-title", height: 24}
		]
	},
	{ view: "ssheet-separator" },
	{
		padding: 3,
		rows:[
			{
            	$button: "add-image", 
                view: "ssheet-button", 
                label: "Image", 
                width: 65
            },
			{
            	$button: "add-sparkline", 
                view: "ssheet-button", 
                label: "Graph", 
                width: 65
            },
			{ template: "Insert", view: "ssheet-bar-title", height: 24}
		]
	},
	{ view: "ssheet-separator" },
	{
		padding: 3,
		rows:[
			{
				cols:[
					{rows:[
						{$button:"row"},
						{$button:"column"}
					]},
					{
						rows:[
							{$button:"hide-gridlines"},
							{$button:"hide-headers"}
						]
					},
					{
						rows:[
							{$button:"freeze-rows"},
							{$button:"freeze-columns"}
						]
					}
				]
			},
			{template: "View", view: "ssheet-bar-title", height: 24}
		]
 	}
]
~~~

