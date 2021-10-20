<html>
    <head></head>

    <body>
        <form action="" method="post">
            Name: <br><input type="text" name="name"><br>
            I/C No: <br><input type="text" name="ic"><br>
            Phone No: <br><input type="text" name="phone"><br><br>
            <input type="submit" name='submit' value="Display Info">
        </form>
<!-- 
        <form action="question2.php" method="post">
            <select id="opt" name="opt">
                <option value="select-option">Select Option</option>
                <option value="get-name">Display Name</option>
                <option value="get-ic">Display IC</option>
                <option value="get-mobile">Display Phone No.</option>
                <option value="get-all">Display All</option>
            </select>
            <input name= "choice" type="submit" value="Display All">
        </form> -->

        <?php
            $name = $_POST['name'];
            $ic = $_POST['ic'];
            $phone = $_POST['phone'];

            if(isset ($_POST['submit'])) {
                if ($name == null || $ic == null || $phone == null) {
                    echo "No information inputted. There is nothing to display.";
                } else {
                    displayInfo($name, $ic, $phone);
                }
                
            }

            function displayInfo($name, $ic, $phone) {
                echo $name."<br>";
                echo $ic."<br>";
                echo $phone."<br>";
            }
        ?>
    </body>
</html>