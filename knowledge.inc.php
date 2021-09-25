<?php
    echo "Сегодня - ".date("d F Y")."<br>";
    echo "Текущее время - ".date("H:i:s");
?>

<br>

<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>
<br>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>


<?php
$dsadfsd = "не определено";

if(isset($_POST["dsadfsd"])){
  
    $dsadfsd = $_POST["dsadfsd"];
}
echo "Chislo: $dsadfsd";
?>

