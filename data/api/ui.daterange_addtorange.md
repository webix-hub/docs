addToRange
=============

@short: adds a date into the existing range
	

@params:

- date 	object|string


@example:

$$("range").addToRange(new Date());


@template:	api_method
@descr:

The logic of adding repeats user actions in UI, namely: 

- If there's no selection in a Daterange, the new date starts the new range;
- If there's a selected date in a Daterange, the new date is added as a start or end date to finish the range;
- If there's a selected range (2 dates) in a Daterange, the new date starts the new range while the previous one is removed.