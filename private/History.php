<?php
class dreams{
    public function checkDream($dbconn){
        $dbconn->query('SELECT * FROM tblhistory');
        $dbRows= $dbconn->resultset();
        return $dbRows;
    }}



    
require './private/conn.php';

$dbconn = new DBConn();
$checkDream = new dreams();
$listDreams = $checkDream->checkDream($dbconn);
?>