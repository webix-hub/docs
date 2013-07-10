Application development with webix4
===================================

- Use html5 doctype
- Instead of using sigle huge webix.ui command consider moving some parts of app to separate variables. It will made code more error prone and more readable ( as you can give speaking names for used variables ) Instead of 

~~~js
webix.ui({ rows:[
	...complex inline config...
	]
})
~~~

use

~~~js
var simple_config1 = ...;
var simple_config2 = ...;
var simple_config3 = ...;

webix.ui({
	rows:[
		simple_config1,
		simple_config2,
		simple_config3,
	]
})
~~~



- If your code resuls in thery complex approach - check the docs and existing samples, there must be a way to do it in more simpler manner. 
- If situation is still unclear - try to ask someone - unfortunately we still has not full knowledge in documentation. 
- If complex code still looks as only possible approach - register a ticket with problem in agilezen. 
- If you have found some new functionality which not described in docs - consider updating the docs ( it all goes to simple text file editing )