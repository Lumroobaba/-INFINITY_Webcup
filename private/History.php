<?php
class dreams{
    public function checkDream($dbconn){
        $dbconn->query('SELECT * FROM tblhistory');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    }

    
    public function addDreams($descriptions,$prediction){
        $dbconn= new DBConn();
        //prepared statement 
        $dbconn->query('INSERT INTO tblhistory(descriptions,prediction) VALUES( :descriptions,:prediction)');
        //call bind method in DBHandlerclass
        $dbconn->bind(':descriptions',$descriptions); 
        $dbconn->bind(':prediction',$prediction); 
        //execute prepared statement
        $dbconn->execute();
    }
}

    
require './private/conn.php';

$dbconn = new DBConn();
$checkDream = new dreams();
$listDreams = $checkDream->checkDream($dbconn);
