
<div class="d-flex flex-column" style="height: 100%;">
    <div class="p-2 flex-grow-1 rounded" style="background-color: #dddddd;">
        <!-- BREADCRUMBS -->
        <?php
            $items = ["Sitemap"];
            $links = ["/sitemap"];
        ?>
        <?php include "templates/breadcrumbs.php"; ?>

        <!-- Sitemap list of pages -->
        <?php
            for($i = 0; $i < count($views); $i++){
                $pages[$i] = $views[$i]->title;
                $links[$i] = $views[$i]->route."?u=admin&m=sitemap";
            }
            $list_items = $pages;
            $list_links = $links;
            $current_item = $page_index;
        ?>
        <?php include "templates/action-list.php"; ?>
    </div>
    <?php
    // BUTTONS
    // Add Page, Edit, Delete and Log Out
        $items = [
            "Add Page",
            "Edit",
            "Delete",
            // Log Out simply removes the user info from the get request
            "Log Out"
        ];
        $links = [
            "?u=admin&m=sitemap&f=newpage",
            "?u=admin&m=view",
            "?u=admin&m=sitemap&f=deletepage",
            "?"
        ];
        $types = [
            "primary",
            "success",
            "danger",
            "secondary"
        ];
    ?>
    <div class="p-2"><?php include "templates/button.php"; ?></div>
</div>
