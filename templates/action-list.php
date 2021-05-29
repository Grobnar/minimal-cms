
<!-- 
    $list_item = string[];
    $list_links = string[];
    $current_item = int;
 -->

<div class="list-group flex-fill">
    <?php
        for($j = 0; $j < count($list_items); $j++) {
            if ($j == $current_item)
                echo '<a href="'.$list_links[$j].'" class="list-group-item list-group-item-action active" aria-current="true">'.$list_items[$j].'</a>';
            else echo '<a href="'.$list_links[$j].'" class="list-group-item list-group-item-action">'.$list_items[$j].'</a>';
        }
    ?>
</div>
