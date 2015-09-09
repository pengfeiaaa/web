<?php
if($action=='delete'){
	$id = intval($id);
	if($id){
		$objFileT = keke_table_class::get_instance('witkey_file');
		$fileInfo = $objFileT->get_table_info('file_id',$id);
		if($fileInfo['uid']==$gUid||!$fileInfo['uid']){
			keke_file_class::del_file($fileInfo['save_name']);
			$objFileT->del('file_id', $id);
			echo json_encode(array ('status'=>1));die();
		}
	}
	die();
}else{
	$___y = date ( 'Y' );$___m = date ( 'm' );$___d = date ( 'd' );
	define ( 'UPLOAD_RULE', "$___y/$___m/$___d/" );
	$fileFormat = explode('|',$kekezu->_sys_config['file_type']);
	$maxSize = intval($kekezu->_sys_config['max_size'])*1024*1024;
	$pathDir = setUploadPath($fileType, $objType);
	$upload = new keke_upload_class(S_ROOT.$pathDir ,$fileFormat,$maxSize);
	$savename = $upload->run( $filename , 1);
	if (is_array ( $savename )) {
		$name = $savename [0] ['name'];
		$path = $pathDir. $savename [0] ['saveName'];
		if($fileType == 'service'){
			$size_a = array (100, 100 );
			$size_b = array (210, 210 );
			$result = keke_img_class::resize ( $path, $size_a, $size_b, true ); 
		}
		if($fileType != 'sys'){     
		    keke_glob_class::waterMark($path);
		}
		$objFileT = keke_table_class::get_instance('witkey_file');
		$arrData = array(
				'file_name'	=>strtoupper(CHARSET) =='GBK'?kekezu::utftogbk($savename [0] ['name']):$savename [0] ['name'],
				'save_name'	=>$path,
				'uid'		=>$gUid,
				'username'	=>$gUsername,
				'obj_type'	=>$objType,
				'task_id'	=>$taskId,
				'work_id'	=>$workId,
				'on_time'   =>time()
		);
		$fileId = $objFileT->save ( $arrData);
		$msg = array ('url' => $path,'filename' => $filename, 'name' => $name,'fileid'=>intval($fileId));
	}
	else{
		$err = $msg = $savename;
	}
	echo json_encode(array ('err' => $err, 'msg' => $msg));die();
}
function setUploadPath($fileType,$objType){
	$pathDir = 'data/uploads/';
	if($fileType =='sys'&&$objType =='auth'){		
		$pathDir .= $fileType.'/'.$objType.'/';
	}elseif($fileType =='sys'&&$objType =='ad'){	
		$pathDir .= $fileType.'/'.$objType.'/';
	}elseif($fileType =='sys'&&$objType =='mark'){	
		$pathDir .= $fileType.'/'.$objType.'/';
	}elseif($fileType =='sys'&&$objType =='tools'){	
		$pathDir .= $fileType.'/'.$objType.'/';
	}elseif($fileType =='space'){					
		$pathDir .= $fileType.'/';
	}else{
		$pathDir .= UPLOAD_RULE;
	}
	return $pathDir;
}