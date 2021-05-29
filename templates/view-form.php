<!-- 
    $btn_text = String;
    $action = String;
    $names = String[];
    $labels = String[];
    $input_types  = String[];
    $input_values = String[];
    $input_placeholders = String[];
    $editable = Bool[];
 -->

<form method="post" action="<?php echo $action ?>">
    <?php for($j = 0; $j < count($input_types); $j++) {
        switch ($input_types[$j]) {
        case "string":?>
            <div class="form-group row">
                <label for="<?php echo "form-item-".$j ?>" class="col-sm-2 col-form-label"><?php echo $labels[$j] ?></label>
                <div class="col-sm-10">
                    <input id="<?php echo "form-item-".$j ?>"
                        name="<?php echo $names[$j] ?>"
                        type="text"
                        <?php if($editable[$j]) echo "class='form-control'"; else echo "readonly class='form-control-plaintext'"; ?>
                        placeholder="<?php echo $input_placeholders[$j] ?>"
                        value="<?php echo $input_values[$j] ?>">
                </div>
            </div>
        <?php break;
        case "text":?>
            <div class="form-group">
                <label for="<?php echo "form-item-".$j ?>"><?php echo $labels[$j] ?></label>
                <textarea class="form-control" id="<?php echo "form-item-".$j ?>" rows="3"
                    name="<?php echo $names[$j] ?>"
                    <?php if($editable[$j]) echo "class='form-control'"; else echo "readonly class='form-control-plaintext'"; ?>
                    placeholder="<?php echo $input_placeholders[$j] ?>"><?php echo $input_values[$j] ?></textarea>
            </div>
        <?php break;
        case "bool":?>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="<?php echo "form-item-".$j ?>"
                    name="<?php echo $names[$j] ?>" 
                    value="<?php echo $input_values[$j] ?>">
                <label class="form-check-label" for="<?php echo "form-item-".$j ?>"><?php echo $labels[$j] ?></label>
            </div>
        <?php break;
        case "file":?>
            <div class="form-group">
                <label for="<?php echo "form-item-".$j ?>"><?php echo $labels[$j] ?></label>
                <input type="file" class="form-control-file" id="<?php echo "form-item-".$j ?>"
                    name="<?php echo $names[$j] ?>"
                    value="<?php echo $input_values[$j] ?>">
            </div>
        <?php break;?>
        <?php }
    } ?>
    <button type="submit" class="btn btn-primary"><?php echo $btn_text ?></button>
</form>
