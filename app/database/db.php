<?php 

session_start();
require('conexao.php');

function dd($value){ //deletar após desenvolvimento
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data){
    global $conexao;
    $stmt= $conexao-> prepare($sql);
    $values=array_values($data);
    $types= str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;

}


function selectAll($table, $conditions = []){
    global $conexao;

    $sql= "SELECT * FROM  $table";
    if(empty($conditions)){
        $stmt = $conexao-> prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    
        return $records;
    }else{
       // $sql = "SELECT * FROM users WHERE username='Luana' AND admin=1";
        $i = 0;
        foreach($conditions as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    
    }
   
}



function selectOne($table, $conditions){
    global $conexao;

    $sql= "SELECT * FROM  $table";
    
        $i = 0;
        foreach($conditions as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";

            }
            $i++;
        }

       // $sql = "SELECT * FROM users WHERE admin= AND username='Luana Teeste' LIMIT ";
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    
    }
   

function create($table, $data){
    global $conexao;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
        foreach($data as $key => $value){
            if($i === 0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";

            }
            $i++;
        }
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
}


function update($table, $id, $data){
    global $conexao;
    $sql = "UPDATE $table SET ";

    $i = 0;
        foreach($data as $key => $value){
            if($i === 0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";

            }
            $i++;
        }
        $sql = $sql ." WHERE id=?";
        $data['id'] = $id;
        $stmt = executeQuery($sql, $data);
        return $stmt->affected_rows;
}


function delete($table, $id){
    global $conexao;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['$id' => $id]);
    return $stmt->affected_rows;
}

// $data = [
//     'username' => 'Teste Luana Ferreira',
//     'admin'=> 1,
//     'email'=> 'lu@lu.com',
//     'password'=> 'lu123'
// ];

// $id = delete('users', 1);
// dd($id);
?>