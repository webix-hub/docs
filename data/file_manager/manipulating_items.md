Manipulating Items
====================

You can perform various actions with files and folders in File Manager. The actions are presented in the popup menu called "Actions". It is activated by right-clicking 
on a folder/file in the Tree or Files view. 

However, you can customize actions by means of redefining the corresponding methods.

The available actions include: Copy, Cut, Paste, Create Folder, Delete, Rename, Upload and Download.

Copying folders/files
----------

To copy a folder/file, use the copyFile() method: 

~~~js
fmanager.copyFile(source,target);
~~~

params:

- source - {string} the copied file's id (or an array of ids in case of multiple files)
- target - {string} the id of the folder where the file(s) is copied to


Moving folders/files
---------------

To move a folder/file, use the moveFile() method:

~~~js
fmanager.moveFile(source,target);
~~~

params:

- source - {string} the moved file's id (or an array of ids in case of multiple files)
- target - {string} the id of the folder where the file(s) is moved to


Deleting folders/files
------------------------

To delete a folder/file, use the deleteFile() method:

~~~js
fmanager.deleteFile(ids);
~~~

params:

- ids - {string} the ids of files that will be deleted


Renaming folders/files
----------------

To move rename a folder/file, use the renameFile() method:

~~~js
fmanager.renameFile("file1","newFile.txt");
~~~




Creating a new folder
---------------

To create a folder, use the createFolder() method. You need to pass an id of the folder 
where you want to create a new folder and templateCreate will apply other properties automatically:

~~~js
fmanager.createFolder("folder1");
~~~



Downloading files
---------------------

To download a file, you need to call the download() method and pass the file id to it: 

~~~js
fmanager.download("myfile");
~~~


Uploading files
----------------

To open a file upload dialog, use the uploadFile() method:

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