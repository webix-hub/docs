$popup
=============


@short: set of configuration options for popup editors

@type: object

@example:
   webix.editors.$popup = {
        text:{
            view:"popup", 
            body:{view:"textarea", width:250, height:50}
        },
        color:{
            view:"popup",
            body:{ view:"colorboard", width:200, height:200, rows:20, cols:20 }
        },
        date:{
            view:"popup",
            body:{ view:"calendar", weekNumber:true, width: 220, height:200}
        }
    };

@template:	api_config

@relatedsample: 
	98_docs/editors.html
@related:
	desktop/editing.md
@descr:

$popup allows for changing all the popup editors in one scope. 

{{note
Date and Color editors are popups by default. For text popup editor, you should specify the **"popup"** value for the **editor** property. 
}}


