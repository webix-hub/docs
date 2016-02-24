ignoreUndo
=============


@short:
	calls a function that will be ignored in the undo history track

@params:

- function			function		function for which undo history track will be disabled


@example:
// item adding won't be reverted by undo()
$$("list").ignoreUndo(function(){
    $$("list").addItem({...});
});


@template:	api_method
@descr:

@relatedapi:
- api/undo_removeundo.md
- api/undo_undo.md
- api/undo_undo_config.md

@related:
- desktop/undo.md