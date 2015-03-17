Barcode
============

The Barcode widget represents text value in a machine-readable format by varying the widths and spacings of parallel lines. 
The widget uses Canvas for lines rendering.


Initialization
--------------

To begin with, create a new HTML file and include the related Webix code files in it.

Required code files are:

- webix.css
- webix.js

{{snippet
A basic html page with the included code files
}}

~~~html
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Barcode</title>
    <script src="../codebase/webix.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="../codebase/webix.css" type="text/css" charset="utf-8">
</head>
<body>
    <script>
        //here you will place your JavaScript code
    </script>
</body>
</html>
~~~

Next, you should create a div container to place your barcode into.

~~~html
<div id="box" style="width:300px;height:200px;"></div>
~~~



Now you can initialize the component.
To create a new Barcode object, you need to use the next constructor:

{{snippet
Barcode constructor
}}
~~~js
barcode = new webix.ui({view:"barcode"});
~~~

If you want to place the component into the container, you should specify the container property inside of the view constructor:


{{snippet
Basic barcode configuration
}}
~~~js
barcode = new webix.ui({
	container:"box",
    view:"barcode"
});
~~~

Configuration
-------------

**type** sets barcode type. There are 3 built-in types: "ean8", "ean13" and "upcA" ("ean13" is default)



~~~js
webix.ui({
    view:"barcode",
    type: "upcA"
});

//or
var barcode = webix.ui({
    view:"barcode"
});
barcode.define("type", "upcA");

~~~

Built-in Types
--------------

Type Definition
---------------

There are 3 built-in types of Barcode: 

 - ean8", 
 - ean13
 - upcA
 
"ean13" is the default type. 

/*Images with available barcodes here*/

Use "type" property to set Barcode type:

~~~js
barcode = webix.ui({
    view:"barcode",
    type: "upcA"
});
~~~

The type of Barcode can be changed dynamically via *define* method.
Then you need to call *render* method to redraw Barcode with with type:

~~~js
barcode.define("type","ean8");
barcode.render();
~~~


Custom Types 
---------------

Webix Barcode includes 3 most popular types of barcodes: EAN8, EAN13 and UPC-A.  
If you need a different barcode, you can add the type you need to existing to Barcode view. 
Each barcode type should contain a function that returns sequence of “0” and “1” chars based on incoming text value. 
This 0-and-1 character combination will be used for bar rendering. 
Library will render black bars for “1” chars and leave gaps for “0”.

To add a new type you need use *webix.type* method that takes two parameters: 
 
 - ui object that the type will be created for ( webix.ui.barcode for Barcode)
 - object with type configuration

~~~js
webix.type( webix.ui.barcode, {
    /* type configuration here */
});
~~~

Type configuration of Barcode must contain 3 properties:

 - name - {string} the name of the code
 - encode - {function} the function that returns sequence of “1”and “0” chars for black-and-white bar rendering
 - template - {function} the function that returns text for barcode

Lets consider example of code39 barcode configuration:

1) define type name in type configuration:

~~~js
 name:"code39",
~~~

2) set an array with encodings for 43 characters, consisting of uppercase letters (A through Z),
numeric digits (0 through 9) and a number of special characters (-,., $, /, +, %, and space):
~~~js
encodings:[
	"110101001011", 
	"101101001011", 
	...
]
~~~

3) set *template* function that will convert incoming text to uppercase and add “*”  as start and stop characters:

 template: function(value){
      return ("*" + value + "*").toUpperCase();
 }

4) define *encode* method that will apply 0-1 sequences from *encodings* array to incoming text value
~~~js
encode: function(value){
	var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-. $/+%*";
    var code =””;               
      
    // apply template method    
    value = this.template(value);

	for(var i=0; i<value.length; i++){
    	var pos = chars.indexOf( value.charAt(i) );
        if (pos < 0)
        	return "";
        if (i)
        	code += “0”;
        
       	// apply encoding for character 
       	code += this.encodings[pos];
    }
	return code;
}
~~~

So, the whole "code39" type definition will be as in:

~~~js

webix.type(webix.ui.barcode, {
    // name
	name: "code39",
  
    // encodings for "A","B", etc. characters
   	encodings: [
		"110101001011", 
		"101101001011", 
			...
    ],
    
    // applies encoding for incoming text
   	encode: function(value){
		var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-. $/+%*";
    	var code =””;               
      
    	// apply template method    
   		value = this.template(value);

		for(var i=0; i<value.length; i++){
    		var pos = chars.indexOf( value.charAt(i) );
        	if (pos < 0)
        		return "";
        	if (i)
        		code += “0”;
        
       		// apply encoding for character 
       		code += this.encodings[pos];
    	}
		return code;
	},
    
    // returns text for code39 barcode
    template: function(value){
        return ("*" + value + "*").toUpperCase();
    }
 });
 
~~~
