<?php
	class Model_schedules extends database{
		protected $_table = "schedules";
		protected $_status = "1";
		public function get_page($id){
			$sql = "select * from $this->_table where rec_id = '$id' and status = '$this->_status'";
			$this->query($sql);
			return $this->fetch();
		}
		public function getAll() {
			$sql = "select * from $this->_table where status = '$this->_status'";
			$tmp = $this->query($sql);

			return $this->fetchAll();
		}
	}