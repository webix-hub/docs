ping
=============

@short:
	aborts long processes

@type: function
@example:
webix.ui({
 	margin:30, 
 	rows: [
 		{
 			id:"pivot", 
            view:"pivot",
 			ping:function(start){
 				var now = (new Date()).valueOf();
 				//break if processing is longer than 3 seconds 
 				if (now - start > 3*1000){
 					alert("Too complex parameters, aborting");
 					throw new Error("Aborting...");
 				}
 			},
 			height:400, 
 			width:1000,
 			data: bad_dataset,
 			max: true
         },
 		{ cols:[
 			{ view:"button", value:"Build Pivot (fast)"},
 			{ view:"button", value:"Build Pivot (slow)"}
 		]}
 	]
});

@template:	api_config
@descr:




@seolinktop: [html5 framework](https://webix.com)
@seolink: [javascript pivot table](https://webix.com/pivot/)