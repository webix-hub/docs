jsonp
=============

@short: issues jsonP call 
	

@params:
- url    string    server side feed
* params    object    hash of parameters which will be included in jsonp url
* callback    function    callback method
* master    object    value of "this" in callback

@callback:
- data    object   value returned by server

@example:

//minimal call
webix.jsonp("http://some.com/some.php", function(data){
   ... do something...
})

//call with extra parameters
webix.jsonp("http://some.com/some.php", {
    user:12,
    action:"fetch"
}, function(data){
   ... do something...
})


@template:	api_method
@descr:

[http://en.wikipedia.org/wiki/JSONP](http://en.wikipedia.org/wiki/JSONP)

