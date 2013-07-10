@link: api/editability_editstop.md

@example:

prop.registerType("toggle",{
...,
click:{
			webix_toggle_button_custom:function(e, id){
				var data = this.getItem(id);
				if (data.options[0] == data.value)
					data.value = data.options[1];
				else
					data.value = data.options[0];

				this.editStop();
				this.refresh(id);
				this.callEvent("onCheck",[id, data.value]);
			},
..
});

@relatedsample:
	07_property/02_custom_checkbox.html
@related:
	datatable/editing.md
    desktop/edit.md
    desktop/property_sheet.md