<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "jobfinder";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }


    function register($username, $password, $email, $location, $no, $birthdate ,$Degree ,$University ,$Bio)
    {
        $insert = mysqli_query($this->koneksi, "insert into users values ('$username','$password','$email','$location','$no','$birthdate','$Degree','$University','$Bio')");
        return $insert;
    }

    function login($username, $password)
    {
        $query = mysqli_query($this->koneksi, "select * from users where username='$username'");
        $data_user = $query->fetch_array();
        if ($data_user['password'] == $password) {
            $_SESSION['username'] = $username;
            return TRUE;
        }
    }

    function changePassword($username, $password, $newPassword)
    {
        $query = mysqli_query($this->koneksi, "select * from users where username='$username'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['password'])) {
            $insert = mysqli_query($this->koneksi, "update users set password = '$newPassword' where username='$username'");
            return $insert;
        }
    }

    function UpdateProfile($username,$password,$email,$location,$no,$birthdate,$Degree,$University,$Bio)
    {
        $query = mysqli_query($this->koneksi, "select * from users where username='$username'");
        $data_user = $query->fetch_array();
        $insert = mysqli_query($this->koneksi, "update users set password = '$password',email = '$email', location = '$location',$no = '$no',birthdate = '$birthdate',Degree = '$Degree',University = '$University' , where username='$username'");
        return $insert;
    }


    function postJob($title, $company, $jobLocation, $employmentTipe, $pictureJob)
    {
        $insert = mysqli_query($this->koneksi, "insert into datajob values ('$title','$company','$jobLocation','$employmentTipe','$pictureJob')");
        return $insert;
    }

    function deleteAccount($username, $password)
    {
        $query = mysqli_query($this->koneksi, "select * from tb_user where email='$username'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['password'])) {
            $del = mysqli_query($this->koneksi, "delete from tb_user where email='$username'");
            return $del;
        }
    }
}
