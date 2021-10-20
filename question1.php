<html>
    <head></head>

    <body>
        Star Arrangment:
        <form action="" method="post">
            <select id="stars" name="stars">
                <option value="half-stars">Half Stars</option>
                <option value="full-stars">Full Stars</option>
            </select>
            <input name= "submit" type="submit" value="Choose Option">
        </form>
        

        <?php
            

            if (isset ($_POST['submit'])) {
                if (!empty ($_POST['stars'])) {
                    $selected = $_POST['stars'];

                    switch ($selected) {
                        case 'half-stars':
                            half_stars();
                            break;
                        case 'full-stars':
                            full_stars();
                            break;
                        default:
                            break;
                    }
                }
            }

            function half_stars() {
                for ($i=1; $i<=5; $i++) {
                    for ($j=1; $j<=$i; $j++) {
                        echo "*";
                    }  
    
                    echo "<br>";
                }
    
                // Space between patterns
                echo "<br>";
            }

            function full_stars() {
                for ($i=1; $i<=5; $i++) {
                    for ($j=1; $j<=$i; $j++) {
                        echo "*";
                    }  
    
                    echo "<br>";
                }
    
                for ($i=1; $i<=5; $i++) {
                    for ($j=5; $j>=$i; $j--) {
                        echo "*";
                    }
    
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>