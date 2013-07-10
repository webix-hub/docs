zoom
=============


@short: the zoom of the total scroll bar length
	

@type: number
@example:
webix.ui.vscroll({
		container:"scroll_here",
		zoom:10
});

@template:	api_config
@descr:
Let's consider an example.<br>
You have 30 records within the container with the height of 10px, each item takes 1px height. 
By default (zoom=1), the total length of the scroll bar is calculated automatically to display all the items, i.e. we get 30 x 1px = 30px.<br> 
If the user scrolls 2px down - the 11th and 12th records will be displayed. 


That's so, but when you deal with big datasets the total length of the scroll bar can be incrediable large. Therefore, the component won't take the really
required length but take maximum available and set the **zoom** parameter. In that case, each time the user makes  a scroll move, the component 
will count the scrolled length and multiply it by **zoom** to get the real number of items to scroll. 


<img src="api/v_scroll.png"></img>