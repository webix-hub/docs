Localizing File Manager
======================

You can localize File Manager according to the peculiarities of a certain language.

The properties that can be localized are the following:

- names of actions ("Copy", "Paste", etc.)
- column titles
- date formats

Date formats
--------------

Date can be easily [localized](desktop/localization.md) by setting one of 
the [build-in locales](desktop/localization.md#builtinlocales). 

All locales are stored in [webix.i18n.locales](api/i18n_locales_other.md) object. By default, the library uses the "en-US" locale:

~~~js
webix.i18n.locales["en-US"]={
  ...
};
~~~

Titles localization
----------------------

File Manager titles are stored in the **webix.i18n.filemanager** object:

~~~js
webix.i18n.filemanager = {
    actions: "Actions",
    back: "Back",
    forward: "Forward",
    levelUp: "Level Up",
    name: "Name",
    size: "Size",
    type: "Type",
    date: "Date",
    copy: "Copy",
    cut: "Cut",
    paste: "Paste",
    upload: "Upload",
    remove: "Delete",
    create: "Create Folder",
    rename: "Rename",
    location: "Location",
    select: "Select Files",
    sizeLabels: ["B","KB","MB","GB"],
    iconsView: "Icons View",
    tableView: "Table View",
    hideTree: "Hide Tree",
    showTree: "Show Tree",
    collapseTree: "Collapse Tree",
    expandTree: "Expand Tree",
    saving: "Saving...",
    errorResponse: "Error: changes were not saved!",
    replaceConfirmation: "Would you like to replace existing files?",
    createConfirmation: "The folder already exists. Would you like to replace it?",
    renameConfirmation: "The file already exists. Would you like to replace it?",
    yes: "Yes",
    no: "No",
    types:{
        folder: "Folder",
        doc: "Document",
        excel: "Excel",
        pdf: "PDF",
        pp: "PowerPoint",
        text: "Text File",
        video: "Video File",
        image: "Image",
        code: "Code",
        audio: "Audio",
        archive: "Archive",
        file: "File"
    }
};
~~~

There are 2 ways of applying a custom locale: 

1) redefine default titles according to your locale directly in the **webix.i18n.filemanager** object; 

2) set a certain locale in the following way:

- include the chosen locale library into your page:

~~~html
<script src="../../../codebase/i18n/ru.js" type="text/javascript"></script>
~~~

- define 'filemanager' titles in the **webix.i18n.locales[localeName]** object:

~~~js
webix.i18n.locales['ru-RU'].filemanager = {
	name: "Имя",
	size: "Размер",
	...
};
~~~

- apply the created locale with the help of the api/i18n_setlocale.md method:

~~~js
webix.i18n.setLocale('ru-RU');
~~~

{{sample
64_file_manager/03_customization/07_localization.html
}}