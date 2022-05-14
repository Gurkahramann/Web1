<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    if(!empty($username) && !empty($password))
    {
        if($username=='g211210028@sakarya.edu.tr' && $password=='g211210028')
        {
            echo "Hoşgeldiniz g211210028 Lütfen bekleyin ana sayfaya yönlendiriliyorsunuz";
            header("Refresh: 3; url=https://gurkahramanwebsite.netlify.app/index.html"); 
        }
        else
        {
            echo "Hatali Giris Yaptiniz";
            header("Refresh: 3; url=https://gurkahramanwebsite.netlify.app/anagiris.html"); 
        }
    }
    else if(empty($username))
    {
        echo "Lütfen Kullanıcı Adınızı Giriniz";
        header("Refresh: 3; url=https://gurkahramanwebsite.netlify.app/anagiris.html"); 
    }else if(empty($password))
    {
        echo "Lütfen Şifrenizi Giriniz";
        header("Refresh: 3; url=https://gurkahramanwebsite.netlify.app/anagiris.html"); 
    }else
    {
        echo "Lütfen Boş Bırakmayınız";
        header("Refresh:3; url=https://gurkahramanwebsite.netlify.app/anagiris.html");
    }
 
  
}
