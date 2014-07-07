Animation
================

Animation is implemented within [multiview](desktop/multiview.md) and [pager](desktop/paging.md) components. It sets the way the views will be changed as you switch between views or page through the component.

There exist two animation types with their own subtypes. Or, instead, you can choose on of the four animation **directions**:

- **slide** - in, out, together;
- **flip** - horizontal, vertical;
- **direction** - left, right, top, bottom.

Multiview uses **slide:"together"** animation type by default. 

Animation can be **switched off**:

~~~js
{view:"multiview",
 animate:false,
 ...
 }
~~~

**Enabling Animation**

1 . The simplest means is including *animate* property into the multiview or pager constructor and define the necessary type and subtype:


~~~js
webix.ui({
        view:"multiview",
        animate:
        	{type:"flip", 
             subtype:"vertical"},
        cells:[{ ... }]
        
})
~~~

2 . The values for **animate** property can be assigned directly out of the multiview constructor. If some values have already been defined with the help of 
the above-mentioned method, direct assignment will rewrite them:

~~~js
$$("multi").config.animate.type = "flip";
$$("multi").config.animate.subtype = "vertical";
~~~

3 . By means of the **show()** method.The changes will be applied once while showing the stated view. Then, the default values 
(initial or 'rewritten') will be used.

~~~js
 $$(id).show({type:"flip", subtype:"horizontal"}) 
~~~



{{sample 80_docs/multiview_animation.html }}

{{sample 25_pager/08_animate_types.html }}

@complexity:2