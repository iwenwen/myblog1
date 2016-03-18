$(function(){
	var tag=false;

	var $checkBtn=$('#wrap .handel .check-btn');
	$('#wrap .handel .delete').on('click',function(){
		var isSure=confirm("确认要删除此项吗？");
		if(isSure){
			var $adminID=$(this).data('id');
			location.href="admin/delete?id="+$adminID;
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

		location.href="admin/delete_all";
	});
	$('#wrap .handel .change-message').on('click',function(){
		//alert($(this).data('id'));
		var $addID=$(this).data('id');
		location.href="admin/change_message?id="+$addID;
	});
	$('.add').on('click',function(){
		//alert(1);
		var mask=$('<div class="mask-common"><form action="admin/save_add_message" mothod="get"><p>name:<input name="name" type="text"></p><p>email:<input name="email" type="text"></p><p>content:<input name="content" type="text"></p><p><input type="submit"></p></form></div>');
		mask.appendTo(document.body);
	});
});