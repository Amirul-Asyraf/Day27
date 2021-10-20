<html>
    <head></head>

    <body>
        <form action="" method="post">
                <select id="info" name="info">
                    <option name="name" value="name">What is your name?</option>
                    <option name="hobby" value="hobby">What is your hobby?</option>
                    <option name="club" value="club">What is your favourite club?</option>
                </select>
                <input type="text" name="answer">
                <input name= "submit" type="submit" value="Submit">
        </form>

        <?php
            $output = $_POST['answer'];

            if (isset ($_POST['submit'])) {
                if (!empty ($_POST['info'])) {
                    $selected = $_POST['info'];

                    switch ($selected) {
                        case 'name':
                            displayName($output);
                            break;
                        case 'hobby':
                            displayHobby($output);
                            break;
                        case 'club':
                            displayClub($output);
                            break;
                        default:
                            break;
                    }
                }
            }

            function displayName($output) {
                echo 'Your name is: '.$output;
            }

            function displayHobby($output) {
                echo 'Your hobby is: '.$output;
            }

            function displayClub($output) {
                echo 'Your favourite club is: '.$output;
            }
        ?>
    </body>
</html>