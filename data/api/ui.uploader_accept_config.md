accept
=============

@todo:
	check 


@short:
	specifies particular file types that will be accepted for uploading

@type: string
@example:
webix.ui({
    maxWidth:800,
    cols:[{
        view:"form", rows: [
            { 
                view: "uploader", value: "Upload Images", 
                name:"files", accept:"image/png, image/gif, image/jpeg",
                link:"mylist",  upload:"php/upload.php" 
            }
            ...         
        ]
    }]
});

@template:	api_config
@descr:


@relatedsample:
21_upload/10_accept.html

@related:
desktop/configuring_uploader.md#uploadingparticularfiletypes