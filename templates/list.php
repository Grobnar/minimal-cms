<!-- 
    Another one that, like card.php, would require arrays to display in the editor.
 -->

<?php
    $list_items = [
        "Dolor etiam magna etiam.",
        "Sagittis lorem eleifend.",
        "Felis dolore viverra."
    ];
?>

<ul>
    <?php for($j = 0; $j < count($list_items); $j++){ ?>
        <li><?php echo $list_items[$j] ?></li>
    <?php } ?>
</ul>
