requirejs.config(
		{
			shim:{
				'blogs':['jquery']
			}
		}
);

require(['jquery','mask','blogs'],function($,Window){

	var win= new Window();
	var $close=$('.close-icon'),
	$box=$('#head-box'),
	$show=$('.show-icon');
	$close.on('click',function(){
		$box.animate({
			top:-192
		});
	});
	$show.on('click',function(){
		$box.animate({
			top:0
		});
	});
	var $li=$('#img-box li');
	var $img=$('#img-box img');
	$img.each(function(){
		this.left=this.offsetLeft;
		this.top=this.offsetTop;
		this.width=this.offsetWidth;
		this.height=this.offsetHeight;
		$(this).css({
			left:this.left,
			top:this.top
		});
	});
	$img.css({
		'position':'absolute',
		'zIndex':1
	});
	$li.on('mouseover',function(){
		$(this).children('img').next().show();
		$(this).children('img').stop().animate({
			width:315,
			height:209,
			left:$img[0].left-15,
			top:$img[0].top-15
		});

	}).on('mouseout',function(){
		$(this).children('img').next().hide();
		$(this).children('img').stop().animate({
			width:285,
			height:179,
			left:$img[0].left,
			top:$img[0].top
		});
	});

	$('#img-box span').on('click',function(){
		var index=$('#img-box span').index(this);

		win.aLert([
			{
				url:'port-pic.jpg',
				intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp1/8'
			},
			{url:'port-pic1.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp2/8'},
			{url:'port-pic2.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp3/8'},
			{url:'port-pic3.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp4/8'},
			{url:'port-pic4.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp5/8'},
			{url:'port-pic5.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp6/8'},
			{url:'port-pic6.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp7/8'},
			{url:'port-pic7.jpg',intro:'name&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp8/8'}],
			index);
	});

	$('#blog .blog-li a').on('click',function(){
		var $ID=$(this).data('index');

		location.href="welcome/word?id="+$ID;
	});

});