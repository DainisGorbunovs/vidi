	var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

	function dobdropdown(dayfield, monthfield, yearfield){
		var today=new Date()
		var dayfield=document.getElementById(dayfield)
		var monthfield=document.getElementById(monthfield)
		var yearfield=document.getElementById(yearfield)

		for (var i=0; i<31; i++)
			dayfield.options[i]=new Option(i+1, i+1)

		for (var m=0; m<12; m++)
			monthfield.options[m]=new Option(monthtext[m], m+1)

			var thisyear=today.getFullYear()
		for (var y=0; y<115; y++){
			yearfield.options[y]=new Option(thisyear, thisyear)
			thisyear-=1
		}
	}