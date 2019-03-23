$(function() {
	
	
	var str=$("#email").val()
	
	
		$.validator.addMethod('strongPassword', function(value, element) {
    return this.optional(element) 
      || /\d/.test(value)
      && /[a-z]/i.test(value)
		&&/[!@#$%^&*\(\)-+=\'\"\?\>\<\,\.]/.test(value);
  }, '<b>At least one number, one special char\' and one char\'.</b>')

	
	
	$("#regform").validate({
		
	
		rules:{
			fname: "required",
			lname: "required",
			username:{
				required:true,
				minlength:5
			},
			email:{
			required: true,
			email: true,
			remote:{
				url:"exist.php",
				type:"POST",
				data:{
					'email1':function(){
						return $( "#email" ).val();
						
					}
					
				}
				
			}
		},
			phone: {
				required:true,
				digits:true,
				minlength:10,
				maxlength:10
			},
			department: {
				required:true
			},
			designation: {
				required:true
				
			},
			password: {
				required:true,
				minlength:6,
				strongPassword: true
			},
			repassword:{
				required:true,
				minlength:6,
				equalTo: "#password"
			},
			securitykey: {
				required:false
				
			}
	},

		messages:{
			fname: "<b>Please Enter First Name</b>",
			lname: "<b>Please Enter Last Name</b>",
			username:{
				required:"<b>Please Enter User Name</b>",
				minlength:"<b>UserName must have minimum 5 characters</b>"
			},
			email:{
				required:"<b>Enter Email Address</b>",
				email:"<b>Please Enter a Valid email address</b>",
				remote:"<b>Email already Exists. Use a New Email or </b><a href='login.php' style='color:green'>Login?</a>"
				
			},
			phone: {
				required:"<b>Please Enter the Phone Number</b>",
				digits:"<b>Enter Only Digits</b>",
				minlength:"<b>Phone Number must have 10 digits</b>",
				maxlength:"<b>Phone Number must have 10 digits</b>"
			},
			department: {
				required:"<b>Please choose your department</b>"
			},
			designation: {
				required:"<b>Please Enter your Designation</b>"
				
			},
			password: {
				required:"<b>Please Enter Password</b>",
				minlength:"<b>Password must have minimun 6 charectors</b>"
			},
			repassword:{
				required:"<b>Please Enter Password</b>",
				minlength:"<b>Password must have minimun 6 charectors</b>",
				equalTo: "<b>Passwords do not Match</b>"
			}
			
		}
		
	});
	
	$("#username").focus(function(){
		
		var fn=$("#fname").val();
		var ln=$("#lname").val();
		
		if(fn&&ln&&!this.value){
			
			this.value=fn+"_"+ln;
		}
		
		
	});
	
	
	
});