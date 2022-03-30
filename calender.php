<?php
      include "header.php";
    ?>
<br>


<?php
    $dayofweek = date("w");

    switch ($dayofweek) {
        case 1:
            echo "<p>it's Monday</p>";
            break;
        case 2:
            echo "<p>it's Tuesday</p>";
            break;
        case 3:
            echo "<h1>HUMPDAY!!! (it is wednesday my dudes)</h1>";
            break;
        case 4:
            echo "<p>it's Thursday</p>";
            break;
        case 5:
            echo "<p>friesday</p>";
            break;
        case 6:
            echo "<h1>S A T U R D A Y</h1>";
            break;
        case 0:
            echo "<p>Sunday funday</p>";
            break;
    }
?>



<?php
  include "footer.php";
?>
</body>
</html>