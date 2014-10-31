locales
=============


@short: creates a new locale
	

@type: object

@example:
webix.i18n.locales["es-ES"]={   //"es-ES" - the locale name, the same as the file name
  groupDelimiter:" ",       //a mark that divides numbers with many digits into groups
  groupSize:3,              //the number of digits in a group
  decimalDelimeter:",",     //the decimal delimiter
  decimalSize:2,            //the number of digits after the decimal mark
 
  //applied to columns with 'format:webix.i18n.dateFormatStr'
  dateFormat:"%d/%m/%Y",    
  //applied to columns with 'format:webix.i18n.dateFormatStr'
  timeFormat:"%H:%i",       
  //applied to columns with 'format:webix.i18n.longDateFormatStr'
  longDateFormat:"%d %F %Y",
  //applied to cols with 'format:webix.i18n.fullDateFormatStr'
  fullDateFormat:"%d.%m.%Y %H:%i",
  am:null,
  pm:null,
  //€ - currency name. Applied to cols with 'format:webix.i18n.priceFormat'
  price:"{obj} €", 
  calendar:{
    monthFull:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", 
         "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    monthShort:["En", "Feb", "Mar", "Abr", "Mayo", "Jun", "Jul", "Ago", "Sep", "Oct", 
         "Nov", "Dic"],  
    dayFull:["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
    dayShort:["Dom", "Lun", "Mar", "Mier", "Jue", "Vier", "Sab"]
  },
  hours: "Horas ",
  minutes: "Minutos",
  done:"Listo",
  
  controls:{
    select:"Seleccione"
  }
};

@template:	api_config
@descr:

@related:desktop/localization.md

@relatedapi:api/i18n_setlocale.md

@relatedsample:
	15_datatable/20_templates/08_locales.html
