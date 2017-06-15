conditionStyle
=============



@short:
	specifies a set of conditional styles

@type: array 
@example:
conditionStyle:[
    {name: 'bold', css: "custom_bold"},
    {name: 'italic', css: "custom_italic"},
    {name: 'red', css: "custom_color"},
    {name: 'highlight', css: "custom_bgcolor"},
    {name: 'green', css: "custom_less"}
]

@template:	api_config
@descr:
Each element of the array presents an object with two properties:

- name - (string) the name of the condition style
- css - (string) the name of the corresponding CSS style

@related:
spreadsheet/conditional_formatting.md#howtostorecssstylesusedinconditions

@relatedsample:
65_spreadsheet/01_basic/08_conditional_styles.html

@seolinktop: [javascript web framework](https://webix.com)
@seolink: [spreadsheet javascript library](https://webix.com/spreadsheet/)