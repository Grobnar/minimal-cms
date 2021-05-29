<?php

// Generates a hashcode, used to create the route for new pages.
function randHash($len)
{
    return substr(md5(openssl_random_pseudo_bytes(20)),-$len);
}

function getView($req, $views){
    for($i = 0; $i < count($views); $i++){
        if($req == $views[$i]->route)
            return $i;
    }
    return -1;
}

// Saves changes to views.json
// May require that the views.json file be given additional write permissions.
function saveViews($views){
    $viewsJSON = json_encode($views);
    file_put_contents('./views.json', $viewsJSON);
}

// Views editing functions
function addView($views){
    $view = new \stdClass();
    $view->title = "Untitled";
    $view->route = "/".randHash(8);
    $view->blocks = [];

    array_push($views, $view);

    saveViews($views);

    return $view->route;
}
function deleteView($views, $page_index){
    array_splice($views, $page_index, 1);

    saveViews($views);

    return $views;
}
function editView($views, $page_index, $new_title, $new_route){
    $views[$page_index]->title = $new_title;
    $views[$page_index]->route = $new_route;

    saveViews($views);

    return $views;
}

// Blocks editing functions
function addBlock($views, $page_index){
    $block = new \stdClass();
    $block->name = "New Block";
    $block->type = "Seperator";
    $block->template = "seperator.php";

    array_push($views[$page_index]->blocks, $block);

    saveViews($views);

    return $views;
}
function deleteBlock($views, $page_index, $block_index){
    array_splice($views[$page_index]->blocks, $block_index, 1);
    saveViews($views);
    return $views;
}
function editBlock($views, $page_index, $block_index, $fields){
    $fields_arr = (array)$views[$page_index]->blocks[$block_index];
    foreach ($fields as $field) {
        $fields_arr[$field[0]] = $field[1];
    }
    $views[$page_index]->blocks[$block_index] = (object)$fields_arr;

    saveViews($views);
    return $views;
}

// Users editing functions, to be implemented
function addUser(){}
function editUser(){}
function deleteUser(){}
function logUser(){}

?>
