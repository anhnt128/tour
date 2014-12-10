<?php
    class libraries_users extends database {
        protected $_table = "users";
        public function check_login($user, $pass) {
            $sql = "select * from $this->_table where status = '1' && username = '$user' and password = '$pass'";
            $this->query($sql);
            if ($this->num_rows() == 0) {
                return FALSE;
            } else {
                return $this->fetch();
            }
        }
    }