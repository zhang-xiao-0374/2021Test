<?php
    $value=(int)$value;
    $res=($value%2==0)? '$valueは偶数' : '$value は奇数 ';
    echo $res;
?>

<form action="index.php" method="post">
<h2>値を入力ください</h2>
    <input type="text" name="value" value="">
    <button >SEND</button>
</form>
   
