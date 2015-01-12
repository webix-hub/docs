API Reference
===============

Methods
-----------

###getUploader

returns the uploader object?

~~~js
fmanager.getUploader();
~~~

    
###updateStructure

updates the structure of File Manager

~~~js
fmanager.updateStructure();
~~~    


###getMenu

returns the context menu object

~~~js
fmanager.getMenu();
~~~    
   
   
###getPath    

returns an array of folders' ids in a path 
  
~~~js
fmanager.getPath(id);
~~~    
   
params:

- id - {string} the id of the selected folder
 
 
###getPathNames

returns an array of folders' names in a path

~~~js
fmanager.getPathNames(id);
~~~		

params:

- id - {string} the id of the selected folder
 
 
###setPath        
    
sets the path to the currently selected folder

~~~js
fmanager.setPath(id);
~~~
		
params:

- id - {string} the id of the selected folder



###getSearchData

returns the results of file's searching

~~~js
fmanager.getSearchData(id,value);
~~~

params:

- id - {string} the id of the found file/folder
- value - {}

{
		var found = [];
		this.data.each(function(obj){
			var text = this.config.templateName(obj);
			if(text.toLowerCase().indexOf(value.toLowerCase())>=0){
				found.push(webix.copy(obj));
			}
		},this,true,id);
		return found;
	},
    
    
	showSearchResults: function(value){
		this.callEvent("onShowSearchResults",[]);
		var data = 	this.getSearchData(this.getCursor(),value);
		this.$searchResults = true;
		if(this.$$(this.config.mode).filter){
			this.$$(this.config.mode).clearAll();
			this.$$(this.config.mode).parse(data);
		}
	},
    
    
	hideSearchResults: function(){
		this.callEvent("onHideSearchResults",[]);
		this.$searchResults = false;
		var id = this.getCursor();
		this._cursor = null;
		this.setCursor(id);
	},
    
    
	goBack: function(step){
		step = (step?(-1)*Math.abs(step):-1);
		return this._changeCursor(step);
	},
    
    
	goForward: function(step){
		return this._changeCursor(step||1);
	},
    
    
	levelUp: function(id){
		id = id||this.getCursor();
		if(id){
			id = this.getParentId(id);
			this.setCursor(id);
		}
	},
    
    
	markCopy: function(ids){
		if(ids){
			if(!webix.isArray(ids)){
				ids = [ids];
			}
			this._moveData = ids;
			this._copyFiles = true;
		}
	},
    
    
	markCut: function(ids){
		if(ids){
			if(!webix.isArray(ids)){
				ids = [ids];
			}
			this._moveData = ids;
			this._copyFiles = false;
		}
	},
    
    
	pasteFile: function(id){
		if(webix.isArray(id)){
			id = id[0];
		}
		if(id){
			id = id.toString();
			if(this.data.branch[id]&&this.getItem(id).type == "folder"){
				if(this._moveData){
					if(this._copyFiles){
						this.copyFile(this._moveData,id);
					}
					else
						this.moveFile(this._moveData,id);
				}
			}
		}
	},
    
    
	download:function(id){
		var url = this.config.handlers.download;
		if (url)
			webix.send(url, { action:"download", source: id });
	},
    
    
	copyFile:function(source, target){
		if(typeof(source) == "string"){
			source = source.split(",");
		}
		if(!webix.isArray(source)){
			source = [source];
		}
		for(var i=0; i<source.length; i++){
			this.move(source[i].toString(),0,this,{parent:target,copy:true});
		}
		this.refreshCursor();

		var url = this.config.handlers["copy"];
		if (url){
			this._makeSaveRequest(url,{ action:"copy", source:source.join(","), target: target });
		}

	},
    
    
	moveFile:function(source, target){
		if(typeof(source) == "string"){
			source = source.split(",");
		}
		if(!webix.isArray(source)){
			source = [source];
		}
		for(var i=0; i<source.length; i++){
			this.move(source[i].toString(),0,this,{parent:target,copy:false});
		}
		this.refreshCursor();
		var url = this.config.handlers["move"];

		if (url){
			this._makeSaveRequest(url,{ action:"move", source:source.join(","), target: target });
		}
	},
    
    
	deleteFile:function(ids){
		if(typeof(ids) == "string"){
			ids = ids.split(",");
		}
		if(!webix.isArray(ids)){
			ids = [ids];
		}
		for(var i=0; i<ids.length; i++){
			var id = ids[i];
			if(id == this.getCursor())
				this.setCursor(this.getFirstId());
			if(id)
				this.remove(id);
		}
		this.refreshCursor();

		var url = this.config.handlers["delete"];
		if (url){
			this._makeSaveRequest(url,{ action:"delete", source:ids.join(",") });
		}
	},

	createFolder: function(id){
		if(typeof(id) == "string"){
			id = id.split(",");
		}
		if(webix.isArray(id)){
			id = id[0];
		}
		if(id){
			id = ""+id;
			var item = this.getItem(id);
			if(!this.data.branch[id] && (item.type != "folder")){
				id = this.getParentId(id);
			}
			var obj = this.config.templateCreate(item);
			id = ""+id;
			var sourceId = this.add(obj, 0, id);
			this.refreshCursor();


			var url = this.config.handlers["create"];
			if (url){
				obj.source = sourceId;
				obj.action = "create";
				obj.target = id;
				this._makeSaveRequest(url,obj,function(requestData,responseData){
					if(responseData.id){
						this.data.changeId(requestData.id,responseData.id);
					}
				});
			}
		}
	},
    
    
	editFile: function(id){
		if(webix.isArray(id)){
			id = id[0];
		}
		if(this.getActiveView().edit)
			this.getActiveView().edit(id);

	},
    
    
	renameFile: function(id,name,field){
		var item = this.getItem(id);
		field = (field||"value");
		item[field] = name;
		this.refreshCursor();
		this.callEvent("onFolderSelect",[this.getCursor()]);

		var url = this.config.handlers.rename;
		if (url){
			var obj = { source:id, action:"rename", target: name};
			this._makeSaveRequest(url,obj,function(requestData,responseData){
				if(responseData.id){
					this.data.changeId(requestData.id,responseData.id);
				}
			});
		}
	},
    
    
    getActiveView: function(){
		return this._activeView;
	},
    
    
	getActive: function(){
		var selected = this.$$(this.config.mode).getSelectedId(true);
		var selectedIds = [];

		if(!webix.isArray(selected))
			selectedIds = selected.toString();
		else
			for(var i=0; i < selected.length; i++){
				selectedIds.push(selected[i].toString());
			}
		return selectedIds.length?selectedIds:this.getCursor();
	},
    
    uploadFile: function(id){
		var uploader = this.getUploader();
		this._uploaderFolder = id;
		if(uploader)
			uploader.fileDialog();
	},