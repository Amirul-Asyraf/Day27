<?php
    function display_kevin($people, $items, $kevin_item) {
        echo "{$people} buys: <b>".$items[$kevin_item];
        echo "</b><br><br>";
    }

    function display_arwin($people, $items, $arwin_item) {
        echo "{$people} buys: <b>";

        foreach ($arwin_item as $item) {
            echo " | ".$items[$item];
            unset($items[$item]);
        }

        echo "</b><br>";

        //Arwin buys 3 other items
        $arwin_item = array_rand($items, 3);
        echo "{$people} buys other items: <b>";

        foreach ($arwin_item as $item) {
            echo " | ".$items[$item];
            unset($items[$item]);
        }

        echo "</b><br><br>";

        // Items left in store
        echo "Items left after Arwin's purchase: <b>";

        foreach ($items as $item) {
            echo " | ".$item;
        }
    }
?>