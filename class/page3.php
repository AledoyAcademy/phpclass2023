<?php
$name = array('banner1.jpg', 'banner2.jpg', 'banner3.jpg');
shuffle($name);
echo '<img src="images/'.$name[0].'">';


for($i=0; $i<$total; $i++)
{
    echo 'My name is '.$name[$i].'<br>';
}
?>
