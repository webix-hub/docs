aria
=============


@short: sets aria labels for clickable areas of widgets 
	

@type: object

@example:

webix.i18n.aria = aria:{
     increaseValue:"Increase value",
     decreaseValue:"Decrease value",
     navMonth:["Previous month", "Next month"],
     navYear:["Previous year", "Next year"],
     navDecade:["Previous decade", "Next decade"],
     removeItem:"Remove item",
     pages:["First page", "Previous page", "Next page", "Last page"],
     page:"Page",
     headermenu:"Header menu",
     openGroup:"Open column group",
     closeGroup:"Close column group",
     closeTab:"Close tab",
     showTabs:"Show more tabs",
     resetTreeMap:"Reset tree map",
     navTreeMap:"Level up",
     nextTab:"Next tab",
     prevTab:"Previous tab",
     multitextSection:"Add section",
     multitextextraSection:"Remove section",
     showChart:"Show chart",
     hideChart:"Hide chart",
     resizeChart:"Resize chart"
};


@related:
- desktop/localization.md
- desktop/accessibility.md


@relatedapi:
api/i18n_setlocale.md

@template:	api_config
@descr:

Clickable areas that need such labels include buttons and icons within widgets 
that cannot be configured in widget constructor, namely:

- *increaseValue* - aria label for "+" counter button
- *decreaseValue* - aria label for "-" counter button
- *navMonth* - aria labels for previous and next month buttons in calendar
- *navYear* - aria labels for previous and next year buttons in calendar
- *navDecade* - aria labels for previous and next decade buttons in calendar
- *removeItem* - aria label for multicombo "x" button
- *pages* - aria labels for pager navigation buttons
- *page* - aria label for pager numbered buttons
- *headermenu* - aria label for headermenu icon in datatable
- *openGroup* - aria label for "+" (open group) icon in datatable
- *closeGroup* - aria label for "-" (close group) icon in datatable
- *closeTab* - aria label for "x" icon on a closable tab in tabbar
- *showTabs* - aria label for "show more tabs" icon in a responsive tabbar
- *resetTreeMap* - aria label for "reset tree map" icon in a zoomed-in treemap
- *navTreeMap* - aria label for "level up" icon in a zoomed-in treemap
- *nextTab* - aria label for ">" icon in the carousel navigation panel
- *prevTab* - aria label for "<" icon in the carousel navigation panel
- *multitextSection* - aria label for "+" multitext icon
- *multitextextraSection* - aria label for "-" multitext icon
- *showChart* - aria label for "show chart" button in the chart legend
- *showChart* - aria label for "hide chart" button in the chart legend
- *resizeChart* - aria label for rangechart sizing handle.


You need to call api/i18n_setlocale.md to apply the new aria labels.

