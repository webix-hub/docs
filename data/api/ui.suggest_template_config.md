template
=============


@short: template which will be used to fill parent input from selected record
	

@type: template
@example:

webix.ui({
    view:"select",
    options:{
       template:"#name# from #city#",
       data:[
          { name:"Mark", city:"Hrodno" },
          { name:"Anna", city:"Brest" }
       ]
    }
})


@template:	api_config
@descr:


