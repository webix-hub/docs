templateIcon
=============

@todo:
	check


@short:
	defines a template for icons that can be customized (used in "files" and "table" views)

@type: function
@example:
templateIcon: function(obj,common){
    return "<span class='webix_icon webix_fmanager_icon fa-"
        +(common.icons[obj.type]||common.icons["file"])+"'></span>";
}


@template:	api_config
@descr:


