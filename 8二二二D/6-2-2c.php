<?php 
// 匯率換算函數
function rateExchange(int $amount, float $rate) : float {
   $result = $amount * $rate;
   return $result;
}
?>
<?php
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
?>