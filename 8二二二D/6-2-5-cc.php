
<?php
function welcome(?string $name): ?string{
    if (is_null($name)){
        return null;
    }else{
        return "welcome $name!<b/>";
    }
}
?>
<?php
echo welcome("周聖傑");
echo welcome(null);
?>