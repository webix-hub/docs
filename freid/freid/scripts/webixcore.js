

/*webix:require			core/load.js*/
/* 
	ajax operations 
	
	can be used for direct loading as
		webix.ajax(ulr, callback)
	or
		webix.ajax().item(url)
		webix.ajax().post(url)

*/



/*webix:require			core/webix.js*/


/*webix:require			core/assert.js*/
if (!window.webix) 
	webix={};

//check some rule, show message as error if rule is not correct
webix.assert = function(test, message){
	if (!test){
		webix.assert_error(message);
	}
};

webix.assert_config = function(obj){
	var coll = obj.cells || obj.rows || obj.elements || obj.cols;
	if (coll)
		for (var i=0; i<coll.length; i++)
			if (coll[i] === null || typeof coll[i] === "undefined")
				webix.assert_error("You have trailing comma or Null element in collection's configuration");
};

webix.assert_error = function(message){
	webix.log("error",message);
	if (webix.message && typeof message == "string")
		webix.message({ type:"debug", text:message, expire:-1 });
	if (webix.debug !== false)
		debugger;
};

//entry point for analitic scripts
webix.assert_core_ready = function(){
	if (window.webix_on_core_ready)	
		webix_on_core_ready();
};

webix.assert_level = 0;

webix.assert_level_in = function(){
	webix.assert_level++;
	if (webix.assert_level == 100)
		webix.assert_error("Attempt to copy object with self reference");
};
webix.assert_level_out = function(){
	webix.assert_level--;
};

/*
	Common helpers
*/
webix.version="3.0";
webix.codebase="./";
webix.name = "Core";

//coding helpers
webix.clone = function(source){
	var f = webix.clone._function;
	f.prototype = source;
	return new f();
};
webix.clone._function = function(){};

//copies methods and properties from source to the target
webix.extend = function(base, source, force){
	webix.assert(base,"Invalid mixing target");
	webix.assert(source,"Invalid mixing source");

	if (base._webix_proto_wait){
		webix.PowerArray.insertAt.call(base._webix_proto_wait, source,1);
		return base;
	}
	
	//copy methods, overwrite existing ones in case of conflict
	for (var method in source)
		if (!base[method] || force)
			base[method] = source[method];
		
	//in case of defaults - preffer top one
	if (source.defaults)
		webix.extend(base.defaults, source.defaults);
	
	//if source object has init code - call init against target
	if (source.$init)	
		source.$init.call(base);
				
	return base;	
};

//copies methods and properties from source to the target from all levels
webix.copy = function(source){
	webix.assert(source,"Invalid mixing target");
	webix.assert_level_in();

	if(arguments.length>1){
		var target = arguments[0];
		source = arguments[1];
	} else 
		var target =  (webix.isArray(source)?[]:{});

	for (var method in source){
		if(source[method] && typeof source[method] == "object" && !webix.isDate(source[method])){
			target[method] = (webix.isArray(source[method])?[]:{});
			webix.copy(target[method],source[method]);
		}else{
			target[method] = source[method];
		}
	}

	webix.assert_level_out();
	return target;	
};


webix.single = function(source){ 
	var instance = null;
	var t = function(config){
		if (!instance)
			instance = new source({});
			
		if (instance._reinit)
			instance._reinit.apply(instance, arguments);
		return instance;
	};
	return t;
};

webix.protoUI = function(){
	if (webix.debug_proto)
		webix.log("UI registered: "+arguments[0].name);
		
	var origins = arguments;
	var selfname = origins[0].name;
	
	var t = function(data){
		if (!t)
			return webix.ui[selfname].prototype;

		var origins = t._webix_proto_wait;
		if (origins){
			var params = [origins[0]];
			
			for (var i=1; i < origins.length; i++){
				params[i] = origins[i];
				
				if (params[i]._webix_proto_wait)
					params[i] = params[i].call(webix, params[i].name);

				if (params[i].prototype && params[i].prototype.name)
					webix.ui[params[i].prototype.name] = params[i];
			}
			webix.ui[selfname] = webix.proto.apply(webix, params);
			if (t._webix_type_wait)	
				for (var i=0; i < t._webix_type_wait.length; i++)
					webix.Type(webix.ui[selfname], t._webix_type_wait[i]);
				
			t = origins = null;	
		}
			
		if (this != webix)
			return new webix.ui[selfname](data);
		else 
			return webix.ui[selfname];
	};
	t._webix_proto_wait = Array.prototype.slice.call(arguments, 0);
	return webix.ui[selfname]=t;
};

webix.proto = function(){
	 
	if (webix.debug_proto)
		webix.log("Proto chain:"+arguments[0].name+"["+arguments.length+"]");

	var origins = arguments;
	var compilation = origins[0];
	var has_constructor = !!compilation.$init;
	var construct = [];
	
	webix.assert(compilation,"Invalid mixing target");
		
	for (var i=origins.length-1; i>0; i--) {
		webix.assert(origins[i],"Invalid mixing source");
		if (typeof origins[i]== "function")
			origins[i]=origins[i].prototype;
		if (origins[i].$init) 
			construct.push(origins[i].$init);
		if (origins[i].defaults){ 
			var defaults = origins[i].defaults;
			if (!compilation.defaults)
				compilation.defaults = {};
			for (var def in defaults)
				if (webix.isUndefined(compilation.defaults[def]))
					compilation.defaults[def] = defaults[def];
		}
		if (origins[i].type && compilation.type){
			for (var def in origins[i].type)
				if (!compilation.type[def])
					compilation.type[def] = origins[i].type[def];
		}
			
		for (var key in origins[i]){
			if (!compilation[key] && compilation[key] !== false)
				compilation[key] = origins[i][key];
		}
	}
	
	if (has_constructor)
		construct.push(compilation.$init);
	
	
	compilation.$init = function(){
		for (var i=0; i<construct.length; i++)
			construct[i].apply(this, arguments);
	};
	if (compilation.$skin)
		compilation.$skin();

	var result = function(config){
		this.$ready=[];
		webix.assert(this.$init,"object without init method");
		this.$init(config);
		if (this._parseSettings)
			this._parseSettings(config, this.defaults);
		for (var i=0; i < this.$ready.length; i++)
			this.$ready[i].call(this);
	};
	result.prototype = compilation;
	
	compilation = origins = null;
	return result;
};
//creates function with specified "this" pointer
webix.bind=function(functor, object){ 
	return function(){ return functor.apply(object,arguments); };  
};

//loads module from external js file
webix.require=function(module, callback, master){
	if (typeof module != "string"){
		var count = module.length||0;
		var callback_origin = callback;

		if (!count){
			for (var file in module) count++;
			callback = function(){ count--; if (count === 0) callback_origin.apply(this, arguments); };
			for (var file in module)
				webix.require(file, callback, master);
		} else {
			callback = function(){
				if (count){
					count--;
					webix.require(module[module.length - count - 1], callback, master);
				} else 
					return callback_origin.apply(this, arguments);
				
			};
			callback();
		}
		return;
	}

	if (webix._modules[module] !== true){
		if (module.substr(-4) == ".css") {
			var link = webix.html.create("LINK",{  type:"text/css", rel:"stylesheet", href:webix.codebase+module});
			document.head.appendChild(link);
			if (callback)
				callback.call(master||window);
			return;
		}

		var step = arguments[4];

		//load and exec the required module
		if (!callback){
			//sync mode
			webix.exec( webix.ajax().sync().get(webix.codebase+module).responseText );
			webix._modules[module]=true;
		} else {

			if (!webix._modules[module]){	//first call
				webix._modules[module] = [[callback, master]];

				webix.ajax(webix.codebase+module, function(text){
					webix.exec(text);	//evaluate code
					var calls = webix._modules[module];	//callbacks
					webix._modules[module] = true;
					for (var i=0; i<calls.length; i++)
						calls[i][0].call(calls[i][1]||window, !i);	//first callback get true as parameter
				});
			} else	//module already loading
				webix._modules[module].push([callback, master]);
		}
		
	}
};
webix._modules = {};	//hash of already loaded modules

//evaluate javascript code in the global scoope
webix.exec=function(code){
	if (window.execScript)	//special handling for IE
		window.execScript(code);
	else window.eval(code);
};

webix.wrap = function(code, wrap){
	if (!code) return wrap;
	return function(){
		var result = code.apply(this, arguments);
		wrap.apply(this,arguments);
		return result;
	};
};

//check === undefined
webix.isUndefined=function(a){
	return typeof a == "undefined";
};
//delay call to after-render time
webix.delay=function(method, obj, params, delay){
	return window.setTimeout(function(){
		var ret = method.apply(obj,(params||[]));
		method = obj = params = null;
		return ret;
	},delay||1);
};

//common helpers

//generates unique ID (unique per window, nog GUID)
webix.uid = function(){
	if (!this._seed) this._seed=(new Date).valueOf();	//init seed with timestemp
	this._seed++;
	return this._seed;
};
//resolve ID as html object
webix.toNode = function(node){
	if (typeof node == "string") return document.getElementById(node);
	return node;
};
//adds extra methods for the array
webix.toArray = function(array){ 
	return webix.extend((array||[]),webix.PowerArray, true);
};
//resolve function name
webix.toFunctor=function(str){ 
	return (typeof(str)=="string") ? eval(str) : str; 
};
/*checks where an object is instance of Array*/
webix.isArray = function(obj) {
	return Array.isArray?Array.isArray(obj):(Object.prototype.toString.call(obj) === '[object Array]');
};
webix.isDate = function(obj){
	return obj instanceof Date;
};

//dom helpers

//hash of attached events
webix._events = {};
//attach event to the DOM element
webix.event=function(node,event,handler,master){
	node = webix.toNode(node);
	webix.assert(node, "Invalid node as target for webix.event");
	
	var id = webix.uid();
	if (master) 
		handler=webix.bind(handler,master);	
		
	webix._events[id]=[node,event,handler];	//store event info, for detaching
		
	//use IE's of FF's way of event's attaching
	if (node.addEventListener)
		node.addEventListener(event, handler, false);
	else if (node.attachEvent)
		node.attachEvent("on"+event, function(){	
			handler.apply(node, arguments);	//IE8 fix
		});

	return id;	//return id of newly created event, can be used in eventRemove
};

//remove previously attached event
webix.eventRemove=function(id){
	
	if (!id) return;
	webix.assert(this._events[id],"Removing non-existing event");
		
	var ev = webix._events[id];
	//browser specific event removing
	if (ev[0].removeEventListener)
		ev[0].removeEventListener(ev[1],ev[2],false);
	else if (ev[0].detachEvent)
		ev[0].detachEvent("on"+ev[1],ev[2]);
		
	delete this._events[id];	//delete all traces
};


//debugger helpers
//anything starting from error or log will be removed during code compression

//add message in the log
webix.log = function(type,message,details){
	if (arguments.length == 1){
		message = type;
		type = "log";
	}
	/*jsl:ignore*/
	if (window.console && console.log){
		type=type.toLowerCase();
		if (window.console[type])
			window.console[type](message||"unknown error");
		else
			window.console.log(type +": "+message);

		if (details) 
			window.console.log(details);
	}	
	/*jsl:end*/
};
//register rendering time from call point 
webix.log_full_time = function(name){
	webix._start_time_log = new Date();
	webix.log("Timing start ["+name+"]");
	window.setTimeout(function(){
		var time = new Date();
		webix.log("Timing end ["+name+"]:"+(time.valueOf()-webix._start_time_log.valueOf())/1000+"s");
	},1);
};
//register execution time from call point
webix.log_time = function(name){
	var fname = "_start_time_log"+name;
	if (!webix[fname]){
		webix[fname] = new Date();
		webix.log("Info","Timing start ["+name+"]");
	} else {
		var time = new Date();
		webix.log("Info","Timing end ["+name+"]:"+(time.valueOf()-webix[fname].valueOf())/1000+"s");
		webix[fname] = null;
	}
};
webix.debug_code = function(code){
	code.call(webix);
};
//event system
webix.EventSystem={
	$init:function(){
		if (!this._evs_events){
			this._evs_events = {};		//hash of event handlers, name => handler
			this._evs_handlers = {};	//hash of event handlers, ID => handler
			this._evs_map = {};
		}
	},
	//temporary block event triggering
	blockEvent : function(){
		this._evs_events._block = true;
	},
	//re-enable event triggering
	unblockEvent : function(){
		this._evs_events._block = false;
	},
	mapEvent:function(map){
		webix.extend(this._evs_map, map, true);
	},
	on_setter:function(config){
		if(config){
			for(var i in config){
				if(typeof config[i] == 'function'){
					var sub = i.indexOf("->");
					if (sub !== -1){
						this[i.substr(0,sub)].attachEvent(i.substr(sub+2), webix.bind(config[i], this));
					} else
						this.attachEvent(i, config[i]);
				}
			}
		}
	},
	//trigger event
	callEvent:function(type,params){
		if (this._evs_events._block) return true;
		
		type = type.toLowerCase();
		var event_stack =this._evs_events[type.toLowerCase()];	//all events for provided name
		var return_value = true;

		if ((webix.debug || this.debug) && !webix.debug_blacklist[type])	//can slowdown a lot
			webix.log("info","["+this.name+"@"+((this._settings||{}).id)+"] event:"+type,params);
		
		if (event_stack)
			for(var i=0; i<event_stack.length; i++){
				/*
					Call events one by one
					If any event return false - result of whole event will be false
					Handlers which are not returning anything - counted as positive
				*/
				if (event_stack[i].apply(this,(params||[]))===false) return_value=false;
			}
		if (this._evs_map[type] && !this._evs_map[type].callEvent(type,params))
			return_value =	false;
			
		return return_value;
	},
	//assign handler for some named event
	attachEvent:function(type,functor,id){
		webix.assert(functor, "Invalid event handler for "+type);

		type=type.toLowerCase();
		
		id=id||webix.uid(); //ID can be used for detachEvent
		functor = webix.toFunctor(functor);	//functor can be a name of method

		var event_stack=this._evs_events[type]||webix.toArray();
		//save new event handler
		event_stack.push(functor);
		this._evs_events[type]=event_stack;
		this._evs_handlers[id]={ f:functor,t:type };
		
		return id;
	},
	//remove event handler
	detachEvent:function(id){
		if(!this._evs_handlers[id]){
			return;
		}
		var type=this._evs_handlers[id].t;
		var functor=this._evs_handlers[id].f;
		
		//remove from all collections
		var event_stack=this._evs_events[type];
		event_stack.remove(functor);
		delete this._evs_handlers[id];
	},
	hasEvent:function(type){
		type=type.toLowerCase();
		return this._evs_events[type]?true:false;
	}
};

webix.extend(webix, webix.EventSystem);

//array helper
//can be used by webix.toArray()
webix.PowerArray={
	//remove element at specified position
	removeAt:function(pos,len){
		if (pos>=0) this.splice(pos,(len||1));
	},
	//find element in collection and remove it 
	remove:function(value){
		this.removeAt(this.find(value));
	},	
	//add element to collection at specific position
	insertAt:function(data,pos){
		if (!pos && pos!==0) 	//add to the end by default
			this.push(data);
		else {	
			var b = this.splice(pos,(this.length-pos));
  			this[pos] = data;
  			this.push.apply(this,b); //reconstruct array without loosing this pointer
  		}
  	},  	
  	//return index of element, -1 if it doesn't exists
  	find:function(data){ 
  		for (var i=0; i<this.length; i++) 
  			if (data==this[i]) return i; 	
  		return -1; 
  	},
  	//execute some method for each element of array
  	each:function(functor,master){
		for (var i=0; i < this.length; i++)
			functor.call((master||this),this[i]);
	},
	//create new array from source, by using results of functor 
	map:function(functor,master){
		for (var i=0; i < this.length; i++)
			this[i]=functor.call((master||this),this[i]);
		return this;
	}, 
	filter:function(functor, master){
		for (var i=0; i < this.length; i++)
			if (!functor.call((master||this),this[i])){
				this.splice(i,1);
				i--;
			}
		return this;
	}
};

webix.env = {};

// webix.env.transform 
// webix.env.transition
(function(){
	if (navigator.userAgent.indexOf("Mobile")!=-1) 
		webix.env.mobile = true;
	if (webix.env.mobile || navigator.userAgent.indexOf("iPad")!=-1 || navigator.userAgent.indexOf("Android")!=-1)
		webix.env.touch = true;
	if (navigator.userAgent.indexOf('Opera')!=-1)
		webix.env.isOpera=true;
	else{
		//very rough detection, but it is enough for current goals
		webix.env.isIE=!!document.all;
		if (webix.env.isIE){
			var version = parseFloat(navigator.appVersion.split("MSIE")[1]);
			if (version == 8)
				webix.env.isIE8 = true;
		}
		webix.env.isFF=!document.all;
		webix.env.isWebKit=(navigator.userAgent.indexOf("KHTML")!=-1);
		webix.env.isSafari=webix.env.isWebKit && (navigator.userAgent.indexOf('Mac')!=-1);
	}
	if(navigator.userAgent.toLowerCase().indexOf("android")!=-1)
		webix.env.isAndroid = true;
	webix.env.transform = false;
	webix.env.transition = false;
	var options = {};
	options.names = ['transform', 'transition'];
	options.transform = ['transform', 'WebkitTransform', 'MozTransform', 'OTransform', 'msTransform'];
	options.transition = ['transition', 'WebkitTransition', 'MozTransition', 'OTransition', 'msTransition'];
	
	var d = document.createElement("DIV");
	for(var i=0; i<options.names.length; i++) {
		var coll = options[options.names[i]];
		
		for (var j=0; j < coll.length; j++) {
			if(typeof d.style[coll[j]] != 'undefined'){
				webix.env[options.names[i]] = coll[j];
				break;
			}
		}
	}
    d.style[webix.env.transform] = "translate3d(0,0,0)";
    webix.env.translate = (d.style[webix.env.transform])?"translate3d":"translate";

	var prefix = ''; // default option
	var cssprefix = false;
	if(webix.env.isOpera){
		prefix = '-o-';
		cssprefix = "O";
	}
	if(webix.env.isFF)
		prefix = '-Moz-';
	if(webix.env.isWebKit)
		prefix = '-webkit-';
	if(webix.env.isIE)
		prefix = '-ms-';

    webix.env.transformCSSPrefix = prefix;

	webix.env.transformPrefix = cssprefix||(webix.env.transformCSSPrefix.replace(/-/gi, ""));
	webix.env.transitionEnd = ((webix.env.transformCSSPrefix == '-Moz-')?"transitionend":(webix.env.transformPrefix+"TransitionEnd"));
})();


webix.env.svg = (function(){
		return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1");
})();


//html helpers
webix.html={
	_native_on_selectstart:0,
	denySelect:function(){
		if (!webix._native_on_selectstart)
			webix._native_on_selectstart = document.onselectstart;
		document.onselectstart = webix.html.stopEvent;
	},
	allowSelect:function(){
		if (webix._native_on_selectstart !== 0){
			document.onselectstart = webix._native_on_selectstart||null;
		}
		webix._native_on_selectstart = 0;

	},
	index:function(node){
		var k=0;
		//must be =, it is not a comparation!
		/*jsl:ignore*/
		while (node = node.previousSibling) k++;
		/*jsl:end*/
		return k;
	},
	_style_cache:{},
	createCss:function(rule){
		var text = "";
		for (var key in rule)
			text+= key+":"+rule[key]+";";
		
		var name = this._style_cache[text];
		if (!name){
			name = "s"+webix.uid();
			this.addStyle("."+name+"{"+text+"}");
			this._style_cache[text] = name;
		}
		return name;
	},
	addStyle:function(rule){
		var style = document.createElement("style");
		style.setAttribute("type", "text/css");
		style.setAttribute("media", "screen"); 
		/*IE8*/
		if (style.styleSheet)
			style.styleSheet.cssText = rule;
		else
			style.appendChild(document.createTextNode(rule));
		document.getElementsByTagName("head")[0].appendChild(style);
	},
	create:function(name,attrs,html){
		attrs = attrs || {};
		var node = document.createElement(name);
		for (var attr_name in attrs)
			node.setAttribute(attr_name, attrs[attr_name]);
		if (attrs.style)
			node.style.cssText = attrs.style;
		if (attrs["class"])
			node.className = attrs["class"];
		if (html)
			node.innerHTML=html;
		return node;
	},
	//return node value, different logic for different html elements
	getValue:function(node){
		node = webix.toNode(node);
		if (!node) return "";
		return webix.isUndefined(node.value)?node.innerHTML:node.value;
	},
	//remove html node, can process an array of nodes at once
	remove:function(node){
		if (node instanceof Array)
			for (var i=0; i < node.length; i++)
				this.remove(node[i]);
		else
			if (node && node.parentNode)
				node.parentNode.removeChild(node);
	},
	//insert new node before sibling, or at the end if sibling doesn't exist
	insertBefore: function(node,before,rescue){
		if (!node) return;
		if (before && before.parentNode)
			before.parentNode.insertBefore(node, before);
		else
			rescue.appendChild(node);
	},
	//return custom ID from html element 
	//will check all parents starting from event's target
	locate:function(e,id){
		if (e.tagName)
			var trg = e;
		else {
			e=e||event;
			var trg=e.target||e.srcElement;
		}
		
		while (trg){
			if (trg.getAttribute){	//text nodes has not getAttribute
				var test = trg.getAttribute(id);
				if (test) return test;
			}
			trg=trg.parentNode;
		}	
		return null;
	},
	//returns position of html element on the page
	offset:function(elem) {
		if (elem.getBoundingClientRect) { //HTML5 method
			var box = elem.getBoundingClientRect();
			var body = document.body;
			var docElem = document.documentElement;
			var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
			var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;
			var clientTop = docElem.clientTop || body.clientTop || 0;
			var clientLeft = docElem.clientLeft || body.clientLeft || 0;
			var top  = box.top +  scrollTop - clientTop;
			var left = box.left + scrollLeft - clientLeft;
			return { y: Math.round(top), x: Math.round(left), width:elem.offsetHeight, height:elem.offsetWidth };
		} else { //fallback to naive approach
			var top=0, left=0;
			while(elem) {
				top = top + parseInt(elem.offsetTop,10);
				left = left + parseInt(elem.offsetLeft,10);
				elem = elem.offsetParent;
			}
			return { y: top, x: left, width:elem.offsetHeight, height:elem.offsetWidth };
		}
	},
	//returns relative position of event
	posRelative:function(ev){
		ev = ev || event;
		if (!webix.isUndefined(ev.offsetX))
			return { x:ev.offsetX, y:ev.offsetY };	//ie, webkit
		else
			return { x:ev.layerX, y:ev.layerY };	//firefox
	},
	//returns position of event
	pos:function(ev){
		ev = ev || event;
        if(ev.pageX || ev.pageY)	//FF, KHTML
            return {x:ev.pageX, y:ev.pageY};
        //IE
        var d  =  ((webix.env.isIE)&&(document.compatMode != "BackCompat"))?document.documentElement:document.body;
        return {
                x:ev.clientX + d.scrollLeft - d.clientLeft,
                y:ev.clientY + d.scrollTop  - d.clientTop
        };
	},
	//prevent event action
	preventEvent:function(e){
		if (e && e.preventDefault) e.preventDefault();
		return webix.html.stopEvent(e);
	},
	//stop event bubbling
	stopEvent:function(e){
		(e||event).cancelBubble=true;
		return false;
	},
	//add css class to the node
	addCss:function(node,name){
        node.className+=" "+name;
    },
    //remove css class from the node
    removeCss:function(node,name){
        node.className=node.className.replace(RegExp(" "+name,"g"),"");
    }
};

webix.ready = function(code){
	if (this._ready) code.call();
	else this._ready_code.push(code);
};
webix.debug_ready = webix.ready; //same command but will work only in dev. build
webix._ready_code = [];

//autodetect codebase folder
(function(){
	var temp = document.getElementsByTagName("SCRIPT");	//current script, most probably
	webix.assert(temp.length,"Can't locate codebase");
	if (temp.length){
		//full path to script
		temp = (temp[temp.length-1].getAttribute("src")||"").split("/");
		//get folder name
		temp.splice(temp.length-1, 1);
		webix.codebase = temp.slice(0, temp.length).join("/")+"/";
	}
	webix.event(window, "load", function(){
		webix.callEvent("onReady",[]);
		webix.delay(function(){
			webix._ready = true;
			for (var i=0; i < webix._ready_code.length; i++)
				webix._ready_code[i].call();
			webix._ready_code=[];
		});
	});
	
})();

webix.locale=webix.locale||{};


webix.assert_core_ready();


webix.ready(function(){
	webix.event(document.body,"click", function(e){
		webix.callEvent("onClick",[e||event]);
	});
});


webix.debug_blacklist={
	onmousemoving:1
};

webix.ajax = function(url,call,master){
	//if parameters was provided - made fast call
	if (arguments.length!==0){
		var http_request = new webix.ajax();
		if (master) http_request.master=master;
		return http_request.get(url,null,call);
	}
	if (!this.getXHR) return new webix.ajax(); //allow to create new instance without direct new declaration
	
	return this;
};
webix.ajax.count = 0;
webix.ajax.prototype={
	master:null,
	//creates xmlHTTP object
	getXHR:function(){
		if (webix.env.isIE){
			return new ActiveXObject("Microsoft.xmlHTTP");
		}
		else 
			return new XMLHttpRequest();
	},
	/*
		send data to the server
		params - hash of properties which will be added to the url
		call - callback, can be an array of functions
	*/
	_send:function(url,params,call){
		var x=this.getXHR();
		if (!webix.isArray(call))
			call = [call];
		//add extra params to the url
		if (typeof params == "object"){
			var t=[];
			for (var a in params){
				var value = params[a];
				if (value === null || value === webix.undefined)
					value = "";
				t.push(a+"="+encodeURIComponent(value));// utf-8 escaping
		 	}
			params=t.join("&");
		}
		if (params && this.request==='GET'){
			url=url+(url.indexOf("?")!=-1 ? "&" : "?")+params;
			params=null;
		}
		
		x.open(this.request,url,!this._sync);

		//if header was provised - use it
		if (this._header){
			for (var key in this._header)
				x.setRequestHeader(key, this._header[key]);
		//else for post requests - use default header
		} else if (this.request === 'POST')
			x.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		 
		//async mode, define loading callback
		 var self=this;
		 x.onreadystatechange= function(){
			if (!x.readyState || x.readyState == 4){
				if (webix.debug_time) webix.log_full_time("data_loading");	//log rendering time
				webix.ajax.count++;
				if (call && self){
					var is_error = x.status >= 400 || (!x.status && !x.responseText);
					var text = x.responseText||"";
					var data = self._data(x);

					for (var i=0; i < call.length; i++)	//there can be multiple callbacks
						if (call[i]){
							var method = (call[i].success||call[i]);
							if (is_error)
								method = call[i].error;
							if (method)
								method.call((self.master||self),text,data,x);
						}
				}
				if (self) self.master=null;
				call=self=null;	//anti-leak
			}
		 };
		
		x.send(params||null);
		return x; //return XHR, which can be used in case of sync. mode
	},
	_data:function(x){
		return {
			xml:function(){ return webix.DataDriver.xml.tagToObject(webix.DataDriver.xml.toObject(x.responseText, this)); },
			rawxml:function(){ return x.responseXML; },
			text:function(){ return x.responseText; },
			json:function(){ try{ eval("webix.temp = "+x.responseText); var t = webix.temp; webix.temp = null; return t; } catch(e){ webix.log(x.responseText); webix.log(e.toString()); webix.assert_error("Invalid json data for parsing"); } }
		};
	},
	//GET request
	get:function(url,params,call){
		if (arguments.length == 2 && (url.success || url.error)){
			call = params;
			params = null;
		}
		this.request='GET';
		return this._send(url,params,call);
	},
	//POST request
	post:function(url,params,call){
		this.request='POST';
		return this._send(url,params,call);
	},
	//PUT request
	put:function(url,params,call){
		this.request='PUT';
		return this._send(url,params,call);
	},
	//POST request
	del:function(url,params,call){
		this.request='DELETE';
		return this._send(url,params,call);
	}, 
	sync:function(){
		this._sync = true;
		return this;
	},
	header:function(header){
		this._header = header;
		return this;
	},
	bind:function(master){
		this.master = master;
		return this;
	}
};
/*submits values*/
webix.send = function(url, values, method, target){
	var form = webix.html.create("FORM",{
		"target":(target||"_self"),
		"action":url,
		"method":(method||"POST")
	},"");
	for (var k in values) {
		var field = webix.html.create("INPUT",{"type":"hidden","name": k,"value": values[k]},"");
		form.appendChild(field);
	}
	form.style.display = "none";
	document.body.appendChild(form);
	form.submit();
	document.body.removeChild(form);
};


webix.AtomDataLoader={
	$init:function(config){
		//prepare data store
		this.data = {}; 
		if (config){
			this._settings.datatype = config.datatype||"json";
			this.$ready.push(this._load_when_ready);
		}
	},
	_load_when_ready:function(){
		this._ready_for_data = true;
		
		if (this._settings.url)
			this.url_setter(this._settings.url);
		if (this._settings.data)
			this.data_setter(this._settings.data);
	},
	url_setter:function(value){
		if (!this._ready_for_data) return value;
		this.load(value, this._settings.datatype);	
		return value;
	},
	data_setter:function(value){
		if (!this._ready_for_data) return value;
		this.parse(value, this._settings.datatype);
		return true;
	},
	//loads data from external URL
	load:function(url,call){
		if (url.$proxy && url.load){
			url.load(this, typeof call == "string" ? arguments[2] : call);
			return;
		}

		this.callEvent("onXLS",[]);
		if (typeof call == "string"){	//second parameter can be a loading type or callback
			//we are not using setDriver as data may be a non-datastore here
			this.data.driver = webix.DataDriver[call];
			call = arguments[2];
		} else if (!this.data.driver)
			this.data.driver = webix.DataDriver.json;

		//load data by async ajax call
		//loading_key - can be set by component, to ignore data from old async requests
		var callback = [{
			success: this._onLoad,
			error: this._onLoadError
		}];
		
		if (call){
			if (webix.isArray(call))
				callback.push.apply(callback,call);
			else
				callback.push(call);
		}
			

		return webix.ajax(url,callback,this);
	},
	//loads data from object
	parse:function(data,type){
		this.callEvent("onXLS",[]);
		this.data.driver = webix.DataDriver[type||"json"];
		this._onLoad(data,null);
	},
	//default after loading callback
	_onLoad:function(text, response, loader){
		var driver = this.data.driver;
		var data = driver.toObject(text, response);
		if (data){
			var top = driver.getRecords(data)[0];
			this.data=(driver?driver.getDetails(top):text);
		} else 
			this._onLoadError(text,response,loader);

		this.callEvent("onXLE",[]);
	},
	_onLoadError:function(text, xml, xhttp){
		this.callEvent("onXLE",[]);
		this.callEvent("onLoadError",arguments);
		webix.callEvent("onLoadError", [text, xml, xhttp, this]);
	},
	_check_data_feed:function(data){
		if (!this._settings.dataFeed || this._ignore_feed || !data) return true;
		var url = this._settings.dataFeed;
		if (typeof url == "function")
			return url.call(this, (data.id||data), data);
		url = url+(url.indexOf("?")==-1?"?":"&")+"action=get&id="+encodeURIComponent(data.id||data);
		this.callEvent("onXLS",[]);
		webix.ajax(url, function(text,xml,loader){
			this._ignore_feed=true;
			var data = webix.DataDriver.toObject(text, xml);
			if (data)
				this.setValues(data.getDetails(data.getRecords()[0]));
			else
				this._onLoadError(text,xml,loader);
			this._ignore_feed=false;
			this.callEvent("onXLE",[]);
		}, this);
		return false;
	}
};

/*
	Abstraction layer for different data types
*/

webix.DataDriver={};
webix.DataDriver.json={
	//convert json string to json object if necessary
	toObject:function(data){
		if (!data) data="[]";
		if (typeof data == "string"){
			try{
				eval("webix.temp="+data);
				data = webix.temp;
			} catch(e){
				webix.assert_error(e);
				return null;
			}
		}

		if (data.data){ 
			var t = data.data.config = {};
			for (var key in data)
				if (key!="data")
					t[key] = data[key];
			data = data.data;
		}
			
		return data;
	},
	//get array of records
	getRecords:function(data){
		if (data && !webix.isArray(data))
		 return [data];
		return data;
	},
	//get hash of properties for single record
	getDetails:function(data){
		if (typeof data == "string")
			return { id:webix.uid(), value:data };
		return data;
	},
	//get count of data and position at which new data need to be inserted
	getInfo:function(data){
		var cfg = data.config;
		if (!cfg) return {};

		return { 
		 _size:(cfg.total_count||0),
		 _from:(cfg.pos||0),
		 _parent:(cfg.parent||0),
		 _config:(cfg.config),
		 _key:(cfg.webix_security)
		};
	},
	child:"data"
};

webix.DataDriver.html={
	/*
		incoming data can be
		 - collection of nodes
		 - ID of parent container
		 - HTML text
	*/
	toObject:function(data){
		if (typeof data == "string"){
		 var t=null;
		 if (data.indexOf("<")==-1)	//if no tags inside - probably its an ID
			t = webix.toNode(data);
		 if (!t){
			t=document.createElement("DIV");
			t.innerHTML = data;
		 }
		 
		 return t.getElementsByTagName(this.tag);
		}
		return data;
	},
	//get array of records
	getRecords:function(node){
		var data = [];
		for (var i=0; i<node.childNodes.length; i++){
			var child = node.childNodes[i];
			if (child.nodeType == 1)
				data.push(child);
		}
		return data;
	},
	//get hash of properties for single record
	getDetails:function(data){
		return webix.DataDriver.xml.tagToObject(data);
	},
	//dyn loading is not supported by HTML data source
	getInfo:function(data){
		return { 
		 _size:0,
		 _from:0
		};
	},
	tag: "LI"
};

webix.DataDriver.jsarray={
	//eval jsarray string to jsarray object if necessary
	toObject:function(data){
		if (typeof data == "string"){
		 eval ("webix.temp="+data);
		 return webix.temp;
		}
		return data;
	},
	//get array of records
	getRecords:function(data){
		return data;
	},
	//get hash of properties for single record, in case of array they will have names as "data{index}"
	getDetails:function(data){
		var result = {};
		for (var i=0; i < data.length; i++) 
		 result["data"+i]=data[i];
		 
		return result;
	},
	//dyn loading is not supported by js-array data source
	getInfo:function(data){
		return { 
		 _size:0,
		 _from:0
		};
	}
};

webix.DataDriver.csv={
	//incoming data always a string
	toObject:function(data){
		return data;
	},
	//get array of records
	getRecords:function(data){
		return data.split(this.row);
	},
	//get hash of properties for single record, data named as "data{index}"
	getDetails:function(data){
		data = this.stringToArray(data);
		var result = {};
		for (var i=0; i < data.length; i++) 
		 result["data"+i]=data[i];
		 
		return result;
	},
	//dyn loading is not supported by csv data source
	getInfo:function(data){
		return { 
		 _size:0,
		 _from:0
		};
	},
	//split string in array, takes string surrounding quotes in account
	stringToArray:function(data){
		data = data.split(this.cell);
		for (var i=0; i < data.length; i++)
		 data[i] = data[i].replace(/^[ \t\n\r]*(\"|)/g,"").replace(/(\"|)[ \t\n\r]*$/g,"");
		return data;
	},
	row:"\n",	//default row separator
	cell:","	//default cell separator
};

webix.DataDriver.xml={
	_isValidXML:function(data){
		if (!data || !data.documentElement)
			return null;
		if (data.getElementsByTagName("parsererror").length)
			return null;
		return data;
	},
	//convert xml string to xml object if necessary
	toObject:function(text, response){
		var data = response?response.rawxml():null;
		if (this._isValidXML(data))
			return data;
		if (typeof text == "string")
			data = this.fromString(text.replace(/^[\s]+/,""));
		else
			data = text;

		if (this._isValidXML(data))
			return data;
		return null;
	},
	//get array of records
	getRecords:function(data){
		return this.xpath(data,this.records);
	},
	records:"/*/item",
	child:"item",
	config:"/*/config",
	//get hash of properties for single record
	getDetails:function(data){
		return this.tagToObject(data,{});
	},
	//get count of data and position at which new data_loading need to be inserted
	getInfo:function(data){
		
		var config = this.xpath(data, this.config);
		if (config.length)
			config = this.assignTypes(this.tagToObject(config[0],{}));
		else 
			config = null;

		return { 
		 _size:(data.documentElement.getAttribute("total_count")||0),
		 _from:(data.documentElement.getAttribute("pos")||0),
		 _parent:(data.documentElement.getAttribute("parent")||0),
		 _config:config,
		 _key:(data.documentElement.getAttribute("webix_security")||null)
		};
	},
	//xpath helper
	xpath:function(xml,path){
		if (window.XPathResult){	//FF, KHTML, Opera
		 var node=xml;
		 if(xml.nodeName.indexOf("document")==-1)
		 xml=xml.ownerDocument;
		 var res = [];
		 var col = xml.evaluate(path, node, null, XPathResult.ANY_TYPE, null);
		 var temp = col.iterateNext();
		 while (temp){ 
			res.push(temp);
			temp = col.iterateNext();
		}
		return res;
		}	
		else {
			var test = true;
			try {
				if (typeof(xml.selectNodes)=="undefined")
					test = false;
			} catch(e){ /*IE7 and below can't operate with xml object*/ }
			//IE
			if (test)
				return xml.selectNodes(path);
			else {
				//there is no interface to do XPath
				//use naive approach
				var name = path.split("/").pop();

				return xml.getElementsByTagName(name);
			}
		}
	},
	assignTypes:function(obj){
		for (var k in obj){
			var test = obj[k];
			if (typeof test == "object")
				this.assignTypes(test);
			else if (typeof test == "string"){
				if (test === "") 
					continue;
				if (test == "true")
					obj[k] = true;
				else if (test == "false")
					obj[k] = false;
				else if (test == test*1)
					obj[k] = obj[k]*1;
			}
		}
		return obj;
	},
	//convert xml tag to js object, all subtags and attributes are mapped to the properties of result object
	tagToObject:function(tag,z){
		z=z||{};
		var flag=false;
				
		//map attributes
		var a=tag.attributes;
		if(a && a.length){
			for (var i=0; i<a.length; i++)
		 		z[a[i].name]=a[i].value;
		 	flag = true;
	 	}
		//map subtags
		
		var b=tag.childNodes;
		var state = {};
		for (var i=0; i<b.length; i++){
			if (b[i].nodeType==1){
				var name = b[i].tagName;
				if (typeof z[name] != "undefined"){
					if (!webix.isArray(z[name]))
						z[name]=[z[name]];
					z[name].push(this.tagToObject(b[i],{}));
				}
				else
					z[b[i].tagName]=this.tagToObject(b[i],{});	//sub-object for complex subtags
				flag=true;
			}
		}
		
		if (!flag)
			return this.nodeValue(tag);
		//each object will have its text content as "value" property
		z.value = z.value||this.nodeValue(tag);
		return z;
	},
	//get value of xml node 
	nodeValue:function(node){
		if (node.firstChild)
		 return node.firstChild.data;	//FIXME - long text nodes in FF not supported for now
		return "";
	},
	//convert XML string to XML object
	fromString:function(xmlString){
		try{
			if (window.DOMParser)		// FF, KHTML, Opera
				return (new DOMParser()).parseFromString(xmlString,"text/xml");
			if (window.ActiveXObject){	// IE, utf-8 only 
				var temp=new ActiveXObject("Microsoft.xmlDOM");
				temp.loadXML(xmlString);
				return temp;
			}
		} catch(e){
			webix.assert_error(e);
			return null;
		}
		webix.assert_error("Load from xml string is not supported");
	}
};


webix.debug_code(function(){
	webix.debug_load_event = webix.attachEvent("onLoadError", function(text, xml, xhttp, owner){
		var error_text = "Data loading error, check console for details";
		if (text.indexOf("<?php") === 0)
			error_text = "PHP support missed";
		else if (text.indexOf("WEBIX_ERROR:") === 0)
			error_text = text.replace("WEBIX_ERROR:","");

		if (webix.message)
			webix.message({
				type:"debug",
				text:error_text,
				expire:-1
			});
		/*jsl:ignore*/
		if (window.console){
			console.log("Data loading error");
			console.log("Object:", owner);
			console.log("Response:", text);
			console.log("XHTTP:", xhttp);
		}
		/*jsl:end*/
	});

	webix.ready(function(){
		var path = document.location.href;
		if (path.indexOf("file:")===0){
			if (webix.message)
				webix.message({
					type:"error", 
					text:"Please open sample by http,<br>not as file://",
					expire:-1
				});
			else 
				window.alert("Please open sample by http, not as file://");
		}
	});
	
});