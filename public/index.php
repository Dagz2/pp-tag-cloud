<?php

include '../bootstrap.php';

$loc = filter_input(INPUT_GET, "loc");
$action = filter_input(INPUT_POST, "action");
var_dump($loc, $action);

$controller = null;

switch ($loc) {
    case "tag":
        include(BASE_PATH."src/controllers/TagController.php");
        $controller = new TagController($actoin);
        // $controller->index();
        // $controller->show();

        break;
    case "note":
        include("app/controllers/NoteController.php");
        $controller = new NoteControleur($action);
        break;
}

$controller->run();

