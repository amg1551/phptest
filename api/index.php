<?php
$servername = "if0_34666594_setra";
$host = "sql305.infinityfree.com";
$username = "if0_34666594";
$password = "GelgElgJzAyc";
$baglanti = mysqli_connect($host,$username,$password);

if($baglanti)
{

    echo "baglanti saglandi";

}

mysqli_select_db($baglanti,$servername) or die ("olmadi uzdu") ;



?>

<form method="post" action="">
<h1>Kullanıcı adı: </h1>
<input type="text" name="ad">
<h1>sifre: </h1>
<input type="text" name="sifre">
<input type="submit" name="buton">

</form>

<?php
if(isset($_POST["buton"]))
{
    $sql="insert into isimler(ad)values('".$_POST["ad"]."')";
    $sql2="insert into isimler(sifre)values('".$_POST["sifre"]."')";
    
    $sonuc= mysqli_query($baglanti,$sql);
    $sonuc= mysqli_query($baglanti,$sql2);

}



?>