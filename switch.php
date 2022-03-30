<?php
      include "header.php";
    ?>

<br>
<form>  
        <select name="chorus">
            <option>Choose One...</option>
            <option>first</option>
            <option>second</option>
            <option>third</option>
            <option>fourth</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">the big red button</button>
    </form>
    <?php
        if (isset($_GET['submit'])) {

                $line = $_GET['chorus'];

            switch ($line) {
                case "Choose One...": 
                    echo "dont stop believin";
                break;
                case "first": 
                    echo "just a small town girl";
                break;
                case "second": 
                    echo "livin in a lonely worrld";
                break;
                case "third": 
                    echo "she took the midnight train";
                break;
                case "fourth": 
                    echo "going anyyywwheerreeee";
                break;
                default:
                    echo "dont stop believin";
            }
        }

            //      i took some pointers from the calculator file, and i made this. it still qualifies as a switch right? if it doesnt ill redo it lol      

    ?>



<?php
  include "footer.php";
?>
</body>
</html>