<?php
    class Person{
        private $name;
        public $lastname;
        public $age;
        private $hp;
        private $mother;
        private $father;

        public function __construct($name, $lastname, $age, $mother, $father){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->hp = 100;
            $this->mother = $mother;
            $this->father = $father;
        }
        public static function sayHi(){    //Метод
            echo "Hello world ";
        }

        public function getHp(){return $this->hp;}
        public function getName(){return $this->name;}
        public function getMother(){return $this->mother;}

        public function setHp($val){
            if($this->hp+$val >= 100) $this->hp = 100;
            else $this->hp = $this->hp+$val;
        }
        public function info(){
            $result = "Имя: ".$this->name."<br>
                     Фамилия: ".$this->lastname."<br>
                     Возвраст: ".$this->age."<br>";

            if($this->mother != null){
                $result .= "Имя матери: ".$this->mother->name."<br>";
                if ($this->mother->mother != null){
                    $result .= "Имя бабушки по маминой линиии: ".$this->mother->mother->name."<br>";
                }
                if ($this->mother->father != null){
                    $result .= "Имя дедушки по маминой линиии: ".$this->mother->father->name."<br>";
                }
            }
            if ($this->father != null){
                $result .= "Имя отца: ".$this->father->name."<br>";
                if ($this->father->mother != null){
                    $result .= "Имя бабушки по папиной линиии: ".$this->father->mother->name."<br>";
                }
                if ($this->father->father != null){
                    $result .= "Имя дедушки по папиной линиии: ".$this->father->father->name."<br>";
                }
            }
            return $result;
        }
    }
    $person7 = new Person("Фёдор", "Иванов", 85, null, null);
    $person6 = new Person("Вова","Петров", 74, null, null);
    $person5 = new Person("Лиза", "Иванова", 81, null, null);
    $person4 = new Person("Катя", "Петрова", 70, null, null);
    $person3 = new Person("Наталья", "Иванова", 49, $person4, $person6);
    $person2 = new Person("Вася", "Иванов", 49, $person5, $person7);
    $person1 = new Person("Иван", "Иванов", 10, $person3, $person2);
    Person::sayHi();



