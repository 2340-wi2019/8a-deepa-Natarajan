<?php

include "includes/header.php";
$weight=150;
$age=50;
$first_name="Johny";
$last_name="Doughy";

function poundsToKg ($pound){

    return $pound *(1/2.2);
}

$KgWeight=poundsToKg($weight);



?>

<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $first_name;?> <?php echo $last_name;?>!</p>
<p>I am <?php echo $age;?> yeras old.I weigh <?php echo $weight;?> pounds, which is <?php echo $KgWeight;?> Kg !</p>

</body>

<?php

include "includes/footer.php";

?>