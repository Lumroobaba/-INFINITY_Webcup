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

        public function countUsername(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT COUNT(*) as count FROM tbluser WHERE username = :username');
            $dbconn->bind(':username', $this -> username);
            return $row =  $dbconn->resultset();
        }
        
        public function countUseremail(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT COUNT(*) as count FROM tbluser WHERE useremail = :useremail');
            $dbconn->bind(':useremail', $this -> useremail);
            return $row =  $dbconn->resultset();
        }

        public function addUser($userimage,$username,$email,$password,$userotp,$status){
            $dbconn= new DBConn();
            //prepared statement
            $dbconn->query('INSERT INTO tbluser(userimage, username, useremail, userpass, userotp, status, usertype) VALUES(:userimage, :username, :email, :pass, :userotp, :status, :usertype)');
            //call bind method in DBHandlerclass
            $dbconn->bind(':userimage',$userimage);
            $dbconn->bind(':username',$username);
            $dbconn->bind(':email',$email);
            $dbconn->bind(':pass', $password);
            $dbconn->bind(':userotp', $userotp);
            $dbconn->bind(':status', $status);
            $dbconn->bind(':usertype', 0);
            //execute prepared statement
            $dbconn->execute();
        }

        public function retrieveUsers(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT * FROM tbluser');
            return $row =  $dbconn->resultset();
        }

        public function retrieveUsername(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT * FROM tbluser WHERE username = :username');
            $dbconn->bind(':username', $this -> username);
            return $row =  $dbconn->resultset();
        }
        
        public function retrieveUseremail(){
            $dbconn = new DBConn();
            $dbconn->query('SELECT * FROM tbluser WHERE useremail = :useremail');
            $dbconn->bind(':useremail',  $this -> useremail);
            return $row =  $dbconn->resultset();
        }
        
        public function verifyUser($status){
            $database = new DBConn();
            $database->query('UPDATE tbluser SET status = :status WHERE useremail = :useremail');
            $database->bind(':useremail',$this -> useremail);
            $database->bind(':status', $status);
            $database->execute();
        }
        
        public function sendUserotp($userotp){
            $database = new DBConn();
            $database->query('UPDATE tbluser SET userotp = :userotp WHERE useremail = :useremail');
            $database->bind(':useremail',$this -> useremail);
            $database->bind(':userotp', $userotp);
            $database->execute();
        }

        public function updateUser(){
            $database = new DBConn();
            $database->query('UPDATE tbluser SET userimage = :userimage, username= :username, useremail= :email WHERE userid = :userid');
            $database->bind(':userid',$this -> userid);
            $database->bind(':userimage',$this -> userimage);
            $database->bind(':username',$this -> username);
            $database->bind(':email',$this -> useremail);
            $database->execute();
        }

        public function sendMessage($firstname, $lastname, $email, $mobile, $message){
            $dbconn= new DBConn();
            $dbconn->query('INSERT INTO tblmessage(firstname, lastname, email, mobile, message) VALUES(:firstname, :lastname, :email, :mobile, :message)');
            $dbconn->bind(':firstname', $firstname);
            $dbconn->bind(':lastname', $lastname);
            $dbconn->bind(':email', $email);
            $dbconn->bind(':mobile', $mobile);
            $dbconn->bind(':message', $message);
            $dbconn->execute();
        }
    }
    }
?>