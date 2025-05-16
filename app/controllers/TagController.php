<?php

exit('fin');

class TagController
{

    public function __construct($toto)
    {
        echo "Je suis dans le controlleur Tag action : " . $toto;

        switch ($toto) {
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
        echo "Liste de tous les tags";
    }

    public function show()
    {
        echo "Untag";
    }
}
