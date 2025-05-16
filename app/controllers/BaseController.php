<?php
// app/src/controllers/BaseController.php

abstract class BaseController {

    protected $action;
    public function __construct(string $action) {
        $this->action = $action;
    }

    public function run() {
        switch ($this->action) {
            case 'index':
                return $this->index();
            case 'show':
                $id = filter_input(INPUT_GET, 'id');
                return $this->show($id);
            default:
                http_response_code(404);
                echo "404 Not Found";
                return;
        }
    }

    abstract protected function index();
    abstract protected function show($id = null);
}

?>