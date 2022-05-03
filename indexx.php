<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=='g211210028@sakarya.edu.tr' && $password=="g211210028")
    {
        echo ("Hoşgeldiniz g211210028");
    }
    else
    {
        echo("Hata! Lutfen tekrar deneyiniz!");
    }
}
