Схемы наследования ЮИ
=====================

Базисные вью
------------

{{note для понимания терминологии рекомендуется ознакомиться с classified/class.md }}

Основные базисы

- webix.ui.baseview - некий прямоугольный объект
  - webix.ui.view - тоже но с опциональной бордерной обводкой
  - webix.ui.baselayout - некий прямоугольный объект, внутри которого лежит N под-объектов
        - webix.ui.layout - тоже но с опциональной бордерной обводкой
    

Все остальные компоненты наследуются от

### layout

accordion, form, toolbar, multiview, carusel

### view

datatable, tree, dataview, list, chart, template, iframe, scrollview, calendar, window, input

### window

popup, context

### list 

pagelist, grouplist, unitlist, menu

### input

button, checkbox, combo, counter, datapicker, icon, input, imagebutton, label, radio, richselect, segmented, textarea, select, slider, tabbar, text, toggle

### window, list

contextmenu




Базисные модули
---------------

Тут все сложнее - базовое вью наследует webix.Settings так что все классы могут поддерживать конфигурирование, в остальном у всех разные наборы.



Новые компоненты
----------------

- скорее всего начинаются с webix.ui.view ( другие базисы только в случае специфических задач ) 
- если загружают/показывают один объект  - webix.SingleRender, webix.AtomLoader
- если загружают/показывают коллекцию объектов  - webix.RenderStack, webix.DataLoader ( возможно имеет смысл наследоваться сразу от webix.ui.list ) 


- если нужен внутренний скролл - webix.Scrollable
- если нужно dnd - webix.DataMove, webix.DataDrag


