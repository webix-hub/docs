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

@values:

- column	bar charts
- stick		bar charts
- alpha		bar charts
- area		radar charts
- line		radar charts
- point		radar charts
- simple	line, scatter charts
- plot		line, scatter charts
- round		line, scatter charts
- square	line, scatter charts
- diamond	line, scatter charts

 


        
        


@seolinktop: [html5 library](https://webix.com)
@seolink: [javascript graph visualization](https://webix.com/widget/charts/)