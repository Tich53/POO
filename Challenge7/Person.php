<?php
    class Person {
        // Propriétés ou variables ou attributs
        protected string $lastname;
        protected string $firstname;
        protected string $address;
        protected string $birthDate;

        // Constructeur
        public function __construct(string $lastname, string $firstname, string $address, string $birthDate){
            $this -> lastname = $lastname;
            $this -> firstname = $firstname;
            $this -> address = $address;
            $this -> birthDate = $birthDate;
        }

        // Getters et setters
        public function getLastname() : string
        {
            return $this -> lastname;
        }
        public function getFirstname() : string
        {
            return $this -> firstname;
        }
        public function getAddress() : string
        {
            return $this -> address;
        }
        public function setAddress(string $address): void
        {
            $this -> address = $address;
        }
        public function getBirthDate() : string
        {
            return $this -> birthDate;
        }

        // Méthodes annexes
        public function identity(): string
        {
            return "Je m'appelle " . $this -> firstname . ' ' . $this -> lastname . ", j'habite à " . $this -> address . " et je suis né le " . $this -> birthDate;
        }

        public function age (): string
        {
            $now = date("y-m-d");
            $diff = date_diff(date_create($now), date_create($this -> birthDate));
            return "Mon âge est de " . $diff -> format('%y');

        }
    }
?>

<?php
  //$dateNaissance = "15-06-1995";
  //$aujourdhui = date("Y-m-d");
  //$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  //echo 'Votre age est '.$diff->format('%y');
?>

