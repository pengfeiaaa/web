/**
 * 举报维权
 */
function changeBanner(id){
	var url = 'index.php?do=ajax&view=banner&id='+id;
	var modal = $.scojs_modal({
		remote : url,
		title : '个性化设置'
	});
	modal.show();
}

/**
 * 关店 
*/
function closeshop(suid){
		confirmOp('<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> 确定关闭店铺吗？商品会一同下架!</div>',
				function(){
			//formSubmit('index.php?do=seller&closeshop=1&id='+suid,'url');
			$.post("index.php?do=seller&closeshop=1&id="+suid,function(json){
				tipsOp(json.data, json.status);
				if (json.data) {
					setTimeout(function() {
						window.location.href = "index.php?do=seller&id="+suid;
					}, 3000);
				}
			},'json');

		},false);
}
function openshop(suid){
	$.post("index.php?do=seller&openshop=1&id="+suid,function(json){
		tipsOp(json.data,json.status);
		if(json.data){
			setTimeout(function(){
				window.location.href="index.php?do=seller&id="+suid;
			},3000)
		}
	},'json')
}