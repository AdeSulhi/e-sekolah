<?php

$error=''; 

include "config/koneksi.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = sha1($_POST['password']);
    
                    
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username atau Password salah!";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "Administrator")
        {
            
            header("Location: admin/index.php");
        }
        else if($row['level'] =="Guru")
        {
            header("Location: guru/dashboard.php");
        }
        else if($row['level'] == "Siswa")
        {
            
            header("Location: siswa/dashboard.php");
        }
        else
        {
            $error = "Failed Login";
        }
    }
}           
?>