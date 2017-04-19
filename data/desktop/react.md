React Integration
=====================

The Webix library provides integration with the React framework.

{{note
The sources for integration of Webix with React JS are not included into the Webix library package. You can take them from the 
[GitHub repository](https://github.com/webix-hub/react-demo)
}}

You can use Webix inside of React App, to add some rich widgets to the existing functionality.

If you plan to use Webix for most UI in the app, please check [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) first. 
It is a micro-framework for building Webix-based apps. It is native for the library and will help you to manage the development stages in the most natural way.

There are 3 main techniques of using Webix with React:

 - [using a Webix widget in a React app](desktop/react.md#usingwebixwidgetinreactapp)
 - [creating a custom Webix+React component](desktop/react.md#creatingcustomwebixreactcomponent)
 - [using a Webix widget with Redux](desktop/react.md#usingwebixwidgetwithredux)

How to Start
----------------

###Getting the starter package

[Grab the demo from Github](https://github.com/webix-hub/react-demo) if you haven't done this yet. 
Thus you will get the starter package that you will be able to begin developing with.

Run `npm install` and `npm start` after that. Open `http://localhost:3000` to view the demo in the browser.

The page will be reloading while you are editing form fields.
You will also see some lint errors in the console.

###Production build

To build the production version, run `npm run build`.

It will build the application for production to the *build* folder. After that your app is ready to be deployed!


Using Webix Widget in React App
-------------------------------

You can add a Webix widget into the React-based application like this:

~~~js
const ui = {
	view:"slider"
};
const value = 123;

<Webix ui={ui} data={value}/>
~~~

The logic is the following:

- specify the necessary view in the *ui* object and set its config
- use the tag  < Webix > to define a Webix widget
- place the specified object and its config into the related attributes of the < Webix > tag

Creating Custom Webix-React Component
--------------------------------

There is a possibility to make a custom Webix+React component. For example, the code for a custom Slider component can look as follows: 

~~~js
class FilmsView extends Component {
  render() {
    return (
      <div ref="root" style={{height:"100%"}}></div>
    );
  }

  componentDidMount(){
    this.ui = window.webix.ui({
      view:"slider"
      container:ReactDOM.findDOMNode(this.refs.root)
    });
  }

  componentWillUnmount(){
    this.ui.destructor();
    this.ui = null;
  }

  shouldComponentUpdate(){
    return false;
  }
}
~~~

In the above code we have created the FilmsView component that contains a Webix slider inside.

The list of the applied API is:

- the **componentDidMount()** method creates a new component
- the **componentWillUnmount()** method will destruct the component when it won't be needed anymore
- the **shouldComponentUpdate()** method is responsible for the component's updates. In this example, updates for the component are disabled

Using Webix Widget with Redux
-------------------------------

You can use a Webix widget with Redux without any customization required.

For custom components make sure that the such a component returns *true* from **shouldComponentUpdate()** and provides
the **componentWillUpdate** handler to mutate the state of the Webix widget.

~~~js
componentWillUpdate(props){
    if (props.data)
      this.setWebixData(props.data);
    if (props.select)
      this.select(props.select);
},
shouldComponentUpdate(){
	return true;
}
~~~
