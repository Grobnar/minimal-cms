
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <title><?php echo $title ?></title>
	<link rel="icon" type="image/png" href=<?php echo $favicon ?> />


    <!-- Base Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="files/custom.css" />

</head>
<body>
    <!-- Editor wraps around the loading of the page's blocks -->
    <?php if ($admin) { ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-sm-8" style="height: 100vh; overflow-y: scroll;">
    <?php } ?>

    <div class="container" style="min-height: 100vh;">
        <?php
            // Load in blocks
            foreach ($view->blocks as $block)
                include "templates/" . $block->template;
        ?>
    </div>
    
    <?php if ($admin) { ?>
                </div>
                <div class="col-lg-3 col-sm-4" style="background-color:black; height:100vh; overflow-y:scroll;">
                    <?php
                        if($request["mode"] == "sitemap")
                            require_once "editor/sitemap.php";
                        else if($request["mode"] == "view"){
                            if($request["index"] != NULL)
                                require_once "editor/block-editor.php";
                            else
                                require_once "editor/view-editor.php";
                        }
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
