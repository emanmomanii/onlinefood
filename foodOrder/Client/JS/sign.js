$("#submitt").click(function(event)
{   
	event.preventDefault();
	$.ajax({
		url:"signData.php",
		method:"post",
		data:$("#sData").serialize(),
		dataType:"text",
		success: function(errMessage)
		{   
			var jsObj = JSON.parse(errMessage);
			
			if(!(jsObj[0] == "")) 
			 $('#fnameErr').text(jsObj[0]);
		    if(!(jsObj[1] == "")) 
			 $('#lnameErr').text(jsObj[1]);
			if(!(jsObj[2] == "")) 
			 $('#emailErr').text(jsObj[2]);
			if(!(jsObj[3] == "")) 
			 $('#passErr').text(jsObj[3]);
			if(!(jsObj[4] == "")) 
			 $('#repassErr').text(jsObj[4]);
			
			
			//$('#reg').text('User is added successfully.Please go to Login page to proceed');
	    }
				
			  
		
	})
})
