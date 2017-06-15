operations
=============


@short:
	gets an object with possible mathematical operations in Pivot

@type: object

@example:
$$("pivot").operations = {
    sum: function sum(args) {
        var sum = 0;
        for (var i = 0; i < args.length; i++) {
            var value = args[i];
            value = parseFloat(value, 10);
            if (!window.isNaN(value)) sum += value;
        }
        return sum;
    },
    count: function count(args) {
        return args.length;
    },
    max: function max(args) {
        if (args.length == 1) return args[0];
        return Math.max.apply(this, args);
    },
    min: function min(args) {
        if (args.length == 1) return args[0];
    return Math.min.apply(this, args);
    }
}
@template:	api_config
@descr:




@seolinktop: [easy javascript framework](https://webix.com)
@seolink: [javascript pivot](https://webix.com/pivot/)