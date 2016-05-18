templateDate
=============

@todo:
	check 


@short:
	defines a template applied for the format of folder/file's date of modification

@type: function
@example:

webix.ui({
    view:"filemanager",
    templateDate: function(obj){
        var date = obj.date;
        if(typeof(date) != "object"){
           date = new Date(parseInt(obj.date,10)*1000);
        }
        return webix.i18n.fullDateFormatStr(date);
    }
});


@template:	api_config
@descr:


