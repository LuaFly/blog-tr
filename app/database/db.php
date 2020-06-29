<?php 

require('conexao.php');

function dd($value){ //deletar após desenvolvimento
    echo "<pre>", print_r($value, true), "</pre>";
    die();
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
?>