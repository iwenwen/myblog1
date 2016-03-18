$(function(){
	var tag=false;

	var $checkBtn=$('#wrap .handel .check-btn');
	$('#wrap .handel .delete').on('click',function(){
		var isSure=confirm("确认要删除此项吗？");
		if(isSure){
			var $adminID=$(this).data('id');
			// alert($adminID);
			location.href="admin/delete_blog?id="+$adminID;
		}
	});
	$('#wrap .all-select').on('click',function(){

		if(tag==false){
			$checkBtn.attr('checked',true);
			tag=true;
		}
		else{
			$checkBtn.attr('checked',false);
			tag=false;
		}
	});
	$('#wrap .delete-all').on('click',function(){
		location.href="admin/delete_all_blog";
	});
	//$('#wrap .add').on('click',function(){
	//
	//});

	$('#wrap .change').on('click',function(){
		//alert($(this).data('id'));
		var $addID=$(this).data('id');
		location.href="admin/change?id="+$addID;
	});
	$('.add').on('click',function(){
		//alert(1);
		var mask=$('<div class="mask-common"><form action="admin/save_add_blog" mothod="get"><p>name:<input name="NAME" type="text"></p><p>email:<input name="email" type="text"></p><p>website:<input name="website" type="text"></p><p>评论详情：<input name="subject" type="text"></p><p><input type="submit"></p></form></div>');
		mask.appendTo(document.body);
	});
});