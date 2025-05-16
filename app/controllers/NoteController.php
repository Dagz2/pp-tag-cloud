<?php

class NoteController extends BaseController {
    
    protected function index()
    {
        echo "Liste de toutes les notes";
    }

    protected function show($id = null) {
        echo "Détail de la note #" . htmlspecialchars($id);
    }
}

?>