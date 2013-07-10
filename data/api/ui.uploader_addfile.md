addFile
=============

@short:
adds files to the uploader using browser fileApi

@params:
- name		string		file name and (optionally) its extension
- size		number			file size 
* type 		string 		file extension 


@example:
 
$$("uploader_1").addFile("my_picture," 214, "jpg");

@template:	api_method
@descr: 
If you pass file name as with tis extension, like "my_picture.jpg", uploader will automatically define its extension and store it as file type. 

If you specify only file title "my_pictire", type becomes an obligatory parameter. 


