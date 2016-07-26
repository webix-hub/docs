templateIcon
=============

@short:
	a customizable template for icons in "Files" and "Table" view modes

@type: function
@example:
templateIcon: function(obj,common){
    return "<span class='webix_icon webix_fmanager_icon fa-"
        +(common.icons[obj.type]||common.icons["file"])+"'></span>";
}


@template:	api_config
@descr:


