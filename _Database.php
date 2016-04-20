<?php


   // Deleta Registros

    function DBDelete($table, $id){

        $query = "DELETE FROM {$table} WHERE id=$id ";
        return DBExecute($query);

    }
    // Ler registros
    function DBLer($table, $params = null, $fields ='*'){
        $table = $table;
        $params = ($params) ? "{$params}":null;
        $query = "SELECT {$fields} FROM {$table}";
        $result = DBExecute($query);


        if(!mysqli_num_rows($result))
            return array();
        else {
            while ($res = mysqli_fetch_assoc($result)){
                $data[] = $res;
            }

            return $data;
        }
    }
    // Grava registros

    function DBCreate($table, array $data){
        $table = $table;
        $fields = implode(',',array_keys($data));
        $values = "'".implode("','",$data)."'";
        $query="INSERT INTO {$table} ({$fields}) VALUES ({$values})";
        return DBExecute($query);
    }

    // Grava registros
    //
    function DBverifica($email, $senha){

        $query = "SELECT * FROM usuario WHERE email= '$email' and senha='$senha'";
        return DBExecute($query);

    }


// executa Querys
    function DBExecute($query){

        $link = DBConnect();

        $result = mysqli_query($link, $query) or die (mysqli_error($link));


        DBClose($link);
        return $result;

    }

