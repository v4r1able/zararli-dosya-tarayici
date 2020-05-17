<html>
<head>
<title>Zararlı Dosya Tarayıcı - V4R1ABLE - T13R - OBIR.NINJA</title>
</head>
<body>
<center>
<form action="" method="POST">
<img src="https://i1.wp.com/obir.ninja/wp-content/uploads/2020/01/01c2931c38911a33fdec2b53b9f2bdc5-1.png?w=315&ssl=1"><br>
Dizin (boş bırakırsanız bulunduğunuz dizin tarar) : <br><input type="text" name="dizin" value="<?php echo dirname( __FILE__ ); ?>"><br>
<button type="submit" name="v4t1_post">Dosyaları Tara</button>
</form>
<?php
// v4r1able - t13r - obir.ninja
error_reporting(0);

if(isset($_POST["v4t1_post"])) {

echo 'Taranan dizin : '.htmlspecialchars($_POST["dizin"])."<br><br>";

function dosya_kontrol_v4($dosya_v4, $icerik_v4) {

if(strstr($icerik_v4, "Obfuscation provided by FOPO")) {
echo $dosya_v4." - FOPO ile şifrelenmiş.<br>";
}

if(strstr($icerik_v4, "eval(")) {
echo $dosya_v4." - EVAL işlemi kullanılmış.<br>";
}

if(strstr($icerik_v4, "file_get_contents")) {
echo $dosya_v4." - file_get_contents fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "system(")) {
echo $dosya_v4." - system fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "exec(")) {
echo $dosya_v4." - exec fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "passthru(")) {
echo $dosya_v4." - passthru fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "shell_exec(")) {
echo $dosya_v4." - shell_exec fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "str_rot13(")) {
echo $dosya_v4." - str_rot13 fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "fwrite(")) {
echo $dosya_v4." - fwrite fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "fopen(")) {
echo $dosya_v4." - fopen fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "file_put_contents(")) {
echo $dosya_v4." - file_put_contents fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "fputs(")) {
echo $dosya_v4." - fputs fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "base64_decode(")) {
echo $dosya_v4." - base64_decode fonksiyonu kullanılmış.<br>";
}

if(strstr($icerik_v4, "shell")) {
echo $dosya_v4.' - dosyada "shell" kelimesi geçiyor.<br>';
}

}

if(empty($_POST["dizin"])) {
$dizin_v4 = opendir(".");
} else {
$dizin_v4 = opendir($_POST["dizin"]);
}

while (($dosya_v4 = readdir($dizin_v4)) !== false)

{ 
if(! is_dir($dosya_v4)){ 

if(empty($_POST["dizin"])) {
$icerik_cek_v4 = file_get_contents($dosya_v4);
} else {
$icerik_cek_v4 = file_get_contents($_POST["dizin"]."/".$dosya_v4);
}

dosya_kontrol_v4($dosya_v4, $icerik_cek_v4);

} 

}

closedir($dizin_v4);

}

?>
</center>
</body>
</html>
