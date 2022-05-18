<!DOCTYPE html>

<head>

</head>

<body>

  <h2>List</h2>
  <ul>
    <?php

    $list = "shoes, tie,shirt, belt, shorts, blouse";

    $final_list = (explode(",", $list));

    //print_r($arry1);

    foreach ($final_list as $value) {
     
		$value = str_replace( ' ', '', $value);//use this line to remove the spaces on the text when the string is broken down at the comma level.

      echo "<li>$value</li> \n"; //\n to add a breakline for each list item.
    }

    ?>

  </ul>
</body>

</html>