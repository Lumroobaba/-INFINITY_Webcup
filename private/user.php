<?php
    require_once 'autoload.php';
    class User{
        public function setUserid($userid){
            $this -> userid = $userid;
        }
        public function setUsername($username){
            $this -> username = $username;
        }
        public function setEmail($email){
            $this -> useremail = $email;
        }
        public function setPass($password){
            $this -> userpass = $password;
        }

        public function addUsers($username,$email,$password){
            $dbconn= new DBConn();
            //prepared statement
            $dbconn->query('INSERT INTO tbluser(username, useremail, userpass) VALUES(:username, :email, :pass)');
            //call bind method in DBHandlerclass
            $dbconn->bind(':username',$username);
            $dbconn->bind(':email',$email);
            $dbconn->bind(':pass', $password);
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
            $dbconn->query('SELECT * FROM tbluser WHERE useremail = :email');
            $dbconn->bind(':email', $this -> useremail);
            return $row =  $dbconn->resultset();
        }
    }
?>