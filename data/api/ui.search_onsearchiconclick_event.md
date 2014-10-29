onSearchIconClick
========================

@short: fires after the 'search' icon has been clicked in the input

@params:
- e		Event	event object

@template:api_event

@example:

$$("search_field").attachEvent("onSearchIconClick", function(e){
	var value = this.getvalue();
    //...
});