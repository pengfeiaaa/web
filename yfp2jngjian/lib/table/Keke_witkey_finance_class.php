<?php
  class Keke_witkey_finance_class{
        public $_db;
        public $_tablename;
	    public $_dbop;
	    	 public $_fina_id;  		 public $_fina_type; 		 public $_fina_action; 		 public $_order_id; 		 public $_uid; 		 public $_username; 		 public $_obj_type; 		 public $_obj_id; 		 public $_fina_cash; 		 public $_user_balance; 		 public $_fina_credit; 		 public $_user_credit; 		 public $_fina_source; 		 public $_fina_time; 		 public $_recharge_cash; 		 public $_site_profit; 		 public $_fina_mem; 		 public $_is_trust; 		 public $_trust_type; 
	    public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	    public $_replace=0;  
	    public $_where;      
	     function  keke_witkey_finance_class(){ 			 $this->_db = new db_factory ( );			 $this->_dbop = $this->_db->create(DBTYPE);			 $this->_tablename = TABLEPRE."witkey_finance";		 }	    
	    		public function getFina_id(){			 return $this->_fina_id ;		}		public function getFina_type(){			 return $this->_fina_type ;		}		public function getFina_action(){			 return $this->_fina_action ;		}		public function getOrder_id(){			 return $this->_order_id ;		}		public function getUid(){			 return $this->_uid ;		}		public function getUsername(){			 return $this->_username ;		}		public function getObj_type(){			 return $this->_obj_type ;		}		public function getObj_id(){			 return $this->_obj_id ;		}		public function getFina_cash(){			 return $this->_fina_cash ;		}		public function getUser_balance(){			 return $this->_user_balance ;		}		public function getFina_credit(){			 return $this->_fina_credit ;		}		public function getUser_credit(){			 return $this->_user_credit ;		}		public function getFina_source(){			 return $this->_fina_source ;		}		public function getFina_time(){			 return $this->_fina_time ;		}		public function getRecharge_cash(){			 return $this->_recharge_cash ;		}		public function getSite_profit(){			 return $this->_site_profit ;		}		public function getFina_mem(){			 return $this->_fina_mem ;		}		public function getIs_trust(){			 return $this->_is_trust ;		}		public function getTrust_type(){			 return $this->_trust_type ;		}		public function getWhere(){			 return $this->_where ;		}		public function getCache_config() {			return $this->_cache_config;		}
	    		public function setFina_id($value){ 			 $this->_fina_id = $value;		}		public function setFina_type($value){ 			 $this->_fina_type = $value;		}		public function setFina_action($value){ 			 $this->_fina_action = $value;		}		public function setOrder_id($value){ 			 $this->_order_id = $value;		}		public function setUid($value){ 			 $this->_uid = $value;		}		public function setUsername($value){ 			 $this->_username = $value;		}		public function setObj_type($value){ 			 $this->_obj_type = $value;		}		public function setObj_id($value){ 			 $this->_obj_id = $value;		}		public function setFina_cash($value){ 			 $this->_fina_cash = $value;		}		public function setUser_balance($value){ 			 $this->_user_balance = $value;		}		public function setFina_credit($value){ 			 $this->_fina_credit = $value;		}		public function setUser_credit($value){ 			 $this->_user_credit = $value;		}		public function setFina_source($value){ 			 $this->_fina_source = $value;		}		public function setFina_time($value){ 			 $this->_fina_time = $value;		}		public function setRecharge_cash($value){ 			 $this->_recharge_cash = $value;		}		public function setSite_profit($value){ 			 $this->_site_profit = $value;		}		public function setFina_mem($value){ 			 $this->_fina_mem = $value;		}		public function setIs_trust($value){ 			 $this->_is_trust = $value;		}		public function setTrust_type($value){ 			 $this->_trust_type = $value;		}		public function setWhere($value){ 			 $this->_where = $value;		}		public function setCache_config($_cache_config) {			 $this->_cache_config = $_cache_config; 		}
    	   public  function __set($property_name, $value) {
		 		$this->$property_name = $value; 
			}
			public function __get($property_name) { 
				if (isset ( $this->$property_name )) { 
					return $this->$property_name; 
				} else { 
					return null; 
				} 
			}
	    		function create_keke_witkey_finance(){		 		 $data =  array(); 					if(!is_null($this->_fina_id)){ 				 $data['fina_id']=$this->_fina_id;			}			if(!is_null($this->_fina_type)){ 				 $data['fina_type']=$this->_fina_type;			}			if(!is_null($this->_fina_action)){ 				 $data['fina_action']=$this->_fina_action;			}			if(!is_null($this->_order_id)){ 				 $data['order_id']=$this->_order_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_obj_type)){ 				 $data['obj_type']=$this->_obj_type;			}			if(!is_null($this->_obj_id)){ 				 $data['obj_id']=$this->_obj_id;			}			if(!is_null($this->_fina_cash)){ 				 $data['fina_cash']=$this->_fina_cash;			}			if(!is_null($this->_user_balance)){ 				 $data['user_balance']=$this->_user_balance;			}			if(!is_null($this->_fina_credit)){ 				 $data['fina_credit']=$this->_fina_credit;			}			if(!is_null($this->_user_credit)){ 				 $data['user_credit']=$this->_user_credit;			}			if(!is_null($this->_fina_source)){ 				 $data['fina_source']=$this->_fina_source;			}			if(!is_null($this->_fina_time)){ 				 $data['fina_time']=$this->_fina_time;			}			if(!is_null($this->_recharge_cash)){ 				 $data['recharge_cash']=$this->_recharge_cash;			}			if(!is_null($this->_site_profit)){ 				 $data['site_profit']=$this->_site_profit;			}			if(!is_null($this->_fina_mem)){ 				 $data['fina_mem']=$this->_fina_mem;			}			if(!is_null($this->_is_trust)){ 				 $data['is_trust']=$this->_is_trust;			}			if(!is_null($this->_trust_type)){ 				 $data['trust_type']=$this->_trust_type;			}			 return $this->_fina_id = $this->_db->inserttable($this->_tablename,$data,1,$this->_replace); 		 } 
	    		function edit_keke_witkey_finance(){ 		 		 $data =  array();  					if(!is_null($this->_fina_id)){ 				 $data['fina_id']=$this->_fina_id;			}			if(!is_null($this->_fina_type)){ 				 $data['fina_type']=$this->_fina_type;			}			if(!is_null($this->_fina_action)){ 				 $data['fina_action']=$this->_fina_action;			}			if(!is_null($this->_order_id)){ 				 $data['order_id']=$this->_order_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_obj_type)){ 				 $data['obj_type']=$this->_obj_type;			}			if(!is_null($this->_obj_id)){ 				 $data['obj_id']=$this->_obj_id;			}			if(!is_null($this->_fina_cash)){ 				 $data['fina_cash']=$this->_fina_cash;			}			if(!is_null($this->_user_balance)){ 				 $data['user_balance']=$this->_user_balance;			}			if(!is_null($this->_fina_credit)){ 				 $data['fina_credit']=$this->_fina_credit;			}			if(!is_null($this->_user_credit)){ 				 $data['user_credit']=$this->_user_credit;			}			if(!is_null($this->_fina_source)){ 				 $data['fina_source']=$this->_fina_source;			}			if(!is_null($this->_fina_time)){ 				 $data['fina_time']=$this->_fina_time;			}			if(!is_null($this->_recharge_cash)){ 				 $data['recharge_cash']=$this->_recharge_cash;			}			if(!is_null($this->_site_profit)){ 				 $data['site_profit']=$this->_site_profit;			}			if(!is_null($this->_fina_mem)){ 				 $data['fina_mem']=$this->_fina_mem;			}			if(!is_null($this->_is_trust)){ 				 $data['is_trust']=$this->_is_trust;			}			if(!is_null($this->_trust_type)){ 				 $data['trust_type']=$this->_trust_type;			}			if($this->_where){ 				 return $this->_db->updatetable($this->_tablename,$data,$this->getWhere()); 			 } 			 else{ 				 $where = array('fina_id' => $this->_fina_id); 				 return $this->_db->updatetable($this->_tablename,$data,$where); 			} 		 } 
	    		function query_keke_witkey_finance($is_cache=0, $cache_time=0){ 			 if($this->_where){ 				 $sql = "select * from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select * from $this->_tablename"; 			 } 			if ($is_cache) {			 $this->_cache_config ['is_cache'] = $is_cache;			}			if ($cache_time) {			 $this->_cache_config ['time'] = $cache_time;			 }			 if ($this->_cache_config ['is_cache']) {			     if (CACHE_TYPE) {					 $keke_cache = new keke_cache_class ( CACHE_TYPE );					 $id = $this->_tablename . ($this->_where?"_" .substr(md5 ( $this->_where ),0,6):'');						$data = $keke_cache->get ( $id );							if ($data) {								return $data; 							} else { 								$res = $this->_dbop->query ( $sql ); 								$keke_cache->set ( $id, $res,$this->_cache_config['time'] ); 					 			$this->_where = ""; 								return $res; 							} 						} 			 }else{			 	$this->_where = ""; 				return  $this->_dbop->query ( $sql ); 			 }		 } 
	    		function count_keke_witkey_finance(){ 			 if($this->_where){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->_where = ""; 			 return $this->_dbop->getCount($sql); 		 } 
	    		function del_keke_witkey_finance(){ 			 if($this->_where){ 				 $sql = "delete from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "delete from $this->_tablename where fina_id = $this->_fina_id "; 			 } 			 $this->_where = ""; 			 return $this->_dbop->execute($sql); 		 } 
   }
 ?>