
{{memo A collapsible side menu that allows selecting separate items }}

The animated menu component that can be bound to any part of the screen. The size and position of Sidemenu can be customized. It can contain any other views, including complex layouts. Check [sidemenu](desktop/sidemenu.md) documentation for more detailed description.

### Constructor

~~~js
var sidemenu = webix.ui({
    view: "sidemenu",
    width: 200,
    position: "left",
    body:{
        view:"list",
        borderless:true,
        scroll: false,
        template: "<span class='webix_icon fa-#icon#'></span> #value#",
        data:[
            {id: 1, value: "Users", icon: "user"},
            {id: 2, value: "Products", icon: "cube"},
            {id: 3, value: "Reports", icon: "line-chart"}            
        ]
    }
}).show();
~~~

### Where to start

- [Overview of the Sidemenu Widget](desktop/sidemenu.md)
- [Samples](http://docs.webix.com/samples/28_sidemenu/index.html)