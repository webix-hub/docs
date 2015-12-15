
{{memo a sub-menu}}

The component is a compliment to the menu component and isn't intended for direct initialization. Check [menu](desktop/menu.md) documentation for more detailed description.


### Constructor

~~~js
webix.ui({
    view:"menu",
    subMenuPos:"right",
    data:[ 
        { value:"Translate...", submenu:["English", "Slavic...", "German"]},
        { value:"Post...", submenu:[ "Facebook", "Google+", "Twitter" ]}
    ],
    type:{
    	subsign:true,
        height:50
    }           
});
~~~
