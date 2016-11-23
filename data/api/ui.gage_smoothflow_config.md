smoothFlow
=============

@short:
	enables smooth animation in the gage widget

@type: boolean
@default: true
@example:
webix.ui({
    view: "gage",
    id:"gage1",
    value: 60,
    minRange: 0,
    maxRange: 100,
    label: "Speed",
    placeholder: "km/hour",
    smoothFlow: false
});

@template:	api_config
@descr:

@related:
desktop/gage.md

@relatedsample:
60_pro/15_gage/01_init.html
