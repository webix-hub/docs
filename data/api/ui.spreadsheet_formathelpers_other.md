formatHelpers
=============

@short:
	a collection of possible formats for a cell of SpreadSheet

@type: object

@example:

var format = $$("ss1").formatHelpers;

formatHelpers: {
	price: function price(value) {
		return webix.i18n.priceFormat(value);
	},
	"int": function int(value) {
		return webix.i18n.numberFormat(value);
	},
	percent: function percent(value) {
		return Math.round(value * 100) + "%";
	}
}


@template:	api_config
@descr:

