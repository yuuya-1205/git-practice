<!DOCTYPE html>
<html lang="ja">
  <meta charset="utf-8">
  
  <form id="number" method="post">
<p>fizzNum<input type="text" placeholder="整数値を入力してください" name="fizz"></p>
<p>buzzNum<input type="text" placeholder="整数値を入力してください" name="buzz"></p>
<input type="submit" name="submit" value="実行">
</form>
 


</html>





<?php


echo "<p>出力</p>\n";
echo "<p>";



$fizz = ($_POST['fizz']);
$buzz = ($_POST['buzz']);
if($fizz == 0 && $buzz == 0) {
echo '1以上の整数を入力して下さい';
return;
} elseif(ctype_digit($fizz) && ctype_digit($buzz))
{
for($i=1; $i < 100; $i++) {
if($i % $fizz === 0 && $i % $buzz === 0) {
echo '<br>' . $i . 'FizzBuzz';
} elseif($i % $fizz === 0) {
echo '<br>' . $i . 'Fizz';
} elseif($i % $buzz === 0) {
echo '<br>' . $i . 'Buzz';
}
}
} else {
echo '小数点が含まれてます';
}

 
