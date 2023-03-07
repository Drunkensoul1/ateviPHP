<?php

    namespace application\models;

    use application\core\Model;

    class Register extends Model {

        public function registerNewUser($regLogin, $regLastName, $regName, $regPassword, $regEmail)
        {
            $result = $this->db->query('INSERT INTO `user` ( `name`, `lastname`, `login`, `password`, `e_mail`) VALUES ( $regName, $regLastName, $regLogin, $regPassword, $regEmail);');
        }

    }