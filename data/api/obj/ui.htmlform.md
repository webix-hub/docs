
{{memo  a control for integration with an HTML form}}

The component allows you to get an HTML Form as a lib-based view, so that to use it together with the other lib components (common API, techniques, architecture etc.). Check [htmlform](desktop/htmlform.md) documentation for more detailed description.

## Constructor

{{snippet HTML}}
~~~html
<div class="myform">
	<div>
      <label for="title">Book title</label><br/>
      <input type="text" name="title" placeholder="Title" />
  </div>
	<div>
      <label for="author">Author</label><br/>
      <input type="text" name="author" placeholder="Author" />
  </div>
</div>
~~~

{{snippet JS}}
~~~js
var htmlform = webix.ui({
  view:"htmlform", 
  id:"formView",
  padding:5,
  content:document.body
});
~~~

### Where to start

- [Overview of the HTMLform Widget](desktop/htmlform.md)
- [Samples](http://docs.webix.com/samples/11_htmlform/index.html)
