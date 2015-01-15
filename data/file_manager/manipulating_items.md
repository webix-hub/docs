Manipulating Items
====================

You can perform various actions with files and folders in File Manager. The actions are presented in the popup menu called "Actions". It is activated by right-clicking 
on a folder/file in the Tree or Files view or by clicking the Menu button on the toolbar.

However, you can also customize actions by means of redefining the corresponding methods.

The available actions include: Copy, Cut, Paste, Create Folder, Delete, Rename, Upload and Download.


Copying folders/files
----------

To copy a folder/file, use the <a href="file_manager/api_reference.md#copy">copyFile()</a> method: 

~~~js
fmanager.copyFile(source,target);
~~~



Pasting folders/files
---------------------

To copy a folder/file, use the <a href="file_manager/api_reference.md#paste">pasteFile()</a> method: 

~~~js
fmanager.pasteFile(id);
~~~



Moving folders/files
---------------

To move a folder/file, use the <a href="file_manager/api_reference.md#move">moveFile()</a> method:

~~~js
fmanager.moveFile(source,target);
~~~



Deleting folders/files
------------------------

To delete a folder/file, use the <a href="file_manager/api_reference.md#delete">deleteFile()</a> method:

~~~js
fmanager.deleteFile(ids);
~~~



Renaming folders/files
----------------

To move rename a folder/file, use the <a href="file_manager/api_reference.md#rename">renameFile()</a> method:

~~~js
fmanager.renameFile("file1","newFile.txt");
~~~



Creating a new folder
---------------

To create a folder, use the <a href="file_manager/api_reference.md#create">createFolder()</a> method. You need to pass an id of the folder 
where you want to create a new folder and templateCreate will apply other properties automatically:

~~~js
fmanager.createFolder("folder1");
~~~



Downloading files
---------------------

To download a file, you need to call the <a href="file_manager/api_reference.md#download">download()</a> method and pass the file id to it: 

~~~js
fmanager.download("myfile");
~~~


Uploading files
----------------

To open a file upload dialog, use the <a href="file_manager/api_reference.md#upload">uploadFile()</a> method:

~~~js
fmanager.uploadFile("myfolder");
~~~


Drag-and-drop
---------------

There are two modes of drag-n-drop operation in File Manager:

- dnd inside of the Tree
- dnd between the Tree and File view

The drag-and-drop functionality is fully based on handling of the appropriate events.
You can read about them in the article file_manager/events.md#onbeforedrag.