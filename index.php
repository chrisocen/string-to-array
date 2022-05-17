<!DOCTYPE html>
<head>

</head>
<body>

<h2>List</h2>
<ul>
<?php 

$list = "shoes, tie, shirt, belt, shorts, blouse";

$final_list =(explode(",",$list));

//print_r($arry1);

foreach ($final_list as $value) {
    echo "<li>$value</li>";
  }

?>

</ul>
</body>
</html>