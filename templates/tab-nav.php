
<!-- Automatically grabs all page links, except the default /404 page -->
<?php
    $list_items = [];
    $list_links = [];
    $current_item = -1;
    $counter = 0;
    for($j = 0; $j < count($views); $j++){
        if($views[$j]->route != "/404"){
            array_push($list_items, $views[$j]->title);
            array_push($list_links, $views[$j]->route);
            if ($j == $page_index)
                $current_item = $counter;
            $counter++;
        }
    }
?>

<!-- 
    $list_items = string[];
    $list_links = string[];
    $current_item = int;
 -->

<ul class="nav nav-tabs">
    <?php
        for($j = 0; $j < count($list_items); $j++){
            if ($j == $current_item)
                echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="'.$list_links[$j].'">'.$list_items[$j].'</a></li>';
            else echo '<li class="nav-item"><a class="nav-link" href="'.$list_links[$j].'">'.$list_items[$j].'</a></li>';
        }
    ?>
</ul>
