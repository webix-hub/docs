Popup and Window Positioning
==============================

By default [window](desktop/window.md) and [popup](desktop/popup.md) (provided that they don't occupy the whole screen) 
will be placed in the upper left corner of the screen stuck to browser borders.
 
To avoid this, the position should be set.

##Absolute Positioning

**Left** and **top** offset can be defined right in the component constructor:

~~~js
webix.ui({
	view:"window"
    width:300,
	height:200,
	top:100, 
	left:100
}).show();
~~~

At the same time, position can be set dynamically, by passing these parameters into its **show();** function: 

~~~js
webix.ui({
	view:"window",
    ...
}). show({
	x:300, //left offset from the right side
	y:50 //top offset
});
~~~

{{sample 80_docs/window_offset.html }}

Another way is to use **setPosition()**: 

~~~js
$$('my_window').setPosition(100, 100); //left and top offset
~~~

##Relative Positioning

Relative positioning is achieved with the help of **position** property. It takes the following values:

- **center** - to place window or popup at the center of the screen;
- **top** - to place window or popup at the top of the screen with center horizontal alignment. 
Also, "top" positioning adds slide **animation**: the window will slide from the top of the screen when shown and slide back when closed.

~~~js
webix.ui({
	view:"window",
    position:"center" //or "top"
    //..window config

})
~~~

{{sample 10_window/07_center.html }}

###Positioning Relative to HTML Node

**Show()** method allows specifying an HTML node near which a window will be shown. 

~~~js
$$("window").show(node);
~~~

By default, such pattern places the window below the node. To redefine this, pass position object as well:

~~~js
$$("window").show(node, {pos:"top"});
~~~

Possible position values here are **top**, **bottom** (default), **left** and **right**.

To shift a window in relations to the node, pass its vertical and horizontal positions together with pos:

~~~js
$$("window").show(node, {pos:"top", x:10, y:10});
~~~

##Setting Position via State Object

By default, position is set in two way depending on window size:

- If a window or popup is **non-sized**, it occupies the whole screen with *top*, *bottom*, *left* and *right* offsets being **0**;
- If a window or popup features custom size (**width** and **height** properties in its constructor), it is placed in the left upper corner of the screen with its *top* and *left* offsets being **0**.

This default position can be **changed** or **amended** with the help of **state** object used in the function of the **position** property:

~~~js
webix.ui({
	view:"window",
    head:"",
    body:{...},
	position:function(state){ 
		state.left = 20; //fixed values
		state.top = 20;
		state.width -=60; //relative values
		state.height +=60;
	}
});
~~~