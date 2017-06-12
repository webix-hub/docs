React Integration
=====================

The Webix library provides integration with the React framework.

{{note
You can find [an example of Webix-React integration](https://github.com/webix-hub/react-demo) on GitHub 
}}

You can use Webix inside of React App, to add some rich widgets to the existing functionality.

If you plan to use Webix for most UI in the app, please check [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) first. 
It is a micro-framework for building Webix-based apps. It is native for the library and will help you to manage the development stages in the most natural way.

There are several possible ways of using Webix with React:

 - [using a Webix widget in a React app](desktop/react.md#usingwebixwidgetinreactapp)
 - [creating a custom Webix+React component](desktop/react.md#creatingcustomwebixreactcomponent)
 - [using a Webix widget with Redux](desktop/react.md#usingwebixwidgetwithredux)

How to Start
----------------

[Grab the demo from Github](https://github.com/webix-hub/react-demo) if you haven't done this yet. 
Thus you will get an example of integration usage.

Run `npm install` and `npm start` after that. <br>

Open `http://localhost:3000` to view the demo in the browser.

The page will be reloading while you are editing form fields.

###Production build

To build the production version, run `npm run build`.

It will build the application for production to the *build* folder. After that your app is ready to be deployed.


Using Webix Widget in React App
-------------------------------

You can create a React component with a Webix widget inside like this:

~~~js
const ui = {
	view:"slider"
};
const value = 123;

const SliderView = () => (
  <Webix ui={ui} data={value} />
)
~~~

The logic is the following:

- use the tag  < Webix > to define a Webix widget
- specify the necessary view in the *ui* object and define its config

**Related sample**: [Simple React component with Webix UI](https://github.com/webix-hub/react-demo/blob/master/src/TableView.js)

Creating Custom Webix-React Component
--------------------------------

Instead of using a prebuilt Webix component, there is a possibility to make a custom one.
For example, the code for a custom Slider component can look as follows: 

~~~js
class SliderView extends Component {
  render() {
    return (
      <div ref="root"></div>
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

In the above code we have created the SliderView component that contains a Webix slider inside.

The list of the defined methods is:

- the **componentDidMount()** method creates a new component
- the **componentWillUnmount()** method will destruct the component when it won't be needed anymore
- the **shouldComponentUpdate()** method is responsible for the component's updates. In this example, updates for the component are disabled

**Related sample**: [Custom Webix-React component](https://github.com/webix-hub/react-demo/blob/master/src/FilmsView.js)

Using Webix Widget with Redux
-------------------------------

You can use a Webix widget with Redux without any extra customization required.

For custom components make sure that such a component returns *true* from **shouldComponentUpdate()** and provides
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

**Related sample**: [Using Webix with Redux](https://github.com/webix-hub/react-demo/tree/master/src/redux)