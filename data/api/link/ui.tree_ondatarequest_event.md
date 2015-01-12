@link: api/dataloader_ondatarequest_event.md

@params:
- id	string, number	id of the parent node  the children of which should be loaded

@example:
tree.attachEvent("onDataRequest", function (id) {
	this.parse( 
  		webix.ajax().get('data.childload.php?id='+id).then(function (data) {
      		return { parent:id, data:data };
  		});
	)
    return false;
});