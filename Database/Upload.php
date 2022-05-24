<?php

// use to fetch product data
class Upload
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db =$db;
    }

    // fetch product data using getData Method
    public function getImage($table = 'childImages'){
        $result = $this->db->con->query("SELECT*FROM {$table}");

        $resultArray = array();

        //fetch product data one by one
        while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $items;
        }
        return $resultArray;
    }

}