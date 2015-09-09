<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2015/7/30
 * Time: 10:23
 */
defined ( "ADMIN_KEKE" ) or exit ( "Access Denied" );
kekezu::admin_check_role(72);
$techinfo_obj = new Keke_witkey_auth_techinfo_class ();
$url = "index.php?do=" . $do . "&view=" . $view . "&code=" . $code . "&w[page_size]=" . $w [page_size] . "&w[techinfo_a_id]=" . $w [techinfo_a_id] . "&w[username]=" . $w [username] . "&w[auth_status]=" . $w [auth_status];
if (isset ( $ac )) {
    switch ($ac) {
        case "pass" :
            kekezu::admin_system_log($obj.$_lang['pass_techinfo_auth']);
            $auth_obj->review_auth ( $techinfo_a_id, 'pass' );
            break;
        case "not_pass" :
            if($is_submit=="1"){
                $v_arr = array($_lang['username']=>$name,'网站名称'=>$kekezu->_sys_config['website_name'],"审核原因"=>$reason);
                keke_shop_class::notify_user($_GET['uid'], $name, 'aut_auth_fail', "实名认证失败",$v_arr,2);
                kekezu::admin_system_log($obj.$_lang['nopass_techinfo_auth']);
                $auth_obj->review_auth ( $techinfo_a_id, 'not_pass' );
            }else{
                $uid=$_GET['uid'];
                $strSql="select * from ".TABLEPRE."witkey_space where uid=".$uid;
                $arrResult=db_factory::get_one($strSql);
                require keke_tpl_class::template ( 'auth/enterprise/admin/tpl/auth_tp');
                die();
            }
            break;
        case 'del' :
            kekezu::admin_system_log($obj.$_lang['delete_techinfo_auth']);
            $auth_obj->del_auth ( $techinfo_a_id );
            break;
    }
} elseif (isset ( $sbt_action )) {
    $keyids = $ckb;
    switch ($sbt_action) {
        case $_lang['mulit_delete'] :
            kekezu::admin_system_log($_lang['mulit_delete_techinfo_auth']);
            $auth_obj->del_auth ( $keyids );
            break;
            ;
        case $_lang['mulit_pass'] :
            kekezu::admin_system_log($_lang['mulit_pass_techinfo_auth']);
            $auth_obj->review_auth ( $keyids, 'pass' );
            break;
            ;
        case $_lang['mulit_nopass'] :
            kekezu::admin_system_log($_lang['mulit_nopass_techinfo']);
            $auth_obj->review_auth ( $keyids, 'not_pass' );
            break;
    }
} else
{
    $where = " 1 = 1 ";
    ($w ['auth_status'] === "0" and $where .= " and auth_status = 0 ") or ($w ['auth_status'] and $where .= " and auth_status = '$w[auth_status]' ");
    intval ( $w ['techinfo_a_id'] ) and $where .= " and techinfo_a_id = " . intval ( $w ['techinfo_a_id'] ) . "";
    $w ['username'] and $where .= " and username like '%" . $w ['username'] . "%' ";
    $where.=" order by techinfo_a_id desc ";
    intval ( $w ['page_size'] ) and $page_size = intval ( $w ['page_size'] ) or $page_size = 10;
    $techinfo_obj->setWhere ( $where );
    $count = $techinfo_obj->count_keke_witkey_auth_techinfo ();
    intval ( $page ) or $page = 1 and $page = intval ( $page );
    $kekezu->_page_obj->setAjax(1);
    $kekezu->_page_obj->setAjaxDom("ajax_dom");
    $pages = $kekezu->_page_obj->getPages ( $count, $page_size, $page, $url );
    $techinfo_obj->setWhere ( $where . $pages [where] );
    $techinfo_arr = $techinfo_obj->query_keke_witkey_auth_techinfo ();
    require $kekezu->_tpl_obj->template ( "auth/" . $auth_dir . "/admin/tpl/auth_list" );
}