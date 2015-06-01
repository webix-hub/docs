Webix UI Docs
==============

Those are sources of http://docs.webix.com

- all text pages are in the "data" folder
- all images are in the "media" folder

Offline version
---------------

CHM version of documention for Webix 2.4 - http://docs.webix.com/chm/webix_v24.chm


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

<pre>
    ~~~js
    webix.ui({
        view: "list",
        template: "#title#"
    }); // this list will show 'titles'
    ~~~
</pre>

Autogenerated API files
-------------------

It is useless to edit "ref" and "toc" pages (files containing "refs" or "toc" in the path). 

Per-component [reference pages](https://github.com/webix-hub/docs/tree/master/data/api/refs) are autogenerated from `@short` sections of child API articles, 
so it is enough to edit the `@short` section of the related article.

Summarizing tables of contents for UI components and mixins,  or ["toc" pages](https://github.com/webix-hub/docs/tree/master/data/api/toc),  
are autogenerated from `{{memo }}` sections of the related articles in the ["obj" folder](https://github.com/webix-hub/docs/tree/master/data/api/obj).

These memos are also included into component/mixin summarising pages (like [DataLoader](http://docs.webix.com/api__refs__dataloader.html) or 
[Accordion](http://docs.webix.com/api__refs__ui.accordion.html)) as a first line. 

Both `{{memo }}` and `@short` sections are laconic descriptions of the functionality and, if possible, should be shortened to one line of text. 




