<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    if(!empty($username) && !empty($password))
    {
        if($username=='g211210028@sakarya.edu.tr' && $password=='g211210028')
        {
            echo "Hoşgeldiniz g211210028";
            
        }
        else
        {
            echo "Hatali Giris Yaptiniz";
            header("Refresh: 3; url=anagiris.html"); 
        }
    }
    else
    {
        echo "Kullanici Adi ve Sifrenizi giriniz";
        header("Refresh: 3; url=anagiris.html"); 
    }
 
  
}
