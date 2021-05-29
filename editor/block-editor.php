
<div class="d-flex flex-column" style="height: 100%;">
    <div class="p-2 flex-grow-1 rounded" style="background-color: #dddddd;">    
        <?php
            // BREADCRUMBS
            $items = ["Sitemap", $title, $indexed_block->name];
            $links = ["?u=admin&m=sitemap", "?u=admin&m=view", "?u=admin&m=view&i=".$block_index];
            include "templates/breadcrumbs.php";


            // BLOCK FIELDS
            // Block-type dropdown
            $action = "?u=admin&m=view&i=".$block_index."&f=editblock";
            $label = "Block Type";
            $dropdown_id = "dropdown-1";
            $name = "block-type";
            $selection = $indexed_block->type;
            $values = [];
            $types = [];
            for($i = 0; $i < count($templates); $i++){
                array_push($values, '{"type":"'.$templates[$i]->type.'","template":"'.$templates[$i]->template.'"}');
                array_push($types, $templates[$i]->type);
            }
            include "templates/onchange-dropdown.php";

            include "templates/seperator.php";

            // Other fields
            // Generates fields to edit the block name and template specific fields.
            $btn_text = "Save Changes";
            $action = "?u=admin&m=view&i=".$block_index."&f=editblock";
            $labels = ["Block Name"];
            $names = ["name"];
            $input_types  = ["string"];
            $input_values = [$indexed_block->name];
            $input_placeholders = ["..."];
            $editable = [true];
            for ($i = 0; $i < count($templates); $i++){
                if($indexed_block->type == $templates[$i]->type)
                    $indexed_template = $templates[$i];
            }
            $block_arr = (array)$indexed_block;
            foreach($indexed_template->fields as $field){
                array_push($names, $field->key);
                array_push($labels, $field->name);
                array_push($input_types, $field->type);
                array_push($input_values, $block_arr[$field->key]);
                array_push($input_placeholders, $field->placeholder);
                array_push($editable, true);
            }
            include "templates/view-form.php";
        ?>
    </div>
    <?php
    // BUTTONS
    // Return to Page View button
        $items = [
            "Return to Page View"
        ];
        $links = [
            "?u=admin&m=view"
        ];
        $types = [
            "secondary"
        ];
    ?>
    <div class="p-2"><?php include "templates/button.php"; ?></div>
</div>
