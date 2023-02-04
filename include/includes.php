<?php
    $title = 'includes';
    include('./inc/header.php');
    require_once('./inc/functions.php');
    $guitar = [
        ['name' => 'Vela', 'manufacturer' => 'PRS'],
        ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
        ['name' => 'Strat', 'manufacturer' => 'Fender']
    ];

    $guitar_names = pluck($guitar, 'name');
?>

<body>
    <?php 
        output($guitar_names);
        echo "<br>".sum(9,8);
    ?>
</body>

<?php

    include('./inc/footer.php');

?>