$('#homeSearch').keyup(function(){
	var val = $('#homeSearch').val();
	var url="http://emanprojects.epizy.com/foodOrder/Client/menu.php?q=";
	var arr = [];
	
	$.ajax({
		url:'data.php',
		method:'post',
		data:'',
		dataType:"text",
		success: function(data)
		{	
			var jsObj = JSON.parse(data);
			var sug = "";
		    if (val !== "") {
			  var len=val.length;
			  for (key in jsObj) {
			  var arrVal = jsObj[key].r_name;
			  var arrId = jsObj[key].r_ID;
			  
			  
			   if(val === (arrVal.substr(0,len)).toLowerCase())
			   { arr.push({arrVal,arrId});}
			    else 
			     	$('#ull').empty();
			    }}

				if(arr.length > 0)
				{   for (key in arr)//var i =0; i<arr.length ; i++) 
	                {$('#ull').append($('<a class="text"></a>').text(arr[key].arrVal).attr('href',url  + arr[key].arrId));
	                 $('#ull').append('<br>');}
	            }

			    if (val == "") 
			    {$('#ull').css('display'  ,'none');}
			    else $('#ull').css('display'  ,'block');
			}})
});


