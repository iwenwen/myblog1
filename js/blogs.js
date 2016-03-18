	$(function(){
		function loadData(){
			$.getJSON("js/blog.json",function(data){
				for(var i=0;i<data.length;i++){
					var Min= getMinUl();
					$(Min).append('<li class="blog-li"><img src=img/'+data[i].blog_img+'></img><h1>'+data[i].blog_title_1+'</h1><h3>'+data[i].blog_tltle_2+'</h3><p>'+data[i].blog_content+'</p><span ><a data-index='+data[i].blog_index+' href="welcome/word">See&nbsp;More</a></span></li>');

				}
			});
		}
		loadData();
		function getMinUl(){
			var uls=$('#blog .blogs');
			var minUl=$('#blog .blogs')[0];
			for(var i=1;i<uls.length;i++){
				if($(minUl).height()>$(uls[i]).height())
				{
					minUl=uls[i];
				}
			}
			return minUl;
		}
		//$(window).on('scroll',function(){
		//	var $minUl=getMinUl();
		//	var $scrollTop=$(window).scrollTop();
		//	if($scrollTop+$(window).height()>=$($minUl).height()+$($minUl).offset().top){
		//		// alert($scrollTop);
		//		$('.loading').show();
		//		loadData();
		//		setTimeout(function(){
		//		$('.loading').hide();
        //
		//		},1000);
		//	}
		//});
	});