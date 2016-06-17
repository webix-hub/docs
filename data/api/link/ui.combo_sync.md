@link: api/atomrender_sync.md

@example:

//full copy
$$('$combo').getList().data.sync(data);

//partial copy			
$$('$combo').getList().data.sync(data, function(){
	this.filter(function(data){
		return data.year > 1994;
	});
}); 

@descr:
Pay attention that you need to call the getList() method to access the data collection of Combo and Richselect.