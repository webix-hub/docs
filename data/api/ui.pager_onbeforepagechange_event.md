onBeforePageChange
=============

@short:
	fires before the page is changed

@params:
- old_page			number			the index of the changed page	
- new_page			number			the index of the new page

@example:
pager:{
	container:"paging_here",
	size:10,
	group:5,
	on:{
    	onBeforePageChange:function(new_page, old_page){
			console.log(new_page, old_page)
	}}
}

@template:	api_event
@descr:

@relatedapi:
api/ui.pager_onafterpagechange_event.md
