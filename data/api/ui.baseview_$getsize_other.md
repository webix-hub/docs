$getSize
=============


@short: returns the current size of the component

@returns:

- sizes    array     an array of sizes

@example:

@template:	api_method
@related:
	desktop/custom_component.md
@descr:

{{note The method is used in the inner sizing logic and not intended for direct use.<br>
To get component sizes, please use the *$width* and *$height* properties }}


### An array of sizes 

The returning array contains 5 sizes of the components: 


- min width
- max width
- min height
- max height
- gravity
