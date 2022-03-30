<?php
      include "header.php";
    ?>
<br>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate~</button>
    </form>
    <h3>The answer is:</h3>
    <?php
        if (isset($_GET['submit'])) {
            $ans1 = $_GET['num1'];
            $ans2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None": 
                    echo "choose a thing please...";
                break;
                case "Add": 
                    echo $ans1 + $ans2;
                break;
                case "Subtract": 
                    echo $ans1 - $ans2;
                break;
                case "Multiply": 
                    echo $ans1 * $ans2;
                break;
                case "Divide": 
                    echo $ans1 / $ans2;
                break;
            }
        }
    ?>


<?php
  include "footer.php";
?>
</body>
</html>