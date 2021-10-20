<html>
    <head></head>

    <body>
        <?php
            $students = ['kevin', 'amir', 'azizi', 'amirul'];
            echo "Before Adding Names: ";
            foreach ($students as $student) {
                echo $student." ";
            }

            array_push($students, 'arjun');
            echo "<br>After Adding Names: ";
            foreach ($students as $student) {
                echo $student." ";
            }
        ?>
    </body>
</html>