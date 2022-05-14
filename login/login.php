

<?php



if(($_POST["email"]=="b211210044@sakarya.edu.tr")&&($_POST["sifre"]=="b211210044")){
    echo "HOŞGELDİN ALI"." ";
    header("Refresh: 3; url=http://localhost/anasayfa.html");
}
else{

    header("location:http://localhost/login.html");
}

?>
