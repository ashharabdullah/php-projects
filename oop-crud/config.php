<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'oop-crud');

class Database_con
{
    public $databasehandle;

    function __construct()
    {
        $this->databasehandle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function insert($fname, $lname, $emailid, $contactno, $address)
    {
        $ret = mysqli_query($this->databasehandle, "insert into users(FirstName, LastName, EmailId, ContactNumber, Address) values('$fname', '$lname', '$emailid', '$contactno', '$address')");
        return $ret;
    }

    public function fetchdata()
    {
        $result = mysqli_query($this->databasehandle, "select * from users");
        return $result;
    }
    public function fetchonerecord($userid)
    {
        $oneresult = mysqli_query($this->databasehandle, "select * from users where id=$userid");
        return $oneresult;
    }
    public function update($fname, $lname, $emailid, $contactno, $address, $userid)
    {
        $updaterecord = mysqli_query($this->databasehandle, "update  users set FirstName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' where id='$userid' ");
        return $updaterecord;
    }

    public function delete($rid)
	{
	$deleterecord=mysqli_query($this->databasehandle,"delete from users where id=$rid");
	return $deleterecord;
	}

}
