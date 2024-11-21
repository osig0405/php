
<?php
function welcome(?string $name = null){
    if (is_null($name)){
        echo "welcome!<br/>";
    }else{
        echo "welcome $name!<br/>";
    }
}
?>
<?php
welcome("周聖傑");
welcome(null);
welcome();
?>