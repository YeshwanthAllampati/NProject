$(function() 
{
	
	
	
	

	$('b3').on('click',function(){

	var $evname=$("#ev1");


	var order={

		evname:$evname.val(),
			};


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
			
			for(var i in data){
				
				if(data[i].dept=="CSE")
				{
					CSEmonths.push(data[i].mon);
					CSEperf.push(data[i].count);
				}
			}
			
			for(var i in data){
				
				if(data[i].dept=="ECE")
				{
					ECEmonths.push(data[i].mon);
					ECEperf.push(data[i].count);
				}
			}
			
			var chartdata={
				labels: CSEmonths,
				datasets : [
				{
					backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor: 'rgba(200,200,200,1)',
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
					stacked: true
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
	

	



});