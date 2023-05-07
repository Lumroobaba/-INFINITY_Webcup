<?php
    require_once 'conn.php';
    class Users{
        public function setUserid($userid){
            $this -> userid = $userid;
        }
        public function setUsername($username){
            $this -> username = $username;
        }
        public function setUseremail($useremail){
            $this -> useremail = $useremail;
        }
        public function setUserpass($userpass){
            $this -> userpass = $userpass;
        }

        public function addUsers($username,$useremail,$userpass){
            $dbconn= new DBConn();
            //prepared statement
            $dbconn->query('INSERT INTO tbluser(username, useremail, userpass) VALUES(:username, :email, :pass)');
            //call bind method in DBHandlerclass
            $dbconn->bind(':username',$username);
            $dbconn->bind(':email',$useremail);
            $dbconn->bind(':pass', $userpass);
            //execute prepared statement
            $dbconn->execute();
        }

        public function retrieveUsers(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT * FROM tbluser');
            return $row =  $dbconn->resultset();
        }

        public function retrieveEmail(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT * FROM tbluser WHERE useremail = :useremail');
            $dbconn->bind(':useremail', $this -> useremail);
            return $row =  $dbconn->resultset();
        }
    }
?>