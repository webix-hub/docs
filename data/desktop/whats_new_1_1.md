Version 1.1
==============

### Server side integration 
- all components can [save data through REST API](desktop/server_rest.md)
- [offline and caching](desktop/server_offline.md) loading strategies
- [custom data saving](desktop/server_proxy.md) and data loading transports

### UI improvements

- "disabled" configuration options for all views ( including all form controls )
- webix.history can be used with multiview control
- per-submenu configuration is possible ( "config" property of menu item )
- improved visual filtering in treetable and tree

### API
- [onViewResize](api/ui.view_onviewresize_event.md) event added
- "disabled" option added for all views
- ability to define [XSS safe templates](desktop/html_templates.md#xsssafetemplates)

### Fixes

- popup's visibility on iOS
- incorrect sizing of multiview and accordion
- incorrect behavior of drag-n-drop in datatable
- setValue doesn't work for radio buttons
