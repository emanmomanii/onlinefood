$("#logsubmit").click(function(event)
{   
	event.preventDefault();
	$.ajax({
		url:"logData.php",
		method:"post",
		data:$("#lg").serialize(),
		dataType:"text",
		success: function(errMessage)
		{
		      	$('#errLog').text(errMessage);
		        /*if (errMessage == 0) 
		        	window.location.href="http://localhost/Home.php";
		        else if(errMessage == 1)
				$("#err").text("Encorrect Username Or Password");*/
		}
	})
})
