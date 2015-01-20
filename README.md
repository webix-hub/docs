Webix UI Docs
==============

Those are sources of http://docs.webix.com

- all text pages are in the "data" folder
- all images are in the "media" folder


Differences from MarkDown
-------------------------

* Tabs or 4+ spaces are used to separate two-column lists

  ```
  - line	cells with border (default)
  - clean	cells without border
  - wide	cells with border and small space between siblings
  - space	cells with border and wide space between siblings
  - head	similar to "wide", but there is any border between the first and second cells
  ```
  
  =>

  ![Screenshot](https://cloud.githubusercontent.com/assets/33569/5707834/d3aa3a0e-9a40-11e4-9acd-33ad792be788.png)

* triple-tilde, `~~~` is used instead of <code>```</code> for code sections

<code><pre>
    ~~~js
    webix.ui({
        view: "list",
        template: "#title#"
    }); // this list will show 'titles'
    ~~~
</pre></code>
