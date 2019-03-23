function ShowData()
{
	var ch=$("#sell").val();
	console.log(ch);
	if(ch=="BarGraph")
	{
	$(document).ready(function(){
	
	$.ajax({
		url: "http://localhost/Life/data.php",
		method: "POST",
		data:'ch',
		success: function(data){
			
			console.log(data);
			var branch= [];
			var perf= [];
			
			for(var i in data){
				branch.push(data[i].dept);
				perf.push(data[i].count);
				
			}
			
			var chartdata={
				labels: branch,
				datasets : [
				{
					
					label: '',
					backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffff00"] ,
					borderColor:  'rgba(200,200,200,0.75)',
					hoverBackgroundColor: 'rgba(200,200,200,1)',
					hoverBorderColor: 'rgba(200,200,200,1)',
					data: perf
					
					
				}
				
			]
			
			};
			
			var ctx = $("#mycanvas");
			
			var barGraph=new Chart(ctx,{
				
				type: 'bar',
				data: chartdata,
				options: {
					scales: {
						yAxes: [{
						ticks: {
                        beginAtZero:true,
                        min: 0    
                    }
                  }]
               },
			   
			   title: {
					display: true,
					text: 'DepartmentWise Performace'
					}
            }
				
				
			});
			
				
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});
}
	if(ch=="PieGraph")
	{
	$(document).ready(function(){
	
	$.ajax({
		url: "http://localhost/Life/data.php",
		method: "GET",
		success: function(data){
			
			console.log(data);
			var branch= [];
			var perf= [];
			
			for(var i in data){
				branch.push(data[i].dept);
				perf.push(data[i].count);
				
			}
			
			var chartdata={
				labels: branch,
				datasets : [
				{
					
					label: 'Department Wise Performance',
					backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffff00"] ,
					borderColor:  'rgba(200,200,200,0.75)',
					hoverBackgroundColor: 'rgba(200,200,200,1)',
					hoverBorderColor: 'rgba(200,200,200,1)',
					data: perf
					
					
				}
				
			]
			
			};
			
			var ctx = $("#mycanvas");
			
			var barGraph=new Chart(ctx,{
				
				type: 'pie',
				data: chartdata,
				options: {
					title: {
					display: true,
					text: 'DepartmentWise Performace'
					}
					}
				
				
			});
			
				
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});
}
	if(ch=="DoughnutGraph")
	{
	$(document).ready(function(){
	
	$.ajax({
		url: "http://localhost/Life/data.php",
		method: "GET",
		success: function(data){
			
			console.log(data);
			var branch= [];
			var perf= [];
			
			for(var i in data){
				branch.push(data[i].dept);
				perf.push(data[i].count);
				
			}
			
			var chartdata={
				labels: branch,
				datasets : [
				{
					
					label: 'Department Wise Performance',
					backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ffff00"] ,
					borderColor:  'rgba(200,200,200,0.75)',
					hoverBackgroundColor: 'rgba(200,200,200,1)',
					hoverBorderColor: 'rgba(200,200,200,1)',
					data: perf
					
					
				}
				
			]
			
			};
			
			var ctx = $("#mycanvas");
			
			var barGraph=new Chart(ctx,{
				
				type: 'doughnut',
				data: chartdata,
				options: {
					title: {
					display: true,
					text: 'DepartmentWise Performace'
					}
					}
				
				
			});
			
				
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});
}
}