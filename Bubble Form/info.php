<?php 
    $name = array('Bisi', 'Bayo', 'Daniel', 'Segun', 'Muyiwa');
    $total = count($name);
    sort($name);

    // echo $name[4];
    for($i=0; $i<$total; $i++)
    {
        echo 'My name is '.$name[$i].'<br>';
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>