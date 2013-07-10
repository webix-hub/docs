Introduction to events
========================
Events are the core of any web application. Why? They help to interact with users and bring interactivity to the page.</br>
When the user makes some action on the page, an event occurs. The developer uses this event to detect the action and run the appropriate script. </br>
In one word, events is a way to detect user actions and define how to react to them (which functions to run).


##Webix events model
Webix supports a big number of cross-browser events to treat its components. 

To see the events provided for a certain component, flip to api/toc/ui.md chapter and click on this component. On the opened page
you see all available events.

##How to process Webix events?
To process an event, i.e. run a special script when the event triggers on a certain page element, you need to attach event handler to this page element.

To attach an event handler to a Webix component, you should use the api/eventsystem_attachevent.md method as in:

~~~js
$$("componentId").attachEvent("onItemClick", function (id){
    //handler code
}
~~~
The method takes 2 parameters:

- **name** - (*string*) the event name
- **handler** - (*function*) the handler function

For different events, handler functions take different parameters. The information about event parameters you can find
on the page devoted to this event in the api/toc/ui.md chapter.

Once you call the method, each time the event fires for the calling component the code specified as the second parameter will be executed.

## Usage example
Let's consider a simple example: you have a list that displays your favourite films. When you click on the film you want a message box to be shown with the details of this film: the title, director and running time.

<img src='tutorials/handling_events.png'/>

~~~js
var films_set = [
  {id:1, title:"The Shawshank Redemption",director:"Frank Darabont",      time:142},
  {id:2, title:"The Godfather",           director:"Francis Ford Coppola",time:175},
  {id:3, title:"The Godfather: Part II",  director:"Francis Ford Coppola",time:200},
  {id:4, title:"Pulp Fiction",            director:"Quentin Tarantino",   time:154}
];
 
var fList = webix.ui({
    view:"list", 
    data:films_set,
    template:"#title#"
});

fList.attachEvent("onItemClick", function(id){
	var item = this.getItem(id);
	webix.message("<b>"+item.title+"</b></br>director: "+item.director+
    ", time:"+item.time);
})
~~~

###Related Articles

For more information about Event Handling in Webix, please, study the [corresponding article of the documentation](desktop/event_handling.md).

@complexity:1