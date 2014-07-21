blockDates
=============


@short: defines the selectable range
	

@type: functor
@example:

{ view:"calendar", blockDates:function(date){
   if (date.getMonths() > 2) return false;
   return true;
}}


@template:	api_config
@descr:


