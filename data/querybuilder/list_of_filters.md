List of Query Builder Filters
===============================

Here you can check the list of predefined filter objects. You can complete it with your own filter with the help of the api/ui.querybuilder_setfilters.md method.

~~~js
[
	{ 
    	id: "less", 
        name: "less", 
        "fn": function (a, b) { return a < b; }, 
        type: "number" 
    },
    { 
    	id: "less or equal", 
        name: "less or equal", 
        "fn": function (a, b) { return a <= b; }, 
        type: "number" 
    },
    { 
    	id: "greater", 
        name: "greater", 
        "fn": function (a, b) { return a > b; }, 
        type: "number" 
    },
    { 
    	id: "greater or equal", 
        name: "greater or equal", 
        "fn": function (a, b) { return a >= b; }, 
        type: "number" 
    },
    { 
    	id: "between", 
        name: "between", 
        "fn": function (a, b, c) { return a > b && a < c; }, 
        type: "number" 
   	},
   	{ 
    	id: "not between", 
        name: "not between", 
        "fn": function (a, b, c) { return a <= b || a >= c; }, 
        type: "number" 
    },
    { 
    	id: "begins with", 
        name: "begins with", 
        "fn": function (a, b) { return a.lastIndexOf(b, 0) === 0; }, 
        type: "string" 
    },
    { 
    	id: "not begins with", 
        name: "not begins with", 
        "fn": function (a, b) { return a.lastIndexOf(b, 0) !== 0; }, 
        type: "string" 
    },
    { 
    	id: "contains", 
        name: "contains", 
        "fn": function (a, b) { return a.indexOf(b) !== -1; }, 
        type: "string" 
    },
    { 
    	id: "not contains", 
        name: "not contains", 
        "fn": function (a, b) { return b.indexOf(a) === -1; }, 
        type: "string" 
    },
    { 
    	id: "ends with", 
        name: "ends with", 
        "fn": function (a, b) { return a.indexOf(b, a.length - b.length) !== -1; }, 
        type: "string" 
    },
    { 
    	id: "not ends with", 
        name: "not ends with", 
        "fn": function (a, b) { return a.indexOf(b, a.length - b.length) === -1; }, 
        type: "string" 
    },
    { 
    	id: "is empty", 
        name: "is empty", 
        "fn": function (a) { return a.length === 0; }, 
        type: "string" 
    },
    { 
    	id: "is not empty", 
        name: "is not empty", 
        "fn": function (a) { return a.length > 0; }, 
        type: "string" 
    },
    { 
    	id: "equal", 
        name: "equal", 
        "fn": function (a, b) { return a === b; }, 
        type: "any" 
    },
   	{ 
    	id: "not equal", 
        name: "not equal", 
        "fn": function (a, b) { return a !== b; }, 
        type: "any" 
    },
    { 
    	id: "is null", 
        name: "is null", 
        "fn": function (a) { return a === null; }, 
        type: "any" 
    },
    { 
    	id: "is not null", 
        name: "is not null", 
        "fn": function (a) { return a !== null; }, 
        type: "any" 
    }
]
~~~

@linkclass:hidden