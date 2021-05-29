<!-- Automatically grabs all page links, except the default /404 page -->
<?php
    $link_title = [];
    $link_href = [];
    foreach($views as $v){
        if($v->route != "/404"){
            array_push($link_title, $v->title);
            array_push($link_href, $v->route);
        }
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarExample01">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php for ($j = 0; $j < count($link_title); $j++) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $link_href[$j] ?>"><?php echo $link_title[$j] ?></a>
            </li>
        <?php } ?>
    </ul>
    </div>
</div>
</nav>
