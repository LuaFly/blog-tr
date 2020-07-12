<?php 

require('conexao.php');

function dd($value){ //deletar após desenvolvimento
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

<<<<<<< HEAD
function executeQuery($sql, $data){
    global $conexao;
    $stmt= $conexao-> prepare($sql);
    $values=array_values($data);
    $types= str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;

}


=======
>>>>>>> 59c850114c05fe0364830466b3e39e760ebe7ead
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
<<<<<<< HEAD
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
    $sql = "INSERT INTO users SET ";

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

$data = [
    'username' => 'Luana Ferreira',
    'admin'=> 1,
    'email'=> 'lu@lu.com',
    'password'=> 'lu123'
];

$id = create('users', $data);
dd($id);
=======
    
        $i = 0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . "WHERE $key=$value";
            }else{
                $sql = $sql . "AND $key=$value";
            }
            $i++;
        }
        dd($sql);
    
    }
   
}
$conditions = [
    'admin' =>1,
    'username'=> 'Luana'
];

$users = selectAll('users', $conditions);
dd($users);
>>>>>>> 59c850114c05fe0364830466b3e39e760ebe7ead
?>