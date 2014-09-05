//Eric Berne- the creator of transactional analysis
Berne = {
	solveProblems:function(){
		this._small_problems=[];
		this._minor_problems=[];
		this._big_problems=[];
	},
	reportProblems:function(level){
		var html = "";
		for (var i = 0; i < this._big_problems.length; i++)
				html+="<div class='bigproblem'>"+this._big_problems[i]+"</div>";
		if (!level){
			for (var i = 0; i < this._small_problems.length; i++)
				html+="<div class='smallproblem'>"+this._small_problems[i]+"</div>";			
			for (var i = 0; i < this._minor_problems.length; i++)
				html+="<div class='minorproblem'>"+this._minor_problems[i]+"</div>";			
		}

		document.getElementById("berne_report").innerHTML = html;
	},
	checkProblems:function(mode){
		Berne.solveProblems();
		Berne.analyze(Freid.vPull, Freid.vOrder);
		if (Freid.mPull)
			Berne.analyze(Freid.mPull, Freid.mOrder);
		Berne.reportProblems(mode);
	},
	analyze:function(pull, order){
		for (var i = 0; i < order.length; i++) {
			var key = order[i];
			var obj = pull[key];
			var info = Freid.touch(key, obj);

			Berne.analyzeDeep(info.aPull, info.aOrder, key, "other");
			Berne.analyzeDeep(info.ePull, info.eOrder, key, "event");
			Berne.analyzeDeep(info.mPull, info.mOrder, key, "");
			Berne.analyzeDeep(info.pPull, info.pOrder, key, "config");
		}
	},
	analyzeDeep:function(pull, order, ui, type){
		var url_ui = ui.replace("webix.","");
		for (var i = 0; i < order.length; i++) {
			var key = order[i];
			var data = pull[key];
			var url = "../api__"+url_ui+"_"+key+(type?("_"+type):"")+".html";

			if (data.defined && data.defined[0] && data.defined[0] != ui)
				continue;

			if (!data.assert)
				this._big_problem(url, "document page missed");
			else {
				if (!data.assert.short)
					this._big_problem(url, "short text missed");
				else {
					if (data.fossil)
						this._big_problem(url, "need to be removed");
					if (!data.assert.example)
						this._small_problem(url, "example missed");
					if (!data.assert.descr)
						this._minor_problem(url, "description missed");
				}
			}
		};
	},
	_big_problem:function(url, text){
		this._big_problems.push("<a target='blank' href='"+url+"'>"+url+"</a> - "+text);
	},
	_minor_problem:function(url, text){
		this._minor_problems.push("<a target='blank' href='"+url+"'>"+url+"</a> - "+text);
	},
	_small_problem:function(url, text){
		this._small_problems.push("<a target='blank' href='"+url+"'>"+url+"</a> - "+text);
	}
}