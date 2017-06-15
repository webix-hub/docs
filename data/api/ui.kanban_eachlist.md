eachList
=============

@short:
	iterates over all lists in Kanban and calls a function for them

@params:
- func		function			a function that will be called for each kanban list
	

@example:
$$("myBoard").eachList(function(list,status){
   if(list){
      list.define("type","edit");
      list.render();
   } 
});

@template:	api_method
@descr:
The func parameter takes two arguments:

- list - (object) KanbanList object
- status - (string) the list's status


@seolinktop: [javascript website framework](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)