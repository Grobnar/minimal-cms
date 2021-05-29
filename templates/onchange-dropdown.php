<!-- 
    $action = String;
    $label = String;
    $dropdown_id = String;
    $values = String[];
    $name = String;
    $selection = Int; Could be a value instead.
 -->

<form method="post" action="<?php echo $action ?>">
    <div class="form-group">
        <label for="<?php echo $dropdown_id ?>"><?php echo $label ?></label>
        <select class="form-control" name="<?php echo $name ?>" id="<?php echo $dropdown_id ?>" onchange="this.form.submit()">
            <?php for($j = 0; $j < count($types); $j++) { ?>
                <option value='<?php echo $values[$j] ?>' <?php if($types[$j] == $selection) echo "selected"; ?>><?php echo $types[$j] ?></option>
            <?php } ?>
        </select>
    </div>
</form>
