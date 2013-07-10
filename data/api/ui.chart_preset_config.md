preset
=============


@short: applies the predefined chart configuration object with the specified name
	

@type: string
@relatedsample:
	08_chart/10_scatter_chart/03_style_presets.html
    08_chart/05_line_chart/06_style_presets.html
    08_chart/09_radar_chart/04_style_presets.html
	
@example:
webix.ui({
	view:"chart",
	type:"radar",
    value:"#companyA#",
   	preset:"line",
    xAxis:{ template:"#month#"},
	data:companies
)}

@template:	api_config
@related:
	desktop/bar_charts.md
    desktop/radar_chart.md
    desktop/line_charts.md

@descr:
Currently, the following presets are available: 

- **Bar charts**
  - *'column'*
  - *'stick'*
  - *'alpha'*
- **Radar charts**
  - *'area'*
  - *'line'*
  - *'point'*
- **Line, scatter charts**
  - *'simple'*
  - *'plot'*
  - *'round'*
  - *'square'*
  - *'diamond'*

 


        
        
