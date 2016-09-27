Flexible Alignment of Widgets Content
===============================

Webix provides a solution for aligning and centering widgets' content. You need just to wrap any view into the *body* container and define its alignment via the
**align** property:

~~~js
//center align
{ align:"center,middle", body:{ view:"datepicker", width:200 }},
//bottom-right corner
{ align:"bottom,right", body:{ view:"datepicker", width:200 }},
//specific padding
{ align:"absolute", left:30, top:30, bottom:60, body:{ view:"datepicker", width:200 }}
~~~

{{sample 01_layout/17_align.html}}

The possible values for the align property are:

- left, right, center - for the x-align
- top, bottom, middle - for the y-align
- absolute - for the absolute align

You can apply several attributes at once.