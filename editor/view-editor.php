
<div class="d-flex flex-column" style="height: 100%;">
    <div class="p-2 flex-grow-1 rounded" style="background-color: #dddddd;">    
        <?php
        // BREADCRUMBS
            $items = ["Sitemap", $title];
            $links = ["?u=admin&m=sitemap", "?u=admin&m=view"];
            include "templates/breadcrumbs.php";


        // Title and Route editing fields
            $btn_text = "Save Changes";
            $action = "?u=admin&m=view&f=editpage";
            $labels = ["Title", "Route"];
            $names = $labels;
            $input_types  = ["string", "string"];
            $input_values = [$title, $view->route];
            $input_placeholders = ["...", "/..."];
            $editable = [true, true];
            include "templates/view-form.php";

            include "templates/seperator.php";

            // List of Blocks
            for($i = 0; $i < count($view->blocks); $i++){
                $list_items[$i] = $view->blocks[$i]->name;
                $list_links[$i] = "?u=admin&m=view&i=".$i;
                $btn_items[$i] = ["Delete", "Edit"];
                $btn_links[$i] = ["?u=admin&m=view&i=".$i."&f=deleteblock", "?u=admin&m=view&i=".$i];
                $btn_types[$i] = ["btn-danger", "btn-warning"];
            }
            include "templates/action-list2.php";
        ?>
    </div>

    <?php
    // BUTTONS
    // Add Block and Return to Sitemap.
        $items = [
            "Add Block",
            "Return To Sitemap"
        ];
        $links = [
            "?u=admin&m=view&f=newblock",
            "?u=admin&m=sitemap"
        ];
        $types = [
            "primary",
            "secondary"
        ];
    ?>
    <div class="p-2"><?php include "templates/button.php"; ?></div>
</div>
