 Accessibility
===============

Accessibility is one of the key concepts in present-day web development. It presupposes equal access to web resources for people with diverse abilities. 

The Webix library meets the main requirements of the WAI standards and provides support for the following accessibility components:

- WAI-ARIA Attributes
- Keyboard Navigation
- High-Сontrast Skin

WAI-ARIA Attributes
-------------------

There are special attributes used in the markup of Webix widgets that make it possible for screen readers to recognize and interpret them to the user, namely: 

- Each widget features the corresponding **ARIA role**, like *textbox, spinbutton, grid, tree, tablist*, etc;
- Widgets and their elements feature **aria-attributes** in the HTML for changable and static states, like *aria-readonly*, *aria-disabled*, *aria-checked*, *aria-selected*, etc;
- Form controls and modal boxes are given screen-readable **aria-label** which coincides with user-defined *label* (*title*) if any. For canvas-based widgets (Chart, Barcode, Organogram) 
 aria-label is defined by the dedicated *ariaLabel* property or coincides with widget name. 

The details on the use of WAI-ARIA attributes on HTML5 elements are given in the [official specification](https://www.w3.org/TR/html-aria/).

####Localized ARIA labels

Some widgets include clickable elements that does not allow setting labels by public API: buttons for Calendar, "+/-" icons for Counter, legend items for Chart, etc. 

For such elements Webix adds default ARIA labels as part of the currect locale ("en-US" by default):

~~~js
webix.i18n.locales["en-US"]={
	aria:{
        //counter buttons
		increaseValue:"Increase value",
		decreaseValue:"Decrease value",
        ..etc..
    }
};    
~~~

To look up the full structure of the locale or change the labels - follow the main [Internationalization guide](desktop/localization.md#localestructure).

Keyboard Navigation
---------------------

All Webix widgets are provided with keyboard navigation, which allows using Webix-based app without mouse pointer. Basic rules include:

- the "tab" key is used to navigate between widgets and clickable areas of the widgets;
- arrow keys are used to move selection or change active elements within widgets;
- "esc" key closes windows and editors;
- "enter" is used to open and hide drop-down lists of select controls. 

For the full list of built-in hotkeys, consult the [Keyboard Events and Navigation](desktop/uimanager.md#builtinkeyboardevents) article.

High-Contrast Skin
------------------

Among various Webix skins there's a high-contrast one. Being rather attractive, it is also helpful for those users who have weak eye-sight.

In order to apply the contrast skin, include the following codeline into the page:

~~~js
<link href="../codebase/contrast.css" rel="stylesheet" type="text/css">
~~~

<img src="desktop/accessibility_contrast_skin.png">

