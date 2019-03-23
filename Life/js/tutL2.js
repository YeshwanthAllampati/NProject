function ShowData1()
{
	
	
	
	var ch=$(".dost1").val();
	console.log(ch);
	var order={
		dept:ch

};
console.log(order);

	$(document).ready(function(){
	
	$.ajax({
		url: "http://localhost/Life/dataL2.php",
		method: "POST",
		data:order,
		success: function(data){
			
			console.log(data);
			var GuestLmonths= [];
			var GuestLperf= [];
			var FacultyMmonths= [];
			var FacultyMperf= [];
			var StudentMmonths= [];
			var StudentMperf= [];
			var BCoursemonths= [];
			var BCourseperf= [];
			var CCoursemonths= [];
			var CCourseperf= [];
			
			
			for(var i in data){
				
				if(data[i].event=="GuestLecture")
				{
					GuestLmonths.push(data[i].mon);
					GuestLperf.push(data[i].count);
				}
			}

			for(var i in data){
				
				if(data[i].event=="FacultyMeets")
				{
					FacultyMmonths.push(data[i].mon);
					FacultyMperf.push(data[i].count);
				}
			}

			for(var i in data){
				
				if(data[i].event=="StudentMeets")
				{
					StudentMmonths.push(data[i].mon);
					StudentMperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].event=="BridgeCourse")
				{
					BCoursemonths.push(data[i].mon);
					BCourseperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].event=="CertificateCourse")
				{
					CCoursemonths.push(data[i].mon);
					CCourseperf.push(data[i].count);
				}
			}
			
			
			var chartdata={
				labels: GuestLmonths,
				datasets : [
				{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: GuestLperf,
				label: 'GuestLecture',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: FacultyMperf,
				label: 'FacultyMeets',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: StudentMperf,
				label: 'StudentMeets',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: BCourseperf,
				label: 'CertificateCourse',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: CCourseperf,
				label: 'BridgeCourse',
				fill: false
			}
			
				
			]
			
			};
			
				var options = {
			maintainAspectRatio: false,
			spanGaps: false,
			elements: {
				line: {
					tension: 0.000001
				}
			},
			scales: {
				yAxes: [{
					stacked: false
				}]
			},
			plugins: {
				filler: {
					propagate: false
				},
				'samples-filler-analyser': {
					target: 'chart-analyser'
				}
			}
		};
		
		
			var ctx = $("#mycanvas");
			
			var barGraph=new Chart(ctx,{
				
				type: 'line',
				data: chartdata,
				options: options	
				
			});
			
				
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});

	
	
}