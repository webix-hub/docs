onSelectChange
==============


@short: fires when selection is changed in a DataTable

@example:

webix.ui({
  view: "datatable",
  on: {
     onSelectChange: function () {
       var text = "Selected: " + grid.getSelectedId(true).join();
       document.getElementById('testB').innerHTML = text;
     }
  }
});

@template:	api_event

@related:
    datatable/selection.md
@relatedsample: 
    15_datatable/05_selection/08_block_selection.html
@relatedapi:
    api/ui.datatable_onafterselect_event.md
    api/ui.datatable_onbeforeselect_event.md
    api/ui.datatable_selectrange.md
    api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md
@descr:

The event doesn't provide any details about changes; it just informs that it has occurred.


@seolinktop: [best ui framework](https://webix.com)
@seolink: [datatable](https://webix.com/widget/datatable/)