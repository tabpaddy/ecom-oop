<?php

// PHP cart class
class Cart{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
        // echo "Cart class instantiated<br>";
    }

    // Insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                // Insert into cart("user_id") values (0)
                // Get table columns
                $columns = implode(',', array_keys($params));
                $values = implode("','", array_values($params));

                // Create SQL query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES ('%s')", $table, $columns, $values);

                // Execute query
                $result = $this->db->con->query($query_string);
                // echo "Insert query executed<br>";
                return $result;
            }
        }
    }

    // To get user_id and item_id and insert into cart table
    public function addToCart($userId, $itemId){
        if(isset($userId) && isset($itemId)){
            $params = array(
                "user_id" => $userId,
                "item_id" => $itemId
            );

            // Insert data into cart
            $result = $this->insertIntoCart($params);
            if($result){
                // Reload page
                header("Location: " . $_SERVER['PHP_SELF']);
                exit(); // Ensure no further code is executed
            }
        }
    }

    // Delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
            // echo "Delete query executed<br>";

            if($result){
                // Reload page
                header("Location: " . $_SERVER['PHP_SELF']);
                exit(); // Ensure no further code is executed
            }

            return $result;
        }
    }

    // Calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }

    // get item_id of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if($cartArray != null){
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // save for letter
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = 'cart'){
        if($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id = {$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);
            if($result){
                // Reload page
                header("Location: " . $_SERVER['PHP_SELF']);
                exit(); // Ensure no further code is executed
            }

            return $result;
        }
    }
}
?>
