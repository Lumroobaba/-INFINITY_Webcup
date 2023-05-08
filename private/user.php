<?php
require_once 'conn.php'; 
class Users
{
    public function setUserid($userid)
    {
        $this->$userid = $userid;
    }
    public function setUsername($username)
    {
        $this->$username = $username;
    }
    public function setUseremail($useremail)
    {
        $this->$useremail = $useremail;
    }
    public function setUserpass($userpass)
    {
        $this->$userpass = $userpass;
    }


    public function addUsers($username, $email, $password)
    {
        $dbconn = new DBConn();
        //prepared statement 
        $dbconn->query('INSERT INTO tbluser(username, useremail, userpass) VALUES( :username, :useremail, :userpass)  ');
        //call bind method in DBHandlerclass
        $dbconn->bind(':username', $username);
        $dbconn->bind(':useremail', $email);
        $dbconn->bind(':userpass', $password);
        //execute prepared statement
        $dbconn->execute();
    }
    public function retrieveUsers()
    {
        $dbconn = new DBConn();
        $dbconn->query('SELECT * FROM tbluser');
        return $row =  $dbconn->resultset();
    }
    public function userProfile($email)
    {
        $dbconn = new DBConn();
        $dbconn->query('SELECT * FROM tbluser WHERE username = :email');
        $dbconn->bind(':username', $this->$email);
        return $row =  $dbconn->resultset();
    }

    public function retrieveUsername($username)
    {
        $dbconn = new DBConn();
        $dbconn->query('SELECT * FROM tbluser WHERE username = :username');
        $dbconn->bind(':username', $this->$username);
        return $row =  $dbconn->resultset();
    }

    public function retrieveUseremail($useremail)
    {
        $dbconn = new DBConn();
        $dbconn->query('SELECT * FROM tbluser WHERE useremail = :email');
        $dbconn->bind(':email', $this->$useremail);
        return $row =  $dbconn->resultset();
    }

    public function verifyUser($status, $useremail)
    {
        $database = new DBConn();
        $database->query('UPDATE tbluser SET status = :status WHERE useremail = :useremail');
        $database->bind(':useremail', $this->$useremail);
        $database->bind(':status', $status);
        $database->execute();
    }

    public function sendUserotp($userotp, $useremail)
    {
        $database = new DBConn();
        $database->query('UPDATE tbluser SET userotp = :userotp WHERE useremail = :useremail');
        $database->bind(':useremail', $this->$useremail);
        $database->bind(':userotp', $userotp);
        $database->execute();
    }

    public function updateUser(
        $userid,
        $userimage,
        $username,
        $useremail
    ) {
        $database = new DBConn();
        $database->query('UPDATE tbluser SET userimage = :userimage, username= :username, useremail= :email WHERE userid = :userid');
        $database->bind(':userid', $this->$userid);
        $database->bind(':userimage', $this->$userimage);
        $database->bind(':username', $this->$username);
        $database->bind(':email', $this->$useremail);
        $database->execute();
    }

    public function sendMessage($firstname, $lastname, $email, $mobile, $message)
    {
        $dbconn = new DBConn();
        $dbconn->query('INSERT INTO tblmessage(firstname, lastname, email, mobile, message) VALUES(:firstname, :lastname, :email, :mobile, :message)');
        $dbconn->bind(':firstname', $firstname);
        $dbconn->bind(':lastname', $lastname);
        $dbconn->bind(':email', $email);
        $dbconn->bind(':mobile', $mobile);
        $dbconn->bind(':message', $message);
        $dbconn->execute();
    }
}
