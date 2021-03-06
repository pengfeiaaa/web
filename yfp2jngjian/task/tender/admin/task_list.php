<?php
defined ( 'ADMIN_KEKE' ) or exit ( 'Access Denied' );
kekezu::admin_check_role ('m46' );
$task_config = unserialize ( $model_info ['config'] );
$model_list = $kekezu->_model_list;
$task_status = tender_task_class::get_task_status ();
$cash_rule_arr = kekezu::get_table_data ( "*", "witkey_task_cash_cove", "", "", '', '', "cash_rule_id" );
$table_obj = keke_table_class::get_instance ( 'witkey_task' );
$page and $page = intval ( $page ) or $page=1;
$page_size and $page_size=intval($page_size) or $page_size = 10;
$wh = "model_id={$model_info['model_id']}";
if ($w ['task_id']) {
	$wh .= " and task_id  like '%$w[task_id]%'";
}
if ($w ['task_title']) {
	$wh .= " and task_title like '%$w[task_title]%' ";
}
if ($w ['task_status']) {
	$wh .= " and task_status = " . $w[task_status];
}
$w ['task_status']==='0' and $wh .= " and task_status = 0" ;
$url_str = "index.php?do=model&model_id=4&view=list&w[task_id]={$w['task_id']}&w[task_title]={$w['task_title']}&w[task_status]={$w['task_status']}&w[ord][0]={$w['ord']['0']}&w[ord][1]={$w['ord']['1']}&page=$page&page_size=$page_size";
$w['ord']['1']&&$w['ord']['0'] and $wh .= " order by {$w['ord']['0']} {$w['ord']['1']}" or $wh.=" order by task_id desc ";
$table_arr = $table_obj->get_grid ( $wh, $url_str, $page, $page_size, null, 1, 'ajax_dom');
$task_arr = $table_arr ['data'];
$pages = $table_arr ['pages'];
if($task_id){
	$task_audit_arr = get_task_info($task_id);
	$start_time = date("Y-m-d H:i:s",$task_audit_arr['start_time']);
	$end_time = date("Y-m-d H:i:s",$task_audit_arr['end_time']);
	$url = "<a href =\"$_K[siteurl]/index.php?do=task&id=$task_audit_arr[task_id]\" target=\"_blank\" >" . $task_audit_arr['task_title']. "</a>";
}
switch ($ac) {
	case "del" : 
		$res = keke_task_config::task_del($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['delete_success'],'success');
		break;
		case "settask":
			require $kekezu->_tpl_obj->template ( 'task/' . $model_info ['model_dir'] . '/admin/tpl/task_reason' );die;
			break;
		case "stoptask":
			$model_info=db_factory::get_one("select * from ".TABLEPRE."witkey_model where model_id=4");
			$config=unserialize($model_info[config]);
			$task_info = get_task_info($task_id);
			$work_info=db_factory::get_one("select * from  ".TABLEPRE."witkey_task_bid  where task_id='".intval($task_id)."' and bid_status=4");
			if($work_info){
				$objMsgM = new Keke_witkey_msg_class ();
				$objMsgM->setTo_uid ( $work_info ['uid'] );
				$objMsgM->setTo_username ( $work_info ['username'] );
				$objMsgM->setTitle ( kekezu::str_filter ( kekezu::escape ( "任务结束" ) ) );
				$objMsgM->setContent ( kekezu::str_filter ( kekezu::escape ( $content ) ) );
				$objMsgM->setOn_time ( time () );
				$objMsgM->create_keke_witkey_msg ();
				db_factory::execute("update ".TABLEPRE."witkey_task_bid set bid_status=0 where task_id='".intval($task_id)."' and bid_status=4");
			}
			db_factory::execute("update ".TABLEPRE."witkey_task set task_status=9 where task_id=".intval($task_id));
			$v_arr = array (
					"模型名称" => $model_info['model_name'],
					"任务标题" => '<a href="'.$kekezu->_sys_config['website_url'].'/index.php?do=task&id='.$task_audit_arr['task_id'].'">'.$task_audit_arr['task_title'].'</a>',
					"理由" =>   kekezu::str_filter ( kekezu::escape ( $content ) )
			);
			keke_msg_class::notify_user($task_audit_arr['uid'], $task_audit_arr['username'], 'task_end_manually', '任务结束通知',$v_arr);
			kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['operate_success'],'success');
			break;
	case "pass" : 
		$res =keke_task_config::task_audit_pass ( $task_id );
		$v_arr = array($_lang['username']=>"{$task_audit_arr['username']}",$_lang['task_link']=>$url,$_lang['start_time']=>$start_time,$_lang['end_time']=>$end_time,$_lang['task_id']=>"#".$task_id);
		keke_shop_class::notify_user($task_audit_arr['uid'], $task_audit_arr['username'], 'task_auth_success', $_lang['task_auth_success'],$v_arr);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['audit_success'],'success');
		break;
	case "nopass" : 
	if($is_submit=="1"){
				$res =keke_task_config::task_audit_nopass ( $task_id );
				$v_arr = array($_lang['username']=>"{$task_audit_arr['username']}",$_lang['task_title']=>$url,$_lang['web_name']=>"$kekezu->_sys_config['website_name']","审核原因"=>$reason);
				keke_shop_class::notify_user($task_audit_arr['uid'], $task_audit_arr['username'], 'task_auth_fail', $_lang['task_auth_fail'],$v_arr);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['operate_success'],'success');
			}else{
				$strUsername=sreward_task_class::getUsername($_GET['uid']);
				$strTittle=sreward_task_class::getTitle($task_id);
				require keke_tpl_class::template ( 'task/sreward/admin/tpl/admin_user_check');
				die();
			}
		break;
	case "freeze" : 
		$res =keke_task_config::task_freeze ( $task_id );
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['freeze_task_success'],'success');
		break;
	case "unfreeze" : 
		$res =keke_task_config::task_unfreeze ( $task_id );
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['unfreeze_task_success'],'success');
		break;
	case "recommend":
		$res =keke_task_config::task_recommend($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['task_recommend_success'],'success');
		break;
	case "unrecommend":
		$res = keke_task_config::task_unrecommend($task_id);
		kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['cancel_recommend_success'],'success');
		break;
}
if($sbt_action){
	$keyids = $ckb;
	if(is_array($keyids)){
		switch ($sbt_action) {
			case $_lang['mulit_delete']:
				keke_task_config::task_del($keyids);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_delete_success'],'success');
			break;
			case $_lang['mulit_pass']:
				keke_task_config::task_audit_pass($keyids);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_pass_success'],'success');
			break;
			case $_lang['mulit_nopass']:
				keke_task_config::task_audit_nopass($ckb);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_nopass_success'],'success');
				break;
			case $_lang['mulit_freeze']:
				keke_task_config::task_freeze($keyids);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_freeze_success'],'success');
			break;
			case $_lang['mulit_unfreeze']:
				keke_task_config::task_unfreeze($keyids);
				kekezu::admin_show_msg($_lang['operate_notice'],$url_str,2,$_lang['mulit_unfreeze_success'],'success');
			break;
		}
	}
}
function get_task_info($task_id){
	$task_obj = new Keke_witkey_task_class();
	$task_obj->setWhere("task_id = $task_id");
	$task_info = $task_obj->query_keke_witkey_task();
	$task_info = $task_info ['0'];
	return $task_info;
}
require $kekezu->_tpl_obj->template ( 'task/' . $model_info ['model_dir'] . '/admin/tpl/task_' . $view );