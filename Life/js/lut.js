function ShowData()
{
	
	
	
	var ch=$(".dost").val();
	console.log(ch);
	var order={
		evname:ch

};
console.log(order);

	$(document).ready(function(){
	
	$.ajax({
		url: "http://localhost/Life/dataL.php",
		method: "POST",
		data:order,
		success: function(data){
			
			console.log(data);
			var CSEmonths= [];
			var CSEperf= [];
			var ECEmonths= [];
			var ECEperf= [];
			var EEEmonths= [];
			var EEEperf= [];
			var CIVmonths= [];
			var CIVperf= [];
			var MECHmonths= [];
			var MECHperf= [];
			var FEDmonths= [];
			var FEDperf= [];
			
			for(var i in data){
				
				if(data[i].dept=="CSE")
				{
					CSEmonths.push(data[i].mon);
					CSEperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].dept=="MECH")
				{
					MECHmonths.push(data[i].mon);
					MECHperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].dept=="FED")
				{
					FEDmonths.push(data[i].mon);
					FEDperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].dept=="CIV")
				{
					CIVmonths.push(data[i].mon);
					CIVperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].dept=="ECE")
				{
					ECEmonths.push(data[i].mon);
					ECEperf.push(data[i].count);
				}
			}
			for(var i in data){
				
				if(data[i].dept=="EEE")
				{
					EEEmonths.push(data[i].mon);
					EEEperf.push(data[i].count);
				}
			}
			
			var chartdata={
				labels: CSEmonths,
				datasets : [
				{
					backgroundColor: '#E45E9D',
				borderColor: '#E45E9D',
				data: CSEperf,
				label: 'CSE',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: ECEperf,
				label: 'ECE',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: EEEperf,
				label: 'EEE',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: CIVperf,
				label: 'CIV',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: MECHperf,
				label: 'MECH',
				fill: false
			},
			{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
				data: FEDperf,
				label: 'FED',
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