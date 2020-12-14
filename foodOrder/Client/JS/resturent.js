function repRes() {
	this.repeat = function(className)
	{
			for (var i =0; i <=2; i++) 
			{   var txt = $('<div class="col-sm-4"></div>');
				var txt2= $('<img >').attr("src", "imgs/seafood.jpg");
				var txt3 = $('<div></div>').text("Shrimp");
				txt.append(txt2,txt3);
		        $("."+className).append(txt);}
	}
}

var obj = new repRes();
obj.repeat('row2');





			