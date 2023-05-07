<?php
class dreams{
    public function checkDream($dbconn){
        $dbconn->query('SELECT * FROM tblhistory');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    }

    public function addDreams($descriptions)
    {
        $dbconn = new DBConn();
        //prepared statement 
        $dbconn->query('INSERT INTO tblhistory(descriptions) VALUES( :descriptions)  ');
        //call bind method in DBHandlerclass
        $dbconn->bind(':descriptions', $descriptions); 
        //execute prepared statement
        $dbconn->execute();
    }
 
}

class account{
    public function checkAcc($dbconn){
        $dbconn->query('SELECT * FROM tbluser');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    } 
}

    
require './private/conn.php';

$dbconn = new DBConn();
$checkDream = new dreams();
$listDreams = $checkDream->checkDream($dbconn);


$dbconn = new DBConn();
$checkacc = new account();
$checkacc = $checkacc->checkAcc($dbconn);
