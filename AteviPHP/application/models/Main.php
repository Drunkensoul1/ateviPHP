<?php

    namespace application\models;

    use application\core\Model;

    class Main extends Model {

        public function getNews()
        {
            $result = $this->db->query('SELECT * FROM `news`');
            print_r($result);
            return $result;
        }

    }