
<!-- 
    $list_items = string[];
    $list_links = string[];
    $btn_items = string[][];
    $btn_links = string[][];
    $btn_types = string[][];
 -->

<?php for($j = 0; $j < count($view->blocks); $j++) { ?>
    <div class="btn-toolbar mb-0" role="toolbar">
        <div class="list-group flex-fill">
            <a href="<?php echo $list_links[$j] ?>" class="list-group-item list-group-item-action"><?php echo $list_items[$j] ?></a>
        </div>
        <div class="btn-group mr-2" role="group">
            <?php for($k = 0; $k < count($btn_items[$j]); $k++) { ?>
                <a href="<?php echo $btn_links[$j][$k] ?>" class="btn <?php echo $btn_types[$j][$k] ?>"><?php echo $btn_items[$j][$k] ?></a>
            <?php } ?>
        </div>
    </div>
<?php } ?>
