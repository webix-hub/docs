SpreadSheet General How-Tos
============================

How to create multiview with SpreadSheets?
------------------------------

It's possible to create several SpreadSheets on a page with the help of the multiview property of toolbar and switch between them with the help of a segmented button.

To implement such a configuration, you should initialize multiview with several spreadsheets first.
Then create a toolbar with a segmented button on it and specify the spreadsheets' ids in the options of the segmented button:

~~~js
webix.ui({
	rows:[
		{ cells:[
			{
				view:"spreadsheet",
				id:'ss1',
				columnCount:15,
				data: sheet1_data
			}, {
				view:"spreadsheet",
				id:'ss2',
				columnCount:15,
				data: sheet2_data
			}, {
				view:"spreadsheet",
				id:'ss3',
				columnCount:15,
				data: sheet3_data
			},
		]}			
	]		
	{	
		view:"toolbar", css:"webix_ssheet_toolbar", elements:[
			{
				view:"segmented", 
                multiview:true, 										
				options: [
					{ value: "List 1", id: 'ss1' },
					{ value: "List 2", id: 'ss2' },
					{ value: "List 3", id: 'ss3' }
				], width:390
			},
			{}
		]						
	}					
]
~~~

{{sample 65_spreadsheet/01_basic/07_multisheet.html}}


@spellcheck:Tos

@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [web spreadsheet](https://webix.com/spreadsheet/)