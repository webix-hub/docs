ignoreUndo
=============


@short:
	ignores the undo history track

@params:


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