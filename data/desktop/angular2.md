Angular2 Integration
=======================

The Webix library is compatible with the [Angular2](https://angular.io/) framework.

{{note You can find [an example of using Webix with Angular2](https://github.com/webix-hub/angular2-demo) on GitHub}}

Running the Demo
-------------------

Clone the above mentioned repository and run the commands below:

~~~js
npm install
npm run start
~~~

Webix with Angular2 Basics
------------

You don't need anything special to use Webix with Angular 2.

This project differs from default Angular 2 quickstart only in two ways:

a) *index.html* contains references to Webix files

~~~html
<script src="//cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" href="//cdn.webix.com/edge/webix.css">
~~~

b) *typings.json* has Webix typings added

~~~js
npm run typings install df~webix --save --global
~~~

Webix-based Components
------------------------

When you need to create a Webix-based view, just create a normal Angular 2 component with *webix.ui* call inside.

~~~js
import { Component, ElementRef, OnDestroy, OnInit } from '@angular/core';

@Component({
  selector: 'datatable',
  template:""
})
export class DataTableComponent implements OnDestroy, OnInit {
  private ui : webix.ui.datatable;
  
  constructor(root: ElementRef) {
        this.ui = <webix.ui.datatable> webix.ui({
            container: root.nativeElement
            view:"datatable", autoConfig:true, url:"data.php"
        })
  }
    
  ngOnInit(){
     this.ui.resize();
  }
  ngOnDestroy(){
     this.ui.destructor();
  }
}
~~~

The *webix.ui* call inside of the class constructor initializes a Webix view. You can use any Webix component and options here. 
A single Angular component can host a single Webix widget or a layout with multiple Webix widgets.

The *ngOnInit* handler is used to resize a component to the parent container size (it is not necessary if you use fixed sizes in the *webix.ui* config)

The *ngOnDestroy* is used to clean the memory after the view is disposed of.


Loading Data into Webix Component
------------------------------

A Webix widget can load data directly from the server side, i.e. doesn't require any data providers.

If necessary, you can use *@Input* attributes or data services to provide data for the component, 
the same as for normal Angular components. In both cases, the data must be set through the "data" property of the component. 
This way of data setting supports both raw data objects and promises of data objects.

{{snippet
app/services/film.ts}}
~~~js
@Injectable()
export class FilmService {
    getFilms(): Promise<Film[]>{
        return Promise.resolve(FILMS);
    } 
}
~~~

<br>
{{snippet
app/components/datatable.ts}}
~~~js
constructor(private films: FilmService, root: ElementRef) {
	this.ui = <webix.ui.datatable> webix.ui({
    	container: root.nativeElement,
        view:"datatable", autoConfig:true, data: this.films.getFilms()
	})
}
~~~

Calling API of Webix Components
-----------------------

You can add a public method to the component to call any necessary public method by using *this.ui* as a reference to the Webix object:

{{snippet
app/components/datatable.js
}}
~~~js
addRow(){
	this.ui.add({ title:"New row" });
}
~~~

Handling Webix Events
---------------------

You can expose events of Webix component through the *@Output* property:

{{snippet
app/components/datatable.js
}}
~~~js
export class DataTableComponent implements OnDestroy, OnInit {
  private ui : webix.ui.datatable;
  @Output() onRowSelect = new EventEmitter<Film>();

  constructor(private films: FilmService, root: ElementRef) {
  	this.ui = <webix.ui.datatable> webix.ui({
    	container: root.nativeElement,
            view:"datatable", autoConfig:true, data: this.films.getFilms(),
            on:{
              onAfterSelect: (id) => this.onRowSelect.emit(this.ui.getItem(id))
            }
      })
  }
}
~~~

The above code registers a public event "onRowSelect" for the DataTable component. This event will fire each time when a row is selected in the Webix component.

You can handle it in the parent component like this:

~~~js
@Component({
  selector: 'html-layout',
  template: `<h2>Initializing Webix component in separate HTML containers</h2>
         <datatable (onRowSelect)="fillInfo($event)" class='pagebox'></datatable>
         	<div *ngIf="selectedFilm">
          		<h3> Selected Film </h3>
          		<ul>
                	<li> Title : {{selectedFilm.title}} </li>
                	<li> Votes : {{selectedFilm.votes}} </li>
              	</ul>
            </div>            
         `
})
export class HTMLLayoutComponent {
  private selectedFilm: Film;
  fillInfo(film : Film){
    this.selectedFilm = film;
  }
}
~~~

Here the parent component subscribes to the *onRowSelect* event and shows the selected record info when it is available.

A similar approach can be used to map any other event through *@Output* properties.


Webix Layouts
-------------

There are two ways of using Webix layouts with Angular 2. The recommended approach is to host all Webix layout-based components in a single Angular component:

~~~js
export class MyLayoutComponent implements OnDestroy, OnInit {
	private ui : webix.ui.datatable;
  
  	constructor(private films: FilmService, root: ElementRef) {
  	this.ui = <webix.ui.layout> webix.ui({
    	container: root.nativeElement,
        view:"layout", 
        rows:[
        	some,
            other,
             { cols:[ views, here ] }
        ]
    })
  }
}
~~~

The second approach presupposes defining layouts directly as a part of the *template* property. 

It is a rather tempting way, but it can cause problems, since Webix Layouts use fixed-size concept which is not compatible with the Angular way of UI building.

So you can use Webix layouts, but they will behave differently from normal Angular components (the most notable thing is that you won't be able to use *ngIf* 
to hide/show a part of layout).

With the above disclaimer in mind, you can still try to use Webix Layout from an Angular template. 

There are three layout components provided in the *app/components/layout.ts* directory:

- *rows* - creates a row layout
- *columns* - creates a column layout
- *cell* - wraps a single cell of a layout

~~~js
<rows type="space" class="pagebox">
  <cell><toolbar (onButton)="buttonClick($event)">></toolbar></cell>
  <cell>
    <columns type="wide">
      <cell width="300"><sidebar></sidebar></cell>
      <cell><datatable></datatable></cell>
    </columns>
  </cell>
</rows>
~~~

The *rows* and *cols* tags support *type*, *padding* and *margin* attributes (similar to Webix layouts).

The *cell* tag supports the *width*,*height*, *minWidth*, *minHeight*, *maxWidth*, *maxHeight* and *gravity* attributes similar to the Webix sizing attributes.

Routing
----------

There is no way to define *routerLink* attributes inside of Webix UI. You need to use the *onItemClick* event of a component, if you need to route to a different view:

~~~js
this.ui = <webix.ui.menu>webix.ui({
	container: root.nativeElement,
    view: "menu", layout: "y", minHeight: 200, select: true,
    data: [
    	{ id: "html-layout", value: "HTML Layout" },
        { id: "webix-layout", value: "Webix Layout" },
        { id: "form-grid", value: "Form and Grid" }
    ],
    on: {
        onItemClick: (id) => this.router.navigate([id])
    }
})
~~~

Limitations
-------------

Webix Layouts are not compatible with *ngIf* and any other DOM mutation directives.

Angular CLI
-----------

If you are creating a project with the help of Angular CLI tool, be sure to add webix into *src/tsconfig.app.json*:

~~~js
{
  "extends": "../tsconfig.json",
  "compilerOptions": {
    "outDir": "../out-tsc/app",
    "module": "es2015",
    "baseUrl": "",
    "types": [ "webix" ]
}
~~~

You can check the [Angular CLI](https://github.com/webix-hub/angular2-demo/tree/angular-cli) branch of the above mentioned repo 
which contains the same demo app created with CLI tool.