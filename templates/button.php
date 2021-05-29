
<!-- $items = string[] -->
<!-- $links = string[] -->
<!-- $types = string[] -->

<div class="btn-group">
    <?php
        for($j = 0; $j < count($items); $j++){
            switch($types[$j]){
            case "primary":
                echo '<a href="'.$links[$j].'" class="btn btn-primary">'.$items[$j].'</a>';
                break;
            case "secondary":
                echo '<a href="'.$links[$j].'" class="btn btn-secondary">'.$items[$j].'</a>';
                break;
            case "danger":
                echo '<a href="'.$links[$j].'" class="btn btn-danger">'.$items[$j].'</a>';
                break;
            case "success":
                echo '<a href="'.$links[$j].'" class="btn btn-success">'.$items[$j].'</a>';
                break;
            }
        }
    ?>
</div>
