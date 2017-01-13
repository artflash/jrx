<?php
  class MY_index extends index {
    function __construct() {
	  parent::__construct();
	}
	//ÆÀ¼Û
	public function digg () {
	  $modelid = intval($_GET['modelid']);
	  $id = intval($_GET['id']);
	  $digg = intval($_GET['digg']);

	  $this->db->set_model($modelid);
	  $this->db->table_name .= '_data';
	  $data = $this->db->get_one(array('id'=>$id),'up, down');
	  if ($digg==1){
	    $this->db->update(array('up'=>'+=1'),array('id'=>$id));
	    echo ++$data['up'];
	  } else {
	    $this->db->update(array('down'=>'+=1'),array('id'=>$id));
	    echo ++$data['down'];
	  }
	}
  }