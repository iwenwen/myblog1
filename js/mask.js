define(['jquery'],function($){
	function Window(){

	}
	Window.prototype.aLert=function(data,index){
		var mask=$('<div class="mask"></div>');
		// console.log(data[index].url);

		var oImg=$('<img class="mask-img"  src="img/'+data[index].url+'"></img>');
		oImg.on('load',function(){
			$(this).css({
				top:($(window).height()-oImg.height())/2,
				left:($(window).width()-oImg.width())/2
			});
		});

		var maskClose=$('<div class="mask-close"><p>'+data[index].intro+'</p></div>');
		//var p=$("<p>'data[index].intro'</p>");
		//oImg.css({
		//	'absulote':'fixed',
		//	top:200,
		//	left:200
		//});
		oImg.appendTo(document.body);
		//p.appendTo(oImg);
		mask.appendTo(document.body);
		maskClose.appendTo(document.body);
		mask.on('click',function(e){
			e=e||window.event;
			if(e.target!=oImg){
				mask.remove();
				oImg.remove();
				maskClose.remove();

			}
		});
		maskClose.on('click',function(){
				mask.remove();
				oImg.remove();
				maskClose.remove();
		});
	}

	return Window;
});