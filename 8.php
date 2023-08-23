<!DOCTYPE html>
<html lang="en">
<body>
    <?php
function myTest(){
echo $x;
    static $x = 0;
$x++;
}
    ?>
</body>
</html>