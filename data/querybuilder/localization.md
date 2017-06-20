Localizing Query Builder
==========================

You can localize File Manager according to the peculiarities of a certain language.

It is possible to localize labels and the names of used filters, they are stored in the **webix.i18n.querybuilder** object:

~~~js
webix.i18n.querybuilder ={
	or: "or",
    and: "and",
    delete_rule: "Delete rule",
    add_rule: "Add rule",
    add_group: "Add group",
    less: "less",
    less_or_equal: "less or equal",
    greater: "greater",
    greater_or_equal: "greater or equal",
    between: "between",
    not_between: "not between",
    begins_with: "begins with",
    not_begins_with: "not begins with",
    contains: "contains",
    not_contains: "not contains",
    ends_with: "ends with",
    not_ends_with: "not ends with",
    is_empty: "is empty",
    is_not_empty: "is not empty",
    equal: "equal",
    not_equal: "not equal",
    is_null: "is null",
    is_not_null: "is not null"
};
~~~

There are 2 ways of applying a custom locale: 

1) redefine default titles according to your locale directly in the **webix.i18n.querybuilder** object; 

2) set a certain locale in the following way:

- include the chosen locale library into your page:

~~~html
<script src="../../../codebase/i18n/ru.js" type="text/javascript"></script>
~~~

- define 'querybuilder' labels in the **webix.i18n.locales[localeName]** object:

~~~js
webix.i18n.locales['ru-RU'].querybuilder = {
	 or: "или",
     and: "и",
     delete_rule: "Удалить правило",
     add_rule: "Добавить правило",
     ...
};
~~~

- apply the created locale with the help of the api/i18n_setlocale.md method:

~~~js
webix.i18n.setLocale('ru-RU');
~~~
