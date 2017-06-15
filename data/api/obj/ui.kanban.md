
{{memo A kanban board for effective organization of team work.}}

Webix Kanban Board is highly customizable and can be adjusted to your needs with ease. 
Due to its rich API, the widget allows creating Kanban boards of various structure and complexity, 
adding, editing, filtering tasks, tuning their appearance, assigning tasks to the team members, etc.

Check desktop/kanban_board.md documentation for more information.

###Constructor 

~~~js
var kanban = webix.ui({
    view:"kanban", 
    type:"space",
    cols:[
        { header:"Backlog",
            body:{ view:"kanbanlist", status:"new" }},
        { header:"In Progress",
            body:{ view:"kanbanlist", status:"work" }},
        { header:"Done",
            body:{ view:"kanbanlist", status:"done" }}
    ],
    url: "tasks.php"
});
~~~

### Where to start

- [Overview of the Kanban Board Widget](desktop/kanban_board.md)
- [Samples](http://docs.webix.com/samples/63_kanban/index.html)

@seolinktop: [web ui framework](https://webix.com)
@seolink: [kanban board tool](https://webix.com/kanban/)