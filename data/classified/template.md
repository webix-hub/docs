Темплейты
=========

Темплейт это ф-ция которая получает на входе данные а на выходе выдает строку

~~~js
var a = webix.template("1 {obj} 2");
var b = a("-")// "1 - 2"
~~~

~~~js
webix.template("{obj}") //place object
webix.template("{obj.property}") //place property
webix.template("#property#")  //place property 

//conditional place of text string based on property's value
webix.template("{obj.property?1:2}") 
~~~