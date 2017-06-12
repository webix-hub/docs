addSector
=============


@short: renders HTML area element with "poly" shape
	

@params:
- id			id				id which will be assigned to related HTML section
- aplha0		number			starting angle
- aplha1		number			ending angle
- x				number			x position of center
- y 			number			y position of center
- R				number			radius
- ky			number			y-scaling factor
* userdata		string		extra data string (used by chart series) 

@example:

map.addSector("12", 0, Math.PI/2, 100,100, 50, 1);

@template:	api_method
@descr:

