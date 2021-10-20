<?php
    // Lists all items
    // echo "Items in shop: <b>";

    // foreach ($items as $item) {
    //     echo " | ".$item;
    // }

    // echo "</b><br><br>";

    function kevin($people, $items) {
        // Kevin buys 1 item
        $kevin_item = array_rand($items, 1);

        display_kevin($people, $items, $kevin_item);


    }

    function arwin($people, $items) {
        $arwin_item = array_rand($items, 3);

        $updated_list = display_arwin($people, $items, $arwin_item);
        return $updated_list;
    }
?>