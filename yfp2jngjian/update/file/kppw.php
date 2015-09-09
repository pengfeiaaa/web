<?php 
 $dbArr = array(
	'witkey_ad'=> array(
			'0'=>array(
				'fields_name' =>"ad_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"广告编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"target_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"ad_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告文件",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"ad_position",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"位置",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"ad_name",
				'fields_type' =>"varchar(300)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接名称",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"ad_file",
				'fields_type' =>"varchar(300)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告文件",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"ad_content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告内容",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"ad_url",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告URL",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"开始时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"结束时间",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"width",
				'fields_type' =>"varchar(15)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告宽",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"height",
				'fields_type' =>"varchar(15)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告高",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"tpl_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'置顶模板\' 模板名称如：default,red,多个用”,”隔开。",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"is_allow",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'是否开启\' 1开启，0关闭。",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"\'发布时间\' 每十分钟判断一次end_time,并更新on_time",
				'fields_key' =>""
			)
	),
	'witkey_ad_target'=> array(
			'0'=>array(
				'fields_name' =>"target_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"广告位编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"name",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"code",
				'fields_type' =>"char(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位标签",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"description",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"描述",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"targets",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告标签",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"position",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"位置",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"ad_size",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位大小",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"ad_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位个数",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"sample_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"广告位图片",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"is_allow",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'是否开启\' 1开启，0关闭。",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			)
	),
	'witkey_agreement'=> array(
			'0'=>array(
				'fields_name' =>"agree_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"协议编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"agree_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'协议状态\' \"1\"=>\"待确认\",\"2\"=>\"签署完成\",\"3\"=>\"交易完成\"。",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"work_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"buyer_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"buyer_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>" \'买家状态\' \"1\"=>\"待确认\",\"2\"=>\"已确认\",\"3\"=>\"附件上传\",\"4\"=>\"互评完成\",\"5\"=>\"交付完成\"。",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"buyer_accepttime",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家同意时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"buyer_confirmtime",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家确认时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"seller_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家编号",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"seller_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'卖家状态\' \"1\"=>\"待确认\",\"2\"=>\"已确认\",\"3\"=>\"附件确认\",\"4\"=>\"互评完成\",\"5\"=>\"交付完成\"",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"seller_accepttime",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家同意时间",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"seller_confirmtime",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家确认时间",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"agree_title",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"标题",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"file_ids",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文件编号",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_article'=> array(
			'0'=>array(
				'fields_name' =>"art_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"文章标号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"art_cat_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"文章分类编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"art_title",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文章标题",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"cat_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文章类型",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"art_source",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文章来源",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"art_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"图片",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"content",
				'fields_type' =>"longtext",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"内容",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"is_recommend",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否推荐",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(500)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO的title",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(500)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO的关键字",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"varchar(500)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO的描述",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"is_show",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"是否显示",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"is_delineas",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否幻灯",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"pub_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"发布时间",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"views",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"浏览次数",
				'fields_key' =>""
			)
	),
	'witkey_article_category'=> array(
			'0'=>array(
				'fields_name' =>"art_cat_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"文章分类编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"art_cat_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"文章分类父编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"cat_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文章分类名称",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"is_show",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"文章分类状态",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"更新时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"cat_type",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"分类类型",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"art_index",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"索引",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO标题",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO关键字",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO描述",
				'fields_key' =>""
			)
	),
	'witkey_article_keyword'=> array(
			'0'=>array(
				'fields_name' =>"keyword_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"关键词编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"word",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关键词",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"url",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关键词URL",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"keyword_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关键词状态",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"edit_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"编辑时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"创建时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"show_count",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用次数",
				'fields_key' =>""
			)
	),
	'witkey_auth_alipayjs'=> array(
			'0'=>array(
				'fields_name' =>"alipayjs_a_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"银行认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(35)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"alipayjs_account",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"线下支付账号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"pay_to_user_cash",
				'fields_type' =>"decimal(8,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"打给用户的金额",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"real_name",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"真实姓名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"user_get_cash",
				'fields_type' =>"decimal(8,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"收款金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"pay_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"打款时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付费用",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证开始时间",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证结束时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			)
	),
	'witkey_auth_bank'=> array(
			'0'=>array(
				'fields_name' =>"bank_a_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"银行认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(35)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"bank_account",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"线下支付账号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"bank_name",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行名称",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"bank_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"deposit_area",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开户行所在地",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"deposit_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开户行名称",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"pay_to_user_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"打给用户的金额",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"user_get_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"收款金额",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"pay_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"打款时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付费用",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证开始时间",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证结束时间",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"bank_sname",
				'fields_type' =>"varchar(250)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开户行名称",
				'fields_key' =>""
			)
	),
	'witkey_auth_email'=> array(
			'0'=>array(
				'fields_name' =>"email_a_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"邮件认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"email",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮件地址",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"金额",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"auth_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证生效时间",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证过期时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			)
	),
	'witkey_auth_enterprise'=> array(
			'0'=>array(
				'fields_name' =>"enterprise_auth_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"企业认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"company",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"公司",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"licen_num",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"营业执照号码",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"licen_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"营业执照图片",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"支付费用",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证开始时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证结束时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"legal",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"法人代表",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"staff_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"员工人数",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"run_years",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"经营年数",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"url",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"公司网址",
				'fields_key' =>""
			)
	),
	'witkey_auth_item'=> array(
			'0'=>array(
				'fields_name' =>"auth_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证项目代码",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"auth_title",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证项目",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"auth_day",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证时间",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"auth_small_ico",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证后小图标",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"auth_small_n_ico",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证前小图标",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"auth_big_ico",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证大图标",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"auth_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证简介",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"auth_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"认证费用",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"auth_expir",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证有效期",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"auth_open",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否开启认证",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"auth_show",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否显示图标",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"muti_auth",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"多次认证",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"update_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"更新时间",
				'fields_key' =>"MUL"
			),
			'13'=>array(
				'fields_name' =>"auth_dir",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证目录",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"config",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"扩展配置",
				'fields_key' =>""
			)
	),
	'witkey_auth_mobile'=> array(
			'0'=>array(
				'fields_name' =>"mobile_a_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"手机认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"mobile",
				'fields_type' =>"char(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"手机号码",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"valid_code",
				'fields_type' =>"char(6)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"验证码",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"认证费用",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"auth_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证开始时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证结束时间",
				'fields_key' =>""
			)
	),
	'witkey_auth_realname'=> array(
			'0'=>array(
				'fields_name' =>"realname_a_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"实名认证编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"realname",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"真实姓名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"id_card",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"身份证复印件",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"id_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"身份证复印件",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"认证金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证开始时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证结束时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>"MUL"
			)
	),
	'witkey_auth_record'=> array(
			'0'=>array(
				'fields_name' =>"record_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"认证记录编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"auth_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证项目code",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证uid",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"结束时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"auth_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"认证状态",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"ext_data",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"其它数据",
				'fields_key' =>""
			)
	),
	'witkey_basic_config'=> array(
			'0'=>array(
				'fields_name' =>"config_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"配置标号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"k",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"键",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"v",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"类型",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"描述",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"排序",
				'fields_key' =>""
			)
	),
	'witkey_case'=> array(
			'0'=>array(
				'fields_name' =>"case_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"案例编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例对象编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例对象type",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"case_img",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例图片",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"case_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例标题",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"case_desc",
				'fields_type' =>"varchar(500)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例描述",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"case_price",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"案例金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"case_auther",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"操作者",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_comment'=> array(
			'0'=>array(
				'fields_name' =>"comment_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"评论编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"对象编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"origin_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"源编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'评论类型\'(task=>任务交流,Work=>稿件评论,Kf=>客服留言 ,Shop=>网店评论,Case=>案例留言 ,Service=>服务留言)",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"p_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"父编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'6'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"评论内容",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评论时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评论状态",
				'fields_key' =>""
			)
	),
	'witkey_currencies'=> array(
			'0'=>array(
				'fields_name' =>"currencies_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"货币编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"title",
				'fields_type' =>"varchar(32)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"标题",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"code",
				'fields_type' =>"char(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"货币简称",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"symbol_left",
				'fields_type' =>"varchar(24)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"符号左",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"symbol_right",
				'fields_type' =>"varchar(24)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"符号右",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"decimal_point",
				'fields_type' =>"char(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"小数点",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"thousands_point",
				'fields_type' =>"char(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"千数点",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"decimal_places",
				'fields_type' =>"char(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"小数点位数",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"value",
				'fields_type' =>"float(13,8)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"货币汇率",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"last_updated",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"最近更新",
				'fields_key' =>""
			)
	),
	'witkey_custom_fields'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"f_name",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"字段名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"f_code",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"字段code",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"f_type",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"字段类型",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"f_length",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"长度",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"f_decimal_length",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"小数",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"f_required",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"必填   1必填",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"f_tips",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"字段提示",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"f_min_len",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"输入最小长度限制",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"f_fixed_len",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"f_max_len",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"输入长度最长限制",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"f_warning",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"错误提示",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"f_regex",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"正则校验",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"tinyint(255)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"字段所属对象模型  ",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			)
	),
	'witkey_custom_fields_ext'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"tinyint(255)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"字段所属对象模型  ",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"extdata",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"扩展数据",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"objid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"服务编号/任务编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"c_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"keke_witkey_custom_fields表的主键ID",
				'fields_key' =>""
			)
	),
	'witkey_district'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"id",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"upid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"上级id",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"name",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"名称",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"类型",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"displayorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"50",
				'fields_comment' =>"排序",
				'fields_key' =>"MUL"
			)
	),
	'witkey_email'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"邮箱编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"email_name",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮箱名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"email_address",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮箱地址",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"email_type",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮箱格式",
				'fields_key' =>""
			)
	),
	'witkey_favorite'=> array(
			'0'=>array(
				'fields_name' =>"f_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"收藏编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"keep_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收藏对象",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"origin_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"源对象编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"obj_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象名称",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'7'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"on_date",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收藏时间",
				'fields_key' =>""
			)
	),
	'witkey_feed'=> array(
			'0'=>array(
				'fields_name' =>"feed_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"事件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"对象编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"obj_link",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象链接",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"feedtype",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件类型\'(pub_task=>发布任务,pub_work=>参与了任务,task_pay =>支付任务费用,task_prom=>通过推广任务,vip =>升级vip,withdraw =>提现,work_accept=>投稿件,work_delay=>任务延期,add_service =>发布服务)",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"icon",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"事件icon图标",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"title",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件标题",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"feed_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件描述",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"feed_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件图片",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"feed_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"发布时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"ext_data",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"扩展数据",
				'fields_key' =>""
			)
	),
	'witkey_file'=> array(
			'0'=>array(
				'fields_name' =>"file_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"附件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务编号",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"work_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"task_title",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务标题",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"file_name",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"保存前文件",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"save_name",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"保存后文件",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'9'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"更新时间",
				'fields_key' =>""
			)
	),
	'witkey_finance'=> array(
			'0'=>array(
				'fields_name' =>"fina_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"财务清单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"fina_type",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"进出方向",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"fina_action",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收支说明",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"order_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"订单编号",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类型",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"fina_cash",
				'fields_type' =>"decimal(15,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"交易金额",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"user_balance",
				'fields_type' =>"decimal(15,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"用户余额",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"fina_credit",
				'fields_type' =>"decimal(15,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"交易代金券",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"user_credit",
				'fields_type' =>"decimal(15,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"用户余券",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"fina_source",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"来源",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"fina_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"提交时间",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"recharge_cash",
				'fields_type' =>"decimal(15,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"充值金额",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"site_profit",
				'fields_type' =>"decimal(15,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"站长利润",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"fina_mem",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"财务去向说明",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"is_trust",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否已托管",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"trust_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"托管类型",
				'fields_key' =>""
			)
	),
	'witkey_free_follow'=> array(
			'0'=>array(
				'fields_name' =>"follow_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"关注编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关注用户编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"fuid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"被关注的用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"service_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关注的免费商品服务ID",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"type",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"类型",
				'fields_key' =>""
			)
	),
	'witkey_get_password_log'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"找回密码记录编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"valid_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"密码找回验证方式：email 邮箱验证; mobile 手机验证",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"get_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"找回的用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"valid_code",
				'fields_type' =>"varchar(6)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户收到的验证码",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"send_from",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"发送验证来自",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"send_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"验证码发送时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"expire_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"验证码过期时间",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"valid_status",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"验证状态 1已验证 2未验证 3验证过期",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"encrypteuid",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"加密后的用户编号",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"authsid",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			)
	),
	'witkey_hotwords'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"热词编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"sort",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序，站长手动排",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"words",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"搜索词",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"count",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"搜索次数",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"最近一次搜索时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"auto",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否是自动添加的 0-否，1-是",
				'fields_key' =>""
			)
	),
	'witkey_industry'=> array(
			'0'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"行业编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"indus_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"行业父编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"indus_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业名称",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"is_recommend",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'是否推荐\'（1=>\'推荐\',0=>\'不推荐\'） ",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"indus_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"行业类型",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"发布时间",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"list_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"列表类型",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"list_tpl",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"列表模板",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"indus_intro",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"简介",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"list_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"描述",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"totask",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"适用任务",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"togoods",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"适用商品",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO标题",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO关键字",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO描述",
				'fields_key' =>""
			)
	),
	'witkey_link'=> array(
			'0'=>array(
				'fields_name' =>"link_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"链接编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"link_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"link_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接名称",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"link_url",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接地址",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"link_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接图片",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接排序",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"link_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"链接状态",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"更新时间",
				'fields_key' =>"MUL"
			),
			'8'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类型",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			)
	),
	'witkey_mark'=> array(
			'0'=>array(
				'fields_name' =>"mark_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"记录编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"模型编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"origin_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"源对象编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"对象编号",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"obj_cash",
				'fields_type' =>"decimal(10,0)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"对象金额",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"mark_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"\'评价状态\' (0为尚未评 1好 2中 3差) ",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"mark_content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"评价内容",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"mark_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评价时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"被评者编号",
				'fields_key' =>"MUL"
			),
			'9'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"被评者姓名",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"mark_max_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"自动评论过期时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"by_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评论人编号",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"by_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"评论人用户名",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"aid",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'评价项\' (12,3=>对威客的评价项,4,5=>对雇主的评价项) ",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"aid_star",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对应的评价项的星数",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"mark_value",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"评分所得能力值或信誉值",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"mark_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'评论者角色\' (1任务发布者或买家 2为任务威客或卖家) ",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"mark_count",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评价次数",
				'fields_key' =>""
			)
	),
	'witkey_mark_aid'=> array(
			'0'=>array(
				'fields_name' =>"aid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"评价类目编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"aid_name",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"类目名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"aid_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'类目类型(1=>对威客的评价,2=>对雇主的评价)\' ",
				'fields_key' =>""
			)
	),
	'witkey_mark_config'=> array(
			'0'=>array(
				'fields_name' =>"mark_config_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"配置编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型对象",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"good",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"好评",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"normal",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"中评",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"bad",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"差评",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'评价类型\' (1=>威客 , 2=>雇主) ",
				'fields_key' =>""
			)
	),
	'witkey_mark_rule'=> array(
			'0'=>array(
				'fields_name' =>"mark_rule_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"规则编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"g_value",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"信誉值",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"m_value",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"能力值",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"g_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"雇主头衔",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"m_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"威客头衔",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"g_ico",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"雇主图标",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"m_ico",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"威客图标",
				'fields_key' =>""
			)
	),
	'witkey_member'=> array(
			'0'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"password",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"密码",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"rand_code",
				'fields_type' =>"char(6)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"随机码",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"email",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮箱",
				'fields_key' =>""
			)
	),
	'witkey_member_bank'=> array(
			'0'=>array(
				'fields_name' =>"bank_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"银行编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"real_name",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"company",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"企业机构名称",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"card_id",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"身份证号码",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"bank_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"bank_address",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行地址",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"bank_sub_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支行名称",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"card_num",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行卡号",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"bank_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'银行类型（1个人，2企业，3线上）\' ",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"bind_status",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"绑定银行状态",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"bank_full_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行全称",
				'fields_key' =>""
			)
	),
	'witkey_member_black'=> array(
			'0'=>array(
				'fields_name' =>"b_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"黑名单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"expire",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"黑名单到期时间",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"添加黑名单时间",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"login_times",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"登录次数",
				'fields_key' =>""
			)
	),
	'witkey_member_ext'=> array(
			'0'=>array(
				'fields_name' =>"ext_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"扩展编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"k",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'键\'(备注：经历array(v1=>开始时间,v2=>截止时间,v3=>描述,v4=>添加时间) 保密array(k=>联系方式名,v1=>是否公开) 证书array(v1=>证书名称,v2=>图片,v3=>附件编号)) ",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"v1",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"v2",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"v3",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"v4",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"v5",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"值",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"\'类型（Exp=>经历, sect=>保密,cret=>证书,pic=>系统图象）\' ",
				'fields_key' =>""
			)
	),
	'witkey_member_group'=> array(
			'0'=>array(
				'fields_name' =>"group_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"组编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"groupname",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"组名",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"group_roles",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"组权限",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_member_oauth'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"主键编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"source",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"微博类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"account",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"微博账号名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"绑定用户编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"绑定账号名称",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"绑定时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"oauth_id",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"微博账号",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"bind_key",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			)
	),
	'witkey_member_oltime'=> array(
			'0'=>array(
				'fields_name' =>"oltime_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"主键编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"user_status",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户状态",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"last_op_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"上次操作时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"online_total_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户在线总时长",
				'fields_key' =>""
			)
	),
	'witkey_model'=> array(
			'0'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_code",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型代码",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"model_name",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型中文名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"model_dir",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型文件夹",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"model_type",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型类型(task,shop)",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"model_dev",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开发者",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"model_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型开启状态",
				'fields_key' =>"MUL"
			),
			'7'=>array(
				'fields_name' =>"model_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型描述",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"安装时间",
				'fields_key' =>"MUL"
			),
			'9'=>array(
				'fields_name' =>"hide_mode",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否私有模式（0=>非私有，1=>私有）",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"模型排序",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"model_intro",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型介绍",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"indus_bid",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"绑定行业",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"config",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型扩展配置",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"open_custom",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否开启自定义字段",
				'fields_key' =>""
			)
	),
	'witkey_msg'=> array(
			'0'=>array(
				'fields_name' =>"msg_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"短信编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"msg_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"短信父编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"to_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收件人编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"to_username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收件人名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"msg_status",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"删除状态(1=>发送方删，2=>接收方删，3=>在状态为2时发放删除)",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"view_status",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"查看状态",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"title",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"短信标题",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"短信内容",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"发布时间",
				'fields_key' =>"MUL"
			),
			'11'=>array(
				'fields_name' =>"type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"消息类型（1交易通知 2系统通知 3私人短信）",
				'fields_key' =>""
			)
	),
	'witkey_msg_config'=> array(
			'0'=>array(
				'fields_name' =>"config_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"短信配置编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"k",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"短信类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"obj",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"短信所属对象",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"desc",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文字说明",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"prompt",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"文字提示",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"v",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开启短信种类",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"修改时间",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模板内容",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"send_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"信息类型",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"mobile_content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"短信内容",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"mobile",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否发送短信",
				'fields_key' =>""
			)
	),
	'witkey_nav'=> array(
			'0'=>array(
				'fields_name' =>"nav_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"导航编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"nav_url",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"导航链接",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"nav_title",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"导航名称",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"nav_style",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"导航模式",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"newwindow",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"新窗口打开",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"ishide",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"隐藏（0全部显示。1全部隐藏 2.首页隐藏。3.商城隐藏）",
				'fields_key' =>""
			)
	),
	'witkey_order'=> array(
			'0'=>array(
				'fields_name' =>"order_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"订单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"order_name",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"订单名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"order_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"order_amount",
				'fields_type' =>"decimal(12,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"金额",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"order_status",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"状态",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"order_body",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"订单备注",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"order_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"order_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"seller_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家编号",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"seller_username",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家用户名",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"to_seller_message",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"给卖家留言",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"ys_end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"验收时间",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"service_end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"服务结束时间",
				'fields_key' =>""
			)
	),
	'witkey_order_charge'=> array(
			'0'=>array(
				'fields_name' =>"order_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"订单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"order_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"冲值类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"pay_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"支付方式",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"return_order_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"返回订单编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'6'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"pay_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"支付时间",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"pay_money",
				'fields_type' =>"decimal(11,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"支付金额",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"order_status",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"订单状态",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"pay_info",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付信息",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"out_trade_no",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			)
	),
	'witkey_order_detail'=> array(
			'0'=>array(
				'fields_name' =>"detail_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"明细编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"detail_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"order_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"订单编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类型",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"price",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"单价",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"数量",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"detail_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用于增值服务code记录",
				'fields_key' =>""
			)
	),
	'witkey_pay_api'=> array(
			'0'=>array(
				'fields_name' =>"pay_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"接口编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"payment",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付方式",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"config",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付配置",
				'fields_key' =>""
			)
	),
	'witkey_pay_config'=> array(
			'0'=>array(
				'fields_name' =>"config_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"配置编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"k",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"配置键",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"v",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"配置值",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"t",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"配置类型",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"d",
				'fields_type' =>"char(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"配置描述",
				'fields_key' =>""
			)
	),
	'witkey_payitem'=> array(
			'0'=>array(
				'fields_name' =>"item_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"付费项编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"item_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"small_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项小图标",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"item_name",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项目名称",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"item_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"付费项价格",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"item_standard",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用标准（天/次）",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"item_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"描述",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"ext",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"扩展",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"is_open",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否开启",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"item_type",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项类型",
				'fields_key' =>""
			)
	),
	'witkey_payitem_record'=> array(
			'0'=>array(
				'fields_name' =>"record_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"使用记录编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"item_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用的付费项",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"obj_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象类型",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"use_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"使用金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"use_num",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用次数",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"结束时间",
				'fields_key' =>""
			)
	),
	'witkey_plug'=> array(
			'0'=>array(
				'fields_name' =>"plug_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"插件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"plug_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"插件描述",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"插件状态",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"author",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开发者",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"plug_name",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"插件名称",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"submenu_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对应子菜单编号",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"plug_code",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"插件标示",
				'fields_key' =>""
			)
	),
	'witkey_priv_item'=> array(
			'0'=>array(
				'fields_name' =>"op_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"操作编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"op_code",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"操作标识",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"op_name",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"操作人",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"allow_times",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"允许时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"limit_obj",
				'fields_type' =>"int(111)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"限制对象",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"condit",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"条件",
				'fields_key' =>""
			)
	),
	'witkey_priv_rule'=> array(
			'0'=>array(
				'fields_name' =>"r_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"规则编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"item_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"项目编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"mark_rule_id",
				'fields_type' =>"char(5)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"记录规则编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"rule",
				'fields_type' =>"char(5)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"规则",
				'fields_key' =>""
			)
	),
	'witkey_prom_event'=> array(
			'0'=>array(
				'fields_name' =>"event_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"事件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"event_desc",
				'fields_type' =>"varchar(250)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件描述",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"parent_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"上线用户编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"parent_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"上线用户名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广对象编号",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"rake_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"推广佣金",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"rake_credit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"推广积分",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"event_status",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件状态",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"event_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"事件时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"action",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广事件方式",
				'fields_key' =>""
			)
	),
	'witkey_prom_item'=> array(
			'0'=>array(
				'fields_name' =>"item_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"项目编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"item_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"项目类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"prom_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广对象",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"item_name",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"项目名",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"item_pic",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"项目图片",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"item_content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"项目内容",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_prom_relation'=> array(
			'0'=>array(
				'fields_name' =>"relation_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"关系编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"prom_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"prom_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广用户编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"prom_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广用户名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"relation_status",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"推广关系状态",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广事件",
				'fields_key' =>""
			)
	),
	'witkey_prom_rule'=> array(
			'0'=>array(
				'fields_name' =>"prom_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"推广编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"prom_item",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广项目",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"prom_code",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广标识",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"month",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"到月",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"推广金额",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"credit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"推广积分",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"rate",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"佣金",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"config",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"推广配置",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"is_open",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否开启",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"类型",
				'fields_key' =>""
			)
	),
	'witkey_proposal'=> array(
			'0'=>array(
				'fields_name' =>"p_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"建议编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"pro_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议标题",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"pro_type",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"pro_desc",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议描述",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"pro_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议人",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议用户名",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"op_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理建议人编号",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"op_username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理建议人用户名",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"op_content",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理人回复内容",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"op_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"回复时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"pro_status",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"建议状态",
				'fields_key' =>""
			)
	),
	'witkey_report'=> array(
			'0'=>array(
				'fields_name' =>"report_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"举报编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"obj",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报对象类型 task|work|order|product",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"obj_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报对象的ID",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"origin_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报字段obj_id的相关ID",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"front_status",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报的对象的当前状态",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报人编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报用户名",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"user_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报用户类型",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"to_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"被举报人编号",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"to_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"被举报人用户名",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"is_hide",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否隐藏",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"report_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报描述",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"report_file",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报附件",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"report_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"举报状态",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报时间",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"report_type",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报类型",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"op_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"操作者编号",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"op_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"操作者用户名",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"op_result",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理结果",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"op_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理时间",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"phone",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"联系处理人手机",
				'fields_key' =>""
			),
			'21'=>array(
				'fields_name' =>"qq",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"处理人QQ",
				'fields_key' =>""
			),
			'22'=>array(
				'fields_name' =>"report_reason",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"举报原因",
				'fields_key' =>""
			)
	),
	'witkey_resource'=> array(
			'0'=>array(
				'fields_name' =>"resource_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"资源编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"resource_name",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"资源名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"resource_url",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"资源URL",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"submenu_id",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"所属子菜单编号",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"accesscontrol",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"权限控制",
				'fields_key' =>""
			)
	),
	'witkey_resource_submenu'=> array(
			'0'=>array(
				'fields_name' =>"submenu_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"子菜单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"submenu_name",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"子菜单名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"menu_name",
				'fields_type' =>"varchar(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"子菜单代号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"状态",
				'fields_key' =>""
			)
	),
	'witkey_service'=> array(
			'0'=>array(
				'fields_name' =>"service_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"商品/服务编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"service_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"shop_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺编号",
				'fields_key' =>"MUL"
			),
			'4'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'5'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"profit_rate",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收益率",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业编号",
				'fields_key' =>"MUL"
			),
			'8'=>array(
				'fields_name' =>"indus_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业父编号",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"indus_path",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业路径",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"cus_cate_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"自定义分类",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品标题",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"price",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"商品价格",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"unite_price",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"单价",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"service_time",
				'fields_type' =>"int(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"服务时间",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"unit_time",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"服务单位时间（如：/天/时）",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"obj_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"对象名称",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"pic",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品图片",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"ad_pic",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品封面",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"area_range",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"区域范围",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"key_word",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品关键词",
				'fields_key' =>""
			),
			'21'=>array(
				'fields_name' =>"submit_method",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品交付方式outside|inside",
				'fields_key' =>""
			),
			'22'=>array(
				'fields_name' =>"file_path",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"作品附件",
				'fields_key' =>""
			),
			'23'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"作品描述",
				'fields_key' =>""
			),
			'24'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"作品发布时间",
				'fields_key' =>""
			),
			'25'=>array(
				'fields_name' =>"is_stop",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否终止",
				'fields_key' =>""
			),
			'26'=>array(
				'fields_name' =>"sale_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"销量",
				'fields_key' =>""
			),
			'27'=>array(
				'fields_name' =>"focus_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"关注数",
				'fields_key' =>""
			),
			'28'=>array(
				'fields_name' =>"mark_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"评价数",
				'fields_key' =>""
			),
			'29'=>array(
				'fields_name' =>"leave_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"留言数",
				'fields_key' =>""
			),
			'30'=>array(
				'fields_name' =>"views",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"浏览",
				'fields_key' =>""
			),
			'31'=>array(
				'fields_name' =>"pay_item",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项",
				'fields_key' =>""
			),
			'32'=>array(
				'fields_name' =>"att_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"付费费用",
				'fields_key' =>""
			),
			'33'=>array(
				'fields_name' =>"refresh_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"刷新时间",
				'fields_key' =>""
			),
			'34'=>array(
				'fields_name' =>"unique_num",
				'fields_type' =>"char(8)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"唯一数",
				'fields_key' =>""
			),
			'35'=>array(
				'fields_name' =>"total_sale",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"总销量",
				'fields_key' =>""
			),
			'36'=>array(
				'fields_name' =>"service_status",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"作品/服务状态",
				'fields_key' =>""
			),
			'37'=>array(
				'fields_name' =>"is_top",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否推荐",
				'fields_key' =>""
			),
			'38'=>array(
				'fields_name' =>"point",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"地图标记点",
				'fields_key' =>""
			),
			'39'=>array(
				'fields_name' =>"city",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"城市",
				'fields_key' =>""
			),
			'40'=>array(
				'fields_name' =>"payitem_time",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"使用付费项目时间",
				'fields_key' =>""
			),
			'41'=>array(
				'fields_name' =>"exist_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"服务的服务时间",
				'fields_key' =>""
			),
			'42'=>array(
				'fields_name' =>"confirm_max",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"允许最大时间",
				'fields_key' =>""
			),
			'43'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO标题",
				'fields_key' =>""
			),
			'44'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO关键字",
				'fields_key' =>""
			),
			'45'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO描述",
				'fields_key' =>""
			),
			'46'=>array(
				'fields_name' =>"province",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"省份",
				'fields_key' =>""
			),
			'47'=>array(
				'fields_name' =>"area",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"地区",
				'fields_key' =>""
			),
			'48'=>array(
				'fields_name' =>"goodstop",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"服务置顶状态",
				'fields_key' =>""
			),
			'49'=>array(
				'fields_name' =>"overdue_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"当值为\"custom\"表示自定义,当值为\"forever\"表示无期限,当值为数字表示期限为多少天",
				'fields_key' =>""
			),
			'50'=>array(
				'fields_name' =>"edit_status",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"2",
				'fields_comment' =>"编辑状态： 1更新待审核 2无更新 3更新已通过 4更新未通过",
				'fields_key' =>""
			)
	),
	'witkey_service_editlog'=> array(
			'0'=>array(
				'fields_name' =>"log_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"编辑记录编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"log_type",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"编辑记录对象类型 6-作品 7-服务 ",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"log_content",
				'fields_type' =>"longtext",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"记录更新的字段，后台审核通过用于应用用户编辑",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"log_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"记录时间",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"log_objid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"记录编辑对象编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"status",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"记录状态是否有效  0无效  1有效",
				'fields_key' =>""
			)
	),
	'witkey_service_order'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"服务订单ID",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家ID",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"service_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的ID",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"order_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务产生的订单的ID",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"title",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的标题，也可能是编辑过的标题",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"indus_pid",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的类型的父分类，也可能是编辑过父分类",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的类型的子分类，也可能是编辑过子分类",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的详细需求，也可能是编辑过的详细需求",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"file_ids",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务上传的需求附件ids",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"price",
				'fields_type' =>"decimal(10,2) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"购买服务的需求预算",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"workfile",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家工作完成上传的附件",
				'fields_key' =>""
			)
	),
	'witkey_session'=> array(
			'0'=>array(
				'fields_name' =>"session_id",
				'fields_type' =>"char(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"会话编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"session_expirse",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"会话过期时间",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"session_data",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"保存的会话数据",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"session_ip",
				'fields_type' =>"char(15)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"会话开始IP",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"session_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"会话用户编号",
				'fields_key' =>""
			)
	),
	'witkey_shop'=> array(
			'0'=>array(
				'fields_name' =>"shop_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"店铺编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"shop_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺类型",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"shop_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺名称",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"service_range",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺经营范围",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"shop_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺描述",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"work",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"工作职务",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"work_year",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"工作年限",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"keyword",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺SEO关键词",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"shop_background",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺背景图",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"logo",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺LOGO",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"banner",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺导航条banner",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"shop_slogans",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺简介",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"shop_skin",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺皮肤",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"shop_backstyle",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"背景样式",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"shop_font",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺字体",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"shop_active",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否激活店铺",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"is_close",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否关闭",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"views",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"浏览次数",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"focus_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"关注次数",
				'fields_key' =>""
			),
			'21'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开通时间",
				'fields_key' =>""
			),
			'22'=>array(
				'fields_name' =>"homebanner",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"主页banner",
				'fields_key' =>""
			),
			'23'=>array(
				'fields_name' =>"on_sale",
				'fields_type' =>"int(5)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"销量",
				'fields_key' =>"MUL"
			),
			'24'=>array(
				'fields_name' =>"shop_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺状态",
				'fields_key' =>""
			),
			'25'=>array(
				'fields_name' =>"domain",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺域名",
				'fields_key' =>""
			),
			'26'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO标题",
				'fields_key' =>""
			),
			'27'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO关键字",
				'fields_key' =>""
			),
			'28'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO描述",
				'fields_key' =>""
			),
			'29'=>array(
				'fields_name' =>"province",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"省份",
				'fields_key' =>""
			),
			'30'=>array(
				'fields_name' =>"city",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"城市",
				'fields_key' =>""
			),
			'31'=>array(
				'fields_name' =>"area",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"地区",
				'fields_key' =>""
			),
			'32'=>array(
				'fields_name' =>"address",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"详细地址",
				'fields_key' =>""
			),
			'33'=>array(
				'fields_name' =>"coordinate",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"坐标",
				'fields_key' =>""
			)
	),
	'witkey_shop_case'=> array(
			'0'=>array(
				'fields_name' =>"case_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"案例编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"cate_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"分类编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"shop_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"店铺编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"所属行业编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"case_type",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例类型",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"service_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"商品编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"case_name",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例名称",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"case_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例描述",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"case_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例图片",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"case_url",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例网址",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例对象开始时间",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"案例对象结束时间",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_shortcuts'=> array(
			'0'=>array(
				'fields_name' =>"s_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"菜单编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"resource_id",
				'fields_type' =>"int(4)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"资源编号",
				'fields_key' =>""
			)
	),
	'witkey_space'=> array(
			'0'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"password",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"密码",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"sec_code",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"安全码",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"email",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"邮箱",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"user_pic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户头像",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"group_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户组编号",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"isvip",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否是VIP",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"用户状态",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"user_type",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户类型",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"sex",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"性别",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"marry",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否已婚",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"hometown",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"出生地",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"residency",
				'fields_type' =>"varchar(30)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"所在地",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"address",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"详细地址",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"birthday",
				'fields_type' =>"date",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"出生日期",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"truename",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"真实姓名",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"idcard",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"身份证号",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"idpic",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"身份证复印件",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"qq",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"QQ",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"msn",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"MSN",
				'fields_key' =>""
			),
			'21'=>array(
				'fields_name' =>"fax",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"传真",
				'fields_key' =>""
			),
			'22'=>array(
				'fields_name' =>"phone",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"电话",
				'fields_key' =>""
			),
			'23'=>array(
				'fields_name' =>"mobile",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"手机",
				'fields_key' =>""
			),
			'24'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业编号",
				'fields_key' =>""
			),
			'25'=>array(
				'fields_name' =>"indus_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"行业父编号",
				'fields_key' =>""
			),
			'26'=>array(
				'fields_name' =>"skill_ids",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"技能编号",
				'fields_key' =>""
			),
			'27'=>array(
				'fields_name' =>"summary",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"简介",
				'fields_key' =>""
			),
			'28'=>array(
				'fields_name' =>"experience",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"经历",
				'fields_key' =>""
			),
			'29'=>array(
				'fields_name' =>"reg_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"注册时间",
				'fields_key' =>""
			),
			'30'=>array(
				'fields_name' =>"reg_ip",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"注册IP",
				'fields_key' =>""
			),
			'31'=>array(
				'fields_name' =>"domain",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"域名",
				'fields_key' =>""
			),
			'32'=>array(
				'fields_name' =>"credit",
				'fields_type' =>"decimal(11,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"积分",
				'fields_key' =>""
			),
			'33'=>array(
				'fields_name' =>"balance",
				'fields_type' =>"decimal(11,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"账号余额",
				'fields_key' =>""
			),
			'34'=>array(
				'fields_name' =>"balance_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"账户状态",
				'fields_key' =>""
			),
			'35'=>array(
				'fields_name' =>"pub_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"发布数",
				'fields_key' =>""
			),
			'36'=>array(
				'fields_name' =>"take_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"承接数",
				'fields_key' =>""
			),
			'37'=>array(
				'fields_name' =>"accepted_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"接受数目",
				'fields_key' =>""
			),
			'38'=>array(
				'fields_name' =>"vip_start_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"VIP开始时间",
				'fields_key' =>""
			),
			'39'=>array(
				'fields_name' =>"vip_end_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"VIP结束时间",
				'fields_key' =>""
			),
			'40'=>array(
				'fields_name' =>"pay_zfb",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付宝",
				'fields_key' =>""
			),
			'41'=>array(
				'fields_name' =>"pay_cft",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"财付通",
				'fields_key' =>""
			),
			'42'=>array(
				'fields_name' =>"pay_bank",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"银行",
				'fields_key' =>""
			),
			'43'=>array(
				'fields_name' =>"score",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"积分",
				'fields_key' =>""
			),
			'44'=>array(
				'fields_name' =>"buyer_credit",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"买家信誉",
				'fields_key' =>""
			),
			'45'=>array(
				'fields_name' =>"buyer_good_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"买家好评数",
				'fields_key' =>""
			),
			'46'=>array(
				'fields_name' =>"buyer_level",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"买家等级",
				'fields_key' =>""
			),
			'47'=>array(
				'fields_name' =>"buyer_total_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"买家出售总数",
				'fields_key' =>""
			),
			'48'=>array(
				'fields_name' =>"seller_credit",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"卖家信誉",
				'fields_key' =>""
			),
			'49'=>array(
				'fields_name' =>"seller_good_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"卖家好评数",
				'fields_key' =>""
			),
			'50'=>array(
				'fields_name' =>"seller_level",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"卖家等级",
				'fields_key' =>""
			),
			'51'=>array(
				'fields_name' =>"seller_total_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"卖家出售总数",
				'fields_key' =>""
			),
			'52'=>array(
				'fields_name' =>"studio_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"工作室编号",
				'fields_key' =>""
			),
			'53'=>array(
				'fields_name' =>"last_login_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"最后登录时间",
				'fields_key' =>""
			),
			'54'=>array(
				'fields_name' =>"client_status",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户客户端状态",
				'fields_key' =>""
			),
			'55'=>array(
				'fields_name' =>"recommend",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"推荐",
				'fields_key' =>""
			),
			'56'=>array(
				'fields_name' =>"union",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"联盟",
				'fields_key' =>""
			),
			'57'=>array(
				'fields_name' =>"union_assoc",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"联盟对象",
				'fields_key' =>""
			),
			'58'=>array(
				'fields_name' =>"union_rid",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"联盟RID",
				'fields_key' =>""
			),
			'59'=>array(
				'fields_name' =>"union_user",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"联盟用户",
				'fields_key' =>""
			),
			'60'=>array(
				'fields_name' =>"province",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"省份",
				'fields_key' =>""
			),
			'61'=>array(
				'fields_name' =>"city",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"城市",
				'fields_key' =>""
			),
			'62'=>array(
				'fields_name' =>"area",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"地区",
				'fields_key' =>""
			),
			'63'=>array(
				'fields_name' =>"is_mail",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"0表示没有发送，1表示已经发送",
				'fields_key' =>""
			),
			'64'=>array(
				'fields_name' =>"is_perfect",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否完善 1：完善",
				'fields_key' =>""
			),
			'65'=>array(
				'fields_name' =>"autoshop",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"1,开启2，不开启",
				'fields_key' =>""
			),
			'66'=>array(
				'fields_name' =>"is_hongbao",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"1有红包 2.没红包",
				'fields_key' =>""
			)
	),
	'witkey_system_log'=> array(
			'0'=>array(
				'fields_name' =>"log_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"日志编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"log_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"日志类型",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"user_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户类型",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"log_content",
				'fields_type' =>"varchar(250)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"日志内容",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"log_ip",
				'fields_type' =>"char(15)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"日志记录的客户端IP",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"log_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"日志记录时间",
				'fields_key' =>"MUL"
			)
	),
	'witkey_tag'=> array(
			'0'=>array(
				'fields_name' =>"tag_id",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"标签编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"tagname",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"标签名称",
				'fields_key' =>"UNI"
			),
			'2'=>array(
				'fields_name' =>"tag_type",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"标签类型",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"listorder",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"排序",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"code",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"cache_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"缓存时间",
				'fields_key' =>"MUL"
			),
			'6'=>array(
				'fields_name' =>"tag_code",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"标签代码",
				'fields_key' =>""
			)
	),
	'witkey_task'=> array(
			'0'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"work_count",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件数量",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"single_cash",
				'fields_type' =>"float(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件单价",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"profit_rate",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"提成比例",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"task_fail_rate",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"失败提成比例",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"task_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务状态",
				'fields_key' =>"MUL"
			),
			'7'=>array(
				'fields_name' =>"task_title",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务标题",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"task_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务描述",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"task_file",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务附件",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"task_pic",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务图片",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"indus_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"行业编号",
				'fields_key' =>"MUL"
			),
			'12'=>array(
				'fields_name' =>"indus_pid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"父行业编号",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'14'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"开始时间",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"sub_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"交稿/选稿截止时间",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务截止时间",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"sp_end_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"公示截止时间",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"city",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"城市地区",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"task_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"任务赏金",
				'fields_key' =>""
			),
			'21'=>array(
				'fields_name' =>"real_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"实际金额",
				'fields_key' =>""
			),
			'22'=>array(
				'fields_name' =>"task_cash_coverage",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"金额区间",
				'fields_key' =>""
			),
			'23'=>array(
				'fields_name' =>"cash_cost",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"金额花费",
				'fields_key' =>""
			),
			'24'=>array(
				'fields_name' =>"credit_cost",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"代金券花费",
				'fields_key' =>""
			),
			'25'=>array(
				'fields_name' =>"view_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"查看次数",
				'fields_key' =>""
			),
			'26'=>array(
				'fields_name' =>"work_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投稿次数",
				'fields_key' =>""
			),
			'27'=>array(
				'fields_name' =>"leave_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"留言次数",
				'fields_key' =>""
			),
			'28'=>array(
				'fields_name' =>"focus_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"关注次数",
				'fields_key' =>""
			),
			'29'=>array(
				'fields_name' =>"mark_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"互评次数",
				'fields_key' =>""
			),
			'30'=>array(
				'fields_name' =>"is_delineas",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"",
				'fields_key' =>""
			),
			'31'=>array(
				'fields_name' =>"kf_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"客服UID",
				'fields_key' =>""
			),
			'32'=>array(
				'fields_name' =>"pay_item",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"付费项",
				'fields_key' =>""
			),
			'33'=>array(
				'fields_name' =>"att_cash",
				'fields_type' =>"decimal(8,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"增值花费",
				'fields_key' =>""
			),
			'34'=>array(
				'fields_name' =>"contact",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"联系方式",
				'fields_key' =>""
			),
			'35'=>array(
				'fields_name' =>"unique_num",
				'fields_type' =>"char(8)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"唯一编号",
				'fields_key' =>""
			),
			'36'=>array(
				'fields_name' =>"ext_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"补充需求的时间",
				'fields_key' =>""
			),
			'37'=>array(
				'fields_name' =>"ext_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"补充的需求描述",
				'fields_key' =>""
			),
			'38'=>array(
				'fields_name' =>"task_union",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"联盟任务标识",
				'fields_key' =>""
			),
			'39'=>array(
				'fields_name' =>"alipay_trust",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"支付宝托管",
				'fields_key' =>""
			),
			'40'=>array(
				'fields_name' =>"is_delay",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否延期",
				'fields_key' =>""
			),
			'41'=>array(
				'fields_name' =>"r_task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"联盟任务编号",
				'fields_key' =>""
			),
			'42'=>array(
				'fields_name' =>"is_trust",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否托管",
				'fields_key' =>""
			),
			'43'=>array(
				'fields_name' =>"trust_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"托管类型",
				'fields_key' =>""
			),
			'44'=>array(
				'fields_name' =>"is_top",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否置顶",
				'fields_key' =>""
			),
			'45'=>array(
				'fields_name' =>"is_auto_bid",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否自动选稿",
				'fields_key' =>""
			),
			'46'=>array(
				'fields_name' =>"point",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务坐标",
				'fields_key' =>""
			),
			'47'=>array(
				'fields_name' =>"payitem_time",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"增值项购买时间",
				'fields_key' =>""
			),
			'48'=>array(
				'fields_name' =>"age_requirement",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"同意协议",
				'fields_key' =>""
			),
			'49'=>array(
				'fields_name' =>"seo_title",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO标题",
				'fields_key' =>""
			),
			'50'=>array(
				'fields_name' =>"seo_keyword",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO关键字",
				'fields_key' =>""
			),
			'51'=>array(
				'fields_name' =>"seo_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"SEO描述",
				'fields_key' =>""
			),
			'52'=>array(
				'fields_name' =>"province",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"省份",
				'fields_key' =>""
			),
			'53'=>array(
				'fields_name' =>"area",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"地区",
				'fields_key' =>""
			),
			'54'=>array(
				'fields_name' =>"tasktop",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务置顶状态",
				'fields_key' =>""
			),
			'55'=>array(
				'fields_name' =>"urgent",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务加急状态",
				'fields_key' =>""
			),
			'56'=>array(
				'fields_name' =>"seohide",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"屏蔽搜索引擎状态",
				'fields_key' =>""
			),
			'57'=>array(
				'fields_name' =>"workhide",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"稿件隐藏状态",
				'fields_key' =>""
			),
			'58'=>array(
				'fields_name' =>"budget",
				'fields_type' =>"decimal(8,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"明确预算",
				'fields_key' =>""
			),
			'59'=>array(
				'fields_name' =>"teamwork",
				'fields_type' =>"int(2)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"1,开启工作协同  2，关闭工作协同",
				'fields_key' =>""
			),
			'60'=>array(
				'fields_name' =>"is_back",
				'fields_type' =>"int(1)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"是否返还",
				'fields_key' =>""
			),
			'61'=>array(
				'fields_name' =>"goldtype",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"赏金类型",
				'fields_key' =>""
			),
			'62'=>array(
				'fields_name' =>"giftname",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"礼品名称",
				'fields_key' =>""
			)
	),
	'witkey_task_bid'=> array(
			'0'=>array(
				'fields_name' =>"bid_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"投标编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"quote",
				'fields_type' =>"decimal(8,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"投标报价",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"cycle",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"投标周期",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"area",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"投标地区",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"message",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"投标备注",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"bid_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投标状态",
				'fields_key' =>"MUL"
			),
			'9'=>array(
				'fields_name' =>"bid_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投标时间",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"hidden_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"隐藏状态",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"ext_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"扩展状态",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"comment_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"留言次数",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"is_view",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否查看",
				'fields_key' =>""
			),
			'14'=>array(
				'fields_name' =>"hasdel",
				'fields_type' =>"tinyint(4) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户中心我的稿件删除后的状态，如果删除状态为1,默认为0,当状态为1的时候 不在我的稿件中显示。",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"workhide",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否隐藏",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"work_hidden",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否只对雇主可见 0-默认 1-是",
				'fields_key' =>""
			)
	),
	'witkey_task_cash_cove'=> array(
			'0'=>array(
				'fields_name' =>"cash_rule_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"任务价格区间编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"start_cove",
				'fields_type' =>"float(10,0)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开始区间",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"end_cove",
				'fields_type' =>"float(10,0)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"结束区间",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"cove_desc",
				'fields_type' =>"varchar(250)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"区间描述",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"当前时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"model_code",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型代码",
				'fields_key' =>""
			)
	),
	'witkey_task_delay'=> array(
			'0'=>array(
				'fields_name' =>"delay_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"延期编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"delay_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"延期金额",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"delay_day",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"延期天数",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"当前时间",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"delay_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"延期状态",
				'fields_key' =>""
			)
	),
	'witkey_task_delay_rule'=> array(
			'0'=>array(
				'fields_name' =>"defer_rule_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"规则编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"defer_times",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"延期次数",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"defer_rate",
				'fields_type' =>"float(11,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"延期费用比例",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>"MUL"
			)
	),
	'witkey_task_frost'=> array(
			'0'=>array(
				'fields_name' =>"frost_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"冻结编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"frost_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"冻结前状态",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"frost_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"冻结时间",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"restore_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"解冻时间",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"admin_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"admin_username",
				'fields_type' =>"varchar(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			)
	),
	'witkey_task_match'=> array(
			'0'=>array(
				'fields_name' =>"mt_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"速配编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"hirer_deposit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"雇主押金",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"deposit_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"押金金额",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"deposit_credit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"押金代金券",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"host_amount",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"托管费用",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"host_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"托管金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"host_credit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"托管代金券",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"deposit_rate",
				'fields_type' =>"int(3)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"押金费率",
				'fields_key' =>""
			)
	),
	'witkey_task_match_work'=> array(
			'0'=>array(
				'fields_name' =>"mw_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"速配稿件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"work_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"稿件编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"wiki_deposit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"威客押金",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"deposit_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"押金金额",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"deposit_credit",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"押金代金券",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"witkey_contact",
				'fields_type' =>"varchar(255)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"威客联系方式",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"quote",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"报价",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"quote_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"报价描述",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"cycle",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"周期",
				'fields_key' =>""
			)
	),
	'witkey_task_plan'=> array(
			'0'=>array(
				'fields_name' =>"plan_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"计划编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"bid_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"投标编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"plan_title",
				'fields_type' =>"varchar(150)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"计划标题",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"plan_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"计划描述",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"plan_step",
				'fields_type' =>"tinyint(4)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"计划步骤",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"plan_amount",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"计划金额",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"plan_status",
				'fields_type' =>"char(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"计划状态",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"start_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"开始时间",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"end_time",
				'fields_type' =>"int(10)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"结束时间",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"over_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"关闭时间",
				'fields_key' =>""
			)
	),
	'witkey_task_prize'=> array(
			'0'=>array(
				'fields_name' =>"prize_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"奖项编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"prize",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"奖项名次",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"prize_count",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"奖项个数",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"prize_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"奖金金额",
				'fields_key' =>""
			)
	),
	'witkey_task_template'=> array(
			'0'=>array(
				'fields_name' =>"id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"template_name",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模板名称",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"template_title",
				'fields_type' =>"varchar(200)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模板标题",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"template_content",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模板内容",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"on_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"时间",
				'fields_key' =>""
			)
	),
	'witkey_task_time_rule'=> array(
			'0'=>array(
				'fields_name' =>"day_rule_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"规则编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"rule_cash",
				'fields_type' =>"float(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"规则金额",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"rule_day",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"规则天数",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"model_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"模型编号",
				'fields_key' =>"MUL"
			)
	),
	'witkey_task_work'=> array(
			'0'=>array(
				'fields_name' =>"work_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"稿件编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"任务编号",
				'fields_key' =>"MUL"
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>"MUL"
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"char(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"work_title",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件标题",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"work_price",
				'fields_type' =>"decimal(10,3)",
				'fields_extra' =>"",
				'fields_default' =>"0.000",
				'fields_comment' =>"稿件单价",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"work_desc",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件描述",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"work_file",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件附件",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"work_pic",
				'fields_type' =>"text",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件图片",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"work_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"交稿时间",
				'fields_key' =>"MUL"
			),
			'10'=>array(
				'fields_name' =>"hide_work",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"稿件隐藏",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"vote_num",
				'fields_type' =>"int(11) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投票次数",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"comment_num",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"留言次数",
				'fields_key' =>""
			),
			'13'=>array(
				'fields_name' =>"work_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"稿件状态",
				'fields_key' =>"MUL"
			),
			'14'=>array(
				'fields_name' =>"is_view",
				'fields_type' =>"tinyint(1)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否查看",
				'fields_key' =>""
			),
			'15'=>array(
				'fields_name' =>"hasdel",
				'fields_type' =>"tinyint(4) unsigned",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户中心我的稿件删除后的状态，如果删除状态为1,默认为0,当状态为1的时候 不在我的稿件中显示。",
				'fields_key' =>""
			),
			'16'=>array(
				'fields_name' =>"workhide",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否隐藏",
				'fields_key' =>""
			),
			'17'=>array(
				'fields_name' =>"hasyj",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"1",
				'fields_comment' =>"是否议价过 1-否，2-是",
				'fields_key' =>""
			),
			'18'=>array(
				'fields_name' =>"yjje",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"议价金额",
				'fields_key' =>""
			),
			'19'=>array(
				'fields_name' =>"yjtime",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"提出议价的时间",
				'fields_key' =>""
			),
			'20'=>array(
				'fields_name' =>"work_hidden",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"是否只对雇主可见 0-否 1-是",
				'fields_key' =>""
			)
	),
	'witkey_vote'=> array(
			'0'=>array(
				'fields_name' =>"vote_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"投票编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"task_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"任务编号",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"work_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"稿件编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"用户编号",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"用户名",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"vote_ip",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投票IP",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"vote_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"投票时间",
				'fields_key' =>""
			)
	),
	'witkey_withdraw'=> array(
			'0'=>array(
				'fields_name' =>"withdraw_id",
				'fields_type' =>"int(11)",
				'fields_extra' =>"auto_increment",
				'fields_default' =>"",
				'fields_comment' =>"提现编号",
				'fields_key' =>"PRI"
			),
			'1'=>array(
				'fields_name' =>"withdraw_cash",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"提现金额",
				'fields_key' =>""
			),
			'2'=>array(
				'fields_name' =>"uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"提现用户编号",
				'fields_key' =>""
			),
			'3'=>array(
				'fields_name' =>"username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"提现用户名",
				'fields_key' =>""
			),
			'4'=>array(
				'fields_name' =>"pay_username",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"收款账户人名",
				'fields_key' =>""
			),
			'5'=>array(
				'fields_name' =>"withdraw_status",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"提现状态",
				'fields_key' =>""
			),
			'6'=>array(
				'fields_name' =>"applic_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"申请时间",
				'fields_key' =>""
			),
			'7'=>array(
				'fields_name' =>"process_uid",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"受理人编号",
				'fields_key' =>""
			),
			'8'=>array(
				'fields_name' =>"process_username",
				'fields_type' =>"varchar(50)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"受理人用户名",
				'fields_key' =>""
			),
			'9'=>array(
				'fields_name' =>"process_time",
				'fields_type' =>"int(11)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"受理时间",
				'fields_key' =>""
			),
			'10'=>array(
				'fields_name' =>"pay_account",
				'fields_type' =>"varchar(100)",
				'fields_extra' =>"",
				'fields_default' =>"",
				'fields_comment' =>"提现账号",
				'fields_key' =>""
			),
			'11'=>array(
				'fields_name' =>"pay_type",
				'fields_type' =>"char(20)",
				'fields_extra' =>"",
				'fields_default' =>"0",
				'fields_comment' =>"提现类型",
				'fields_key' =>""
			),
			'12'=>array(
				'fields_name' =>"fee",
				'fields_type' =>"decimal(10,2)",
				'fields_extra' =>"",
				'fields_default' =>"0.00",
				'fields_comment' =>"提现手续费",
				'fields_key' =>""
			)
	)
 );
