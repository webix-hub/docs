getState
=============

@short: gets the current DataProcessor state

@returns:
- state		string, boolean		dataprocessor state

@example:
//dp is a dataprocessor object
dp.getState();

@related:
	desktop/dataprocessor.md
@template:	api_method
@descr:

Possible states are as follows:	

- **true** - the DataProcessor is in action
- **saving** - the request has come from server, DataProcessor performs saving operation
- **false** - the DataProcessor is not active

