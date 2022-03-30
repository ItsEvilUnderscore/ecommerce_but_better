<?php
      include "header.php";
    ?>
    <br>
    <form method="GET">
        <input type="text" name="thing">        <h3>Thing</h3><br>

        <input type="text" name="place">        <h3>Place</h3><br>

        <input type="text" name="transport">    <h3>Method of Transport</h3><br>

        <input type="text" name="place2">       <h3>Another Place</h3><br>

        <h5>Personally, I'd use "small town girl, lonely world, midnight train, anywhere". Just sayin. :)</h5>
        <button><h3>  Submit~  </h3></button>


        <br><br>

    <?php

        $thing = $_GET['thing'];
        $place = $_GET['place'];
        $transport = $_GET['transport'];
        $place2 = $_GET['place2'];

echo "\n";
        echo "Just a ". $thing. " living in a ". $place;
echo "\n";
        echo "Took the ". $transport. " going ". $place2;


    ?>



<?php
  include "footer.php";
?>
</body>
</html>