

<?php

class NoteController{
    public function __construct($action)
    {
        echo "Je suis dans le controlleur Note action : " . $action;

        switch ($action) {
            case "index":
                $this->index();
                break;
            case "show":
                $this->show();
                break;
            default:
                echo "404";
                break;
        }
    }
    public function index()
    {
        echo "Liste de toutes les notes";
    }

    public function show($id)
    {
        echo "uneNote";
    }
}

?>