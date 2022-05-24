<?php

// use to fetch product data
class Product
{
  public $db = null;

  public function __construct(DBController $db)
  {
      if (!isset($db->con)) return null;
      $this->db =$db;
  }

  // fetch product data using getData Method
    public function getData($table = 'hostels'){
      $result = $this->db->con->query("SELECT*FROM {$table}");

      $resultArray = array();

      //fetch product data one by one
      while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $resultArray[] = $item;
      }
      return $resultArray;

    }


    public function getfacility($table = 'facility'){
      $result = $this->db->con->query("SELECT*FROM {$table}");

      $resultArray = array();

      //fetch product data one by one
      while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $resultArray[] = $items;
      }
      return $resultArray;

    }

    //get product using item id
    public function getProduct($item_id = null, $table = 'hostels'){
      if (isset($item_id)){
          $result = $this->db->con->query("SELECT * FROM {$table} WHERE hostel_id={$item_id}");

          $resultArray = array();

          while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $resultArray[] = $item;
          }
          return $resultArray;

      }

    }
}