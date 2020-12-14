function repRow() {
	
this.repeat = function(className)
	{
		   
        $.ajax({
		url:"data.php",
		method:"post",
		data:'',
		dataType:"text",
		success: function(data)
		{		
		        var jsObj = JSON.parse(data);
		        var domain = "http://emanprojects.epizy.com/";
		        for (var j=0; j<=jsObj.length-1; j++) {
		      
			       var txt = $('<div class="col-sm-3"></div>');
				   var txt2= $('<div class="card"></div>');
				   var txt3= $('<img >').attr("src", jsObj[j].r_img);
				   var txt4 =$('<div class="container"></div>').attr('id',jsObj[j].r_ID);
				   var txt5 = $('<h6 id="rname"><b></b></h6>').text(jsObj[j].r_name);
				   var txt6 = $('<div></div>').text(jsObj[j].r_descb);
				   txt4.append(txt5,txt6);
				   txt2.append(txt3,txt4);
				   txt.append(txt2);
				   $('.'+className).append(txt);}

				   $('.card').click(function()
		           {   

		             var q =$(this).find('.container').attr('id');/*$(this).find('.container #rname').text();*/
			         window.location.href= domain + "foodOrder/Client/menu.php?q=" + q;
			         $('#resImg').attr('src',jsObj[j].item_img);
		             $('#name').text(jsObj[j].item_name);
		             $('#desc').text(jsObj[j].item_desc);
		           });

		        }
				});

}}

var obj = new repRow();
obj.repeat('resrows');


	   


