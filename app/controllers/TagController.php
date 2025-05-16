<?php

class TagController extends BaseController {

    protected function index()
    {
        echo "Liste de tous les tags";
    }

    protected function show($id = null) {
        echo "Détail du tag #" . htmlspecialchars($id);
    }
}

?>