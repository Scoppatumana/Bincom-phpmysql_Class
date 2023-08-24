<?php 
session_start();
require('connection.php');
// Function to execute Query
function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $type = str_repeat("s", count($values));
    $stmt->bind_param($type, ...$values);
    $stmt->execute();
    return $stmt;
}


// Function To Select All Rows
function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        $i = 0;
        
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }

        $stmt = executeQuery($sql, $conditions);
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}


// Function To Insert to the Database
function create($table, $data){
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . "$key = ?";
        }else{
            $sql = $sql . ",$key = ?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
        
}

  // Function to Delete Row from the Database
  function delete($table, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";
    
    $stmt = executeQuery($sql, ['id' => $id]);
    $record = $stmt->affected_rows;
    return $record;
}

?>
