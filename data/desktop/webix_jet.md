Using Webix Jet Micro-Framework
===============================

Webix Jet is a client-side JavaScript micro-framework that considerably simplifies the process of creating applications with complex structure based on the Webix library.

The framework allows avoiding big repetitive parts of code, as an application is divided into independent modules which are developed separately.
Webix Jet gives a wide variety of functions that you can implement into your app. It's possible to add navigation, multiple locales, diverse customizable skins, organize work with big datasets, etc.

The division of code into modules enhances the security and reliability of an application. Thus, you use compact code to build a safe and feature-rich web application.

You can find the detailed [tutorial on the usage of Webix Jet](https://www.gitbook.com/book/webix/webix-jet/details) on GitBook.
In the tutorial the process of creating an application is described together with all the possibilities of the framework:

- The [Basics](link) chapter introduces you to the general principles of building apps with the framework. Here you will also find the basics of creating views and subviews;
- The [Data Loading](link) chapter goes into details on the ways of loading data into views: tells you about creation of models, describes work with the server-side and the peculiarities of asynchronous data loading;
- The [Advanced Views Handling](link) chapter helps you to extend your knowledge of views and gain experience of a more advanced manipulating of views. You will learn about the usage of handlers and the scope.
Besides, you'll find here the description of possible variants of connecting views; 
- The [Navigation](link) chapter dwells on the ways of implementing navigation in the application. You will get to know how to organize inner navigation in an app, use the menu plugin and restore an application's state
to make navigation complex;
- The [Helper Modules](link) chapter tells you about the helpers that can be used to implement in your app such useful features as access control, CRUD functionality, data status and multi-language support;
- The [Development Notes](link) chapter gives you helpful tips on building an application, 
discusses how the structure of URL is formed and describes the ways of creating unique IDs for components and elements.

To get the idea of the structure of an appilcation built with Webix Jet, let's consider a sample application. Download the app package from 
[http://webix.com/packages/webix-app-start.zip](http://webix.com/packages/webix-app-start.zip) and extract its content to the root folder of your webhost.
After that, run the index.html file and the application will be displayed in the screen.

The structure of an application
-----------------------------

The content and structure of an application are placed in the files kept in the "codebase" folder:

- assets - the folder with static files of the app (icons, styles)
- libs - the folder with all the applied libs, including Webix
- views - the folder with modules for interface elements
- models - the folder with modules for data operations
- app.js - the file with the configuration of an application
- index.html - the starting page of the application





