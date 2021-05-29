<?php

// ROUTING
$request = [
    "page" => explode('?', $_SERVER['REQUEST_URI'], 2)[0],
    // User keeps a key once logged in.
    // ex, ?u=3g43g3
    "user" => $_GET["u"],
    // Mode can be sitemap or view, where view presents page specific fields
    "mode" => $_GET["m"],
    // Index of the block being editted, if a block is being edited.
    "index" => $_GET["i"],
    // Flag, indicating additional info such as if a newpage is requested.
    "flag" => $_GET["f"],
];

$views = json_decode(file_get_contents('./views.json'));

// Get page_index
if($request["page"] == "" || $request["page"] == "/")
    $page_index = 0;
else {
    $page_index = getView($request["page"], $views);

    if($page_index == -1) {
        // header('HTTP/1.0 404 Not Found');
        http_response_code(404);
        $page_index = getView("/404", $views);
    }
}

// Process flags
if ($request["flag"] == "newpage"){
    $route = addView($views);

    // !!! Might require $_SERVER["SERVER_NAME"] at the start when used off of localhost.
    // header() redirect must precede any output.
    // Redirect to the new page.
    header("Location: ".$route."?u=admin&m=sitemap");
} else if ($request["flag"] == "deletepage"){
    deleteView($views, $page_index);

    // !!! Might require $_SERVER["SERVER_NAME"] at the start when used off of localhost.
    // Redirect to home / first page.
    header("Location: /?u=admin&m=sitemap");
} else if ($request["flag"] == "editpage"){
    editView($views, $page_index, $_POST["Title"], $_POST["Route"]);

    // !!! Might require $_SERVER["SERVER_NAME"] at the start when used off of localhost.
    // Redirect to reload edited page.
    header("Location: ".$_POST["Route"]."?u=admin&m=view");
} else if ($request["flag"] == "newblock"){
    $views = addBlock($views, $page_index);
} else if ($request["flag"] == "deleteblock"){
    $views = deleteBlock($views, $page_index, $request["index"]);
    // !!! Might require $_SERVER["SERVER_NAME"] at the start when used off of localhost.
    // Redirect to avoid navigating into the deleted block's editor.
    header("Location: ".$_POST["Route"]."?u=admin&m=view");
} else if ($request["flag"] == "editblock"){
    if ($_POST["block-type"]){
        $post_result = json_decode($_POST["block-type"]);
        $fields[0] = ["type", $post_result->type];
        $fields[1] = ["template", $post_result->template];
        $views = editBlock($views, $page_index, $request["index"], $fields);
    } else {
        $fields = [];
        foreach($_POST as $key=>$value){
            array_push($fields, [$key, $value]);
        }
        $views = editBlock($views, $page_index, $request["index"], $fields);
    }
}


// VARIABLES
$view = $views[$page_index];
$title = $view->title;
$favicon = "files/favicon.ico";
$templates = json_decode(file_get_contents('./templates.json'));

if($request["index"] != NULL){
    $indexed_block = $view->blocks[$request["index"]];
    $block_index = $request["index"];
}

// Show editor?
$admin = ($request["user"] == "admin");

?>