<?php
function volume($length,$width=10,$height=15){
    print $length."x".$width."x".$height."= ";
    return $length * $width * $height;
}
?>
<?php
$l = 15;  $w = 20;  $h = 25;
print "盒子體積: ".volume($l, $w, $h)."<br/>";
print "盒子體積: ".volume($l, $w)."<br/>";
print "盒子體積: ".volume($l)."<hr/>";

print "盒子體積: ".volume(length : $l, width : $w)."<br/>";
print "盒子體積: ".volume(width : $w, length : $l, height : 20)."<br/>";
print "盒子體積: ".volume($l, height : 30, width : 5)."<br/>";
?>

