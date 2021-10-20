<html>
    <head></head>

    <body>
        <?php

            // $student = ['Fikri', 'Arwin', 'Zhafri', 'Chee Hoe'];
            // $subject = ['English', 'Maths'];
            // $grades = ['A', 'B', 'C', 'D', 'E', 'F'];
            // $class = [$student, $subject, $grades];

            // echo "Student: ".$class[0][0]."<br>";
            // echo "Subject: ".$class[1][0]."<br>";
            // echo "Grades:";
            // for ($i=0; $i < sizeof($class[2]); $i++) {
            //     echo " ".$class[2][$i];
            // }

            include 'item.php';
            include 'display.php';

            $people = ['Kevin', 'Arwin'];
            $items = ['toilet paper', 'toothbrush', 'toothpaste', 'mouth wash', 'floss', 'mirror', 'comb', 'soap'];
            
            // Lists all items
            echo "Items in shop: <b>";

            foreach ($items as $item) {
                echo " | ".$item;
            }

            $list_items = $items;

            echo "</b><br><br>";

            kevin($people[0], $items);
            arwin($people[1], $items);

            /*
            // Kevin buys 1 item
            $kevin_item = array_rand($items, 1);
            echo "{$people[0]} buys: <b>".$items[$kevin_item];
            unset($items[$kevin_item]);

            echo "</b><br><br>";
            
            // Items left after Kevin's purchase
            echo "Items left after Kevin's purchase: <b>";

            foreach ($items as $item) {
                echo " | ".$item;
            }

            echo "</b><br><br>";

            // // Arwin buys 3 items
            $arwin_item = array_rand($items, 3);
            echo "{$people[1]} buys: <b>";

            foreach ($arwin_item as $item) {
                echo " | ".$items[$item];
                unset($items[$item]);
            }
            var_dump($items);

            echo "</b><br>";

            Arwin buys 3 other items
            $arwin_item = array_rand($items, 3);
            echo "{$people[1]} buys other items: <b>";

            foreach ($arwin_item as $item) {
                echo " | ".$items[$item];
                unset($items[$item]);
            }
            var_dump($items);


            echo "</b><br><br>";

            // Items left in store
            echo "Items left after Arwin's purchase: <b>";

            foreach ($list_items_final as $item) {
                echo " ".$item;
            } */
        ?>
        
    </body>
    
</html>

