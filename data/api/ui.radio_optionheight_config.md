optionHeight
=============

@short: height of radio-option item
	

@type: number
@example:

webix.ui({
  rows:[{
  	view:"radio", 
    vertical:true, 
    optionHeight:37,
    options:["Some <br> Text", "Other <br> Text " ]
  },{
    type:"header", template:"Bottom Line"
  }]
})

@template:	api_config
@descr:


This value is used only to calculate expected height of radio control