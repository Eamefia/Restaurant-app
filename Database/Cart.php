<?php
ob_start();

//php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con))  return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con !=null){
            if ($params !=null){
                //get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',', array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;

            }
        }
    }

    // tp get user_id and item id and insert into cart table
    public function addToCart($userId, $itemId){
        if (isset($userId) && isset($itemId)){
            $params = array(
                "user_id" => $userId,
                "item_id" => $itemId
            );

            //insert data to cart
            $result = $this->insertIntoCart($params);
            if ($result){
                header("Location:" .$_SERVER['PHP_SELF']);
            }
        }
    }

    //delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if ($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
            if ($result){
                header("Location:" , $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //calculate sub total
    public function getSum($arr){
        if (isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    //get item id shopping cart list
    public function getCartId($cartArray = null, $key = "item_id") {
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

      // save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id = {$item_id};";



            // execute multiple query
            $result = $this->db->con->multi_query($query);
            if ($result){
                header("Location:" .$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //delete cart item using cart item id
    public function deleteWhishlist($item_id = null, $table = 'wishlist'){
        if ($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
            if ($result){
                header("Location:" , $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}
