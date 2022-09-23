<?php
    namespace Tutoriel\Test;

    class MyTest{
        public string $nom;

        public function __construct(string $nom)
        {
            $this->nom = $nom;
        }

        public function presentation()
        {
            echo "<div>Bonjour, ".$this->nom."</div>";
        }
    }

