$(function(){
	
	
	$("#loginform").validate({
		
		
		rules:{
			username:{
				required:true,
				minlength:5
			},
			password:{
				required:true,
				
			}
		},
		messages:{
			
			username:{
				required:"Enter Username",
				minlength:"Username must have minimum 5 letters"
			},
			password:{
				required:"Enter Password",
				
			}
		}
		
	});
	
	
});