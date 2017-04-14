list
=============

@todo:
	check 


@short:
	sets the configuration of lists in the Double List widget

@type: object
@example:
webix.ui({
  view:"dbllist",
  list:{ 
     autoheight: true,
     select: false,
     template:function(obj, common){
      var dir = (common.id  === "left" ? "right" : "left");
      return obj.value + "<span class='select_one webix_icon fa-arrow-"+dir+"'></span>"
     },
     onClick:{
       "select_one":function(e, id){
          var mode = this.config.$id === "left";
          this.getTopParentView().select(id, mode);
          return false;
        }
     }
  },
  buttons:false,
  data:[
     {id:"1", value:"Contacts"},
     {id:"2", value:"Products"},
     {id:"3", value:"Reports"}
  ]
});



@template:	api_config
@descr:

@relatedsample:
13_form/01_controls/25_dbllist_buttons.html

@related:
desktop/double_list.md

