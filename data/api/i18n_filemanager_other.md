filemanager
=============

@todo:
	check 


@short:
	default File Manager titles

@type: object

@example:
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
webix.i18n.setLocale();

@template:	api_config
@descr:

@related:
	desktop/localization.md

@relatedapi:
	api/i18n_setlocale.md
    
@relatedsample:
64_file_manager/03_customization/07_localization.html