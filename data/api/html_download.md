download
=============


@short:  downloads a file from Blob data
	

@params:

- data	object	 Blob data for the file to download
- filename	string	name of resulting file

@example:
// var pdf = ..some created pdf data..
var blob = new Blob([pdf.toString()], { type: "application/pdf" });
webix.html.download(blob, "myfile.pdf");

@template:	api_method
@descr:

