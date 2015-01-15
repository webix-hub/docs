Debug Version of the Library
=============

Debug version of the Webix library can be found in a **webix_debug.js** file in the **codebase** folder of a downloaded package. 

Debug version is recommended for use during development stage for it has a number bonuses that helps you understand what's going on with your app and track bugs 
during development stage. 

##Main Features: 

- Debug script version inspects function arguments and some component settings and informs about improper configuration like undefined variables, syntax mistakes. 
etc. instead of some incomprehensible internal errors;
- In case data loading goes wrong, these will be a corresponding message with the information about the error;
- Enables debugging flags usage;
- Enables debugging menu for each component. 

##Debugging Flags

- **webix.debug = true;** - enables event logging, which is the best way to see what events are there;
- **webix.debug_size = true;** - logs the info about current component sizes;
- **webix.debug_render = true;** - logs the info about how the component are rendered in the application;
- **webix_debug_proto = true;** - logs the info about the way components were created;
- **webix.debug_time = true;** - logs data loading and component rendering time.

##Debugging Menu

Debugging menu is activated with a "**Ctrl + right mouse click**" combination on the needed component and offers a lot of debugging options: 

- look up into the documentation for this component;
- learn the component's dimensions;
- study the component heirarchy on the page;
- long links to the key features of the component, namely the its JS and HTML object, configuration and data for the component.