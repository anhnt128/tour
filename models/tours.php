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
			if ($data['Search']['costs'] != null) {
				$sql .= "AND costs = '".$data['Search']['costs']."'";
			}
			
			if ($data['Search']['time_start'] != null) {
				$time_start = date('y-m-d', strtotime($data['Search']['time_start']));
				$sql .= "AND time_start <= '".$time_start."'";
			}

			if ($data['Search']['time_end'] != null) {
				$time_end = date('y-m-d', strtotime($data['Search']['time_end']));
				$sql .= "AND time_end >= '".$time_end."'";
			}
			$this->query($sql);
			return $this->fetchAll();
		}
	}