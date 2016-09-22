Accessibility
===============

Accessibility is one of the key concepts in present-day web development. It presupposes equal access to web resources for people with diverse abilities. 

The Webix library meets the main requirements of the WAI standards and provides support for the following accessibility components:

- WAI-ARIA Attributes
- Keyboard Navigation
- High-Сontrast Skin

WAI-ARIA Attributes
-------------------

There are special attributes used in the markup of Webix widgets that make it possible for screen readers to recognize and interpret them to the user.

The details on the use of WAI-ARIA attributes on HTML5 elements are given in the [official specification](https://www.w3.org/TR/html-aria/).

Keyboard Navigation
---------------------

All Webix widgets are provided with basic keyboard navigation, which allows using the mouse pointer to operate controls. 
It makes navigation over widgets' functionality handier and more efficient.

High-Contrast Skin
------------------

Among various Webix skins there's a high-contrast one. Being rather attractive, it is also helpful for those users who have weak eye-sight.

In order to apply the contrast skin, include the following codeline into the page:

~~~js
<link href="../codebase/contrast.css" rel="stylesheet" type="text/css">
~~~

<img src="desktop/accessibility_contrast_skin.png">

