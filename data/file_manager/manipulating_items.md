Manipulating Items
====================

You can perform various actions with files and folders in File Manager. The actions are presented in the popup menu called "Actions". It is activated by right-clicking 
on a folder/file in the Tree or Files view or by clicking the Menu button on the toolbar.

However, you can also customize actions by means of redefining the corresponding methods.


Copying folders/files
----------

To copy a folder/file, use the api/ui.filemanager_copyfile.md method: 

~~~js
fmanager.copyFile(source,target);
~~~



Moving folders/files
---------------

To move a folder/file, use the api/ui.filemanager_movefile.md method:

~~~js
fmanager.moveFile(source,target);
~~~



Deleting folders/files
------------------------

To delete a folder/file, use the api/ui.filemanager_deletefile.md method:

~~~js
fmanager.deleteFile(ids);
~~~



Renaming folders/files
----------------

To rename a folder/file, use the api/ui.filemanager_renamefile.md method:

~~~js
fmanager.renameFile("file1","newFile.txt");
~~~



Creating a new folder
---------------

To create a folder, use the api/ui.filemanager_createfolder.md method. You need to pass an id of the folder 
where you want to create a new folder and templateCreate will apply other properties automatically:

~~~js
fmanager.createFolder("folder1");
~~~



Downloading files
---------------------

To download a file, you need to call the api/ui.filemanager_download.md method and pass the file id to it: 

~~~js
fmanager.download("myfile");
~~~


Uploading files
----------------

To open a file upload dialog, use the api/ui.filemanager_uploadfile.md method:

~~~js
fmanager.uploadFile("myfolder");
~~~


