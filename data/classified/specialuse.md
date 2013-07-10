Специалные методы и свойства
============================


### конструктор

~~~js
$init: function(config){
   do_some();
}
~~~

### простановка размеров

~~~js
$getSize: function(){
   return [gravityx, width, gravityy, height];
},
$setSize: function(x,y){
   do_some();
}
~~~

### сеттеры

~~~js
prop_setter:function(value){
   do_some();
   return value; //will be assigned to this.config.prop
}
~~~

