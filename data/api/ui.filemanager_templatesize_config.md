templateSize
=============

@short:
	specifies the file size

@type: function
@example:
templateSize: function(obj,common){
    var value = obj.size;
    var isInt = (parseInt(value,10) == value);
 
    // apply locale formating
    var getFormatedValue = webix.Number.numToStr({
        decimalDelimiter:webix.i18n.decimalDelimiter,
        groupDelimiter:webix.i18n.groupDelimiter,
        decimalSize : isInt?0:webix.i18n.groupSize
    });
    value = getFormatedValue(value); 
 
    // get size label
    var labels = webix.i18n.filemanager.sizeLabels; // ["B","KB",...]
    var sizeIndex = 0;
    while(value/1024 >1){
        value = value/1024;
        sizeIndex++;
    }
    var label = labels[sizeIndex];
 
    return value+""+label;
}

@template:	api_config
@descr:


