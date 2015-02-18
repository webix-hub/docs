onSelectChange
=============


@short:
	fires after selection state was changed

@params:
- ids		array		array of IDs, which selection state was changed

@example: 
webix.ui({
  view: "datatable",
  on: {
    onSelectChange:function () {
      var text = "Selected: " + grid.getSelectedId(true).join();
      document.getElementById('testB').innerHTML = text;
    }
  }
});
@template:	api_event
@defined:	SelectionModel
@related: 
	desktop/selection.md
@relatedsample:
	15_datatable/05_selection/08_block_selection.html
	06_dataview/01_initialization/01_init.html
@descr:
