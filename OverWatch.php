<?php
 require_once('./common/DbConnect.php');

class OverWatch {

    private $db;
    private $mysql;

 function __construct(){
   $this->db = new DbConnect;
   $this->mysql = $this->db->getdbconnect();
  }

public function getHeaders(){
    $sql = "select header,url from v49paqksf2uuhzyd.headers";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    $headersAndUrls = $result->fetchAll(PDO::FETCH_ASSOC);
    return $headersAndUrls;
}

public function getTodoListItems(){
    $sql = "select id, position, todoTitle, deleted from todos";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    $todos = $result->fetchAll(PDO::FETCH_ASSOC);
    return $todos;
}

public function submitTodo($todoTitle, $position){
    $sql = "INSERT INTO todos (todoTitle, position) VALUES (:todoTitle, :position)";
    $result = $this->mysql->prepare($sql);
    $result->execute(['todoTitle'=>$todoTitle,'position'=>$position]);
    return 'success';
}

public function deleteTodo($id){
    $sql = "UPDATE todos SET deleted = 1 where id = :id";
    $result = $this->mysql->prepare($sql);
    $result->execute(['id'=>$id]);
    return 'deleted';
}

public function getProducts(){
    $sql = "select product_name, price, sku from produce";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    $products = $result->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
}
