<?php
$name = array('Bisi', 'Bayo', 'Segun', 'Muyiwa', 'Tolani', 'Gbenga');

$name[] = 'Gloria';
$name[] = 'Bolu';
$name[] = 'Lu';

$total = count($name);
// sort($name);

for($i=0; $i<$total; $i++)
{
    echo 'My name is '.$name[$i].'<br>';
}
?>
