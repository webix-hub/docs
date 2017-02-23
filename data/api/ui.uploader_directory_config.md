directory
=============


@short:
	allows uploading a folder with files 
@default: false
@type: string
@example:
webix.ui({
    view:"form", rows: [
        { 
            view: "uploader", value: "Upload", 
            name:"files",
            directory: true,
            autosend: true,
            link:"mylist",  upload:"php/upload.php" 
        }
        ...         
    ]
});


@template:	api_config
@descr:

@relatedsample: 
21_upload/11_directory_upload.html

@related:
desktop/configuring_uploader.md#uploadingfolders


