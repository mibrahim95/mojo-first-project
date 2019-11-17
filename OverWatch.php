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
    $sql = "select header,url from headers";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    $headersAndUrls = $result->fetchAll(PDO::FETCH_ASSOC);
    return $headersAndUrls;
}
public function getTodoListItems(){
    $sql = "select position, todoTitle from todos";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    $todos = $result->fetchAll(PDO::FETCH_ASSOC);
    return $todos;
}

}
