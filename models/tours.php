<?php
	class Model_tours extends database{
		protected $_table = "tours";
		protected $_status = "1";
		public function get_page($id){
			$sql = "select * from $this->_table where rec_id = '$id' and status = '$this->_status'";
			$this->query($sql);
			return $this->fetch();
		}
		public function getAll() {
			$sql = "select * from $this->_table where status = '$this->_status'";
			$this->query($sql);

			return $this->fetchAll();
		}
		public function getSearch($data = null)
		{
			$sql = "select * from $this->_table where  status = '$this->_status'";
			if ($data['Search']['from'] != null) {
				$sql .= "AND schedule_start = '".$data['Search']['from']."'";
			}
			if ($data['Search']['to'] != null) {
				$sql .= "AND schedule_end = '".$data['Search']['to']."'";
			}
			$this->query($sql);

			return $this->fetchAll();
		}
	}