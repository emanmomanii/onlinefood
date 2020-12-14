function displayItems() {
	var total=0;
	var subtotal =0;
    var mainArr = [];
    var counter = 1;

this.display =function(className)
	{   
		var link = window.location.href;
		

        $.ajax({
		url:"menuItems.php",
		method:"post",
		data:{url:link},
		dataType:"text",
		success: function(data)
		{   var jsObj = JSON.parse(data);
			var arr2=[];
			
			for (var j=0; j<=jsObj.length-1; j++)
			{
			 $('#resImg').attr('src',jsObj[j].r_img);
		     $('#name').text(jsObj[j].r_name);
		     $('#cartresName').text(jsObj[j].r_name);
		     $('#desc').text(jsObj[j].r_descb);
		     var rowDiv = $("<div class='row menu-items'></div>");
		     
			 var txt1 = $("<img class='col-sm-3 img-g'>").attr('src',jsObj[j].item_img);
			 txt1.attr('id',jsObj[j].item_id);
	         var txt2= $("<div class='col-sm-6 det-item'></div>");
	         var txt3 = $("<h4 id='item-name'></h4>").text(jsObj[j].item_name);
	         var txt4 = $("<div></div>").text(jsObj[j].item_desc);
	         var txt5= $("<div class='col-sm-1' id='price'><b></b></div>").text(jsObj[j].item_price + "$");
	         var txt6 = $("<div><i class='col-sm-1 fa fa-plus justify-content-center' id='menu-plus'></i></div>");
	         txt2.append(txt3,txt4);
	         rowDiv.append(txt1,txt2,txt5,txt6);
	         $("."+className).append(rowDiv);}
             
             $(".menu-items").click(function()
	                      { var name = $(this).find('.det-item #item-name').text();
	         	         	var price = $(this).find('#price').text();
	         	         	var id = $(this).find('.img-g').attr('id');
	         	         	var subtotal=counter  * parseFloat(price);
	         	            var arr2=[];
	         	            arr2.push({name,price,id,counter,subtotal});
	         	            
	         	            var found = false;
	         				for(var i = 0; i < mainArr.length; i++) {
	         					
	                               if (mainArr[i][0].id == id){
	         					   total = total + parseFloat(mainArr[i][0].price );
	         					   $('#' + id +'c').text(++mainArr[i][0].counter);
	         				       $('#total').text(total + '$');
	         				       found = true;
	         				       break;}}
	         	            
	         	            if(!found)
	         	            {   
	         	            	mainArr.push(arr2);
	         	            	obj.cartItem(arr2);

	         	            }});
            
	         }});}


 this.cartItem = function(arr)
{	     
	     

         for (var i =0; i<arr.length; i++) {
         
         var mainRow = $("<div class='row cart-row'></div>");
         var txt1 = $("<div  class='col-sm-3 justify-content-center divv'></div>");
         var txt2 = $("<div  class='container'></div>");
         var txt3 = $("<div  class='row row-amount'></div>");
         var txt4 = $('<i class="fa fa-minus minus-s"></i>');
         var txt5= $('<div class="cartc"></div>').text(arr[i].counter);
         txt5.attr('id',arr[i].id + 'c');
         var txt6 = $('<i class="fa fa-plus plus-s"></i>');

         var txt7=$('<div class="col-sm-5 divv ccc"></div>').text(arr[i].name);
         
         var txt8 = $('<div class="col-sm-2 divv" id="pprice"></div>').text(arr[i].price);
         var txt9 =$('<div class="col-sm-2 divv"><i class="fa fa-minus" id="pop"></i></div>');
         var hr =$('<hr class="hrr" style="width:100%;background-color:rgb(195,195,195);">');

         txt3.append(txt4,txt5,txt6);
         txt2.append(txt3);
         txt1.append(txt2);
         mainRow.append(txt1,txt7,txt8,txt9);
         $('.cart-item').append(mainRow,hr);
         total = total + parseFloat(arr[i].price);
         } 
         

         if(total > 0)
         {
         	$('#amount').text('Total Amount');
         	$('#total').text(total + '$');
         	$("#doneBtn").css('display','inline');
         }
         $('.cart-row').hover(function(){
         					//console.log(arr);
         					var id = $(this).find(".cartc").attr('id');
         					//console.log(id);
         					$('.plus-s').click(function(){
         						//console.log(mainArr.length);
         						//console.log(mainArr);
         						for(var i = 0; i < mainArr.length; i++) {
	         					if (mainArr[i][0].id == parseInt(id)){
	         					   total = total + parseFloat(mainArr[i][0].price );
	         					   $('#' + parseInt(id) +'c').text(++mainArr[i][0].counter);
	         				       $('#total').text(total + '$');}}
	                           });
         	               
	         	           });

        $('.minus-s').click(function(){
        					var id = $(this).find(".cart-c").attr('id');
        					
        	                for(var i = 0; i < mainArr.length; i++) {
        	                	if (mainArr[i][0].id == id){
        	                	   $('#c' + mainArr[i][0].id).text(--(mainArr[i][0].counter));
	         				       total = total - mainArr[i][0].subtotal;
	         				       $('#total').text(total + '$');
	                               break;}}
        });


}

}

var obj=new displayItems();
obj.display("searchmenu");



