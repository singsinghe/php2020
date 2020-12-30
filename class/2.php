<?

    class info{

        private $_name;
        public $_age; 
        
        public function setName($name){
            $this->_name = $name; 
        }

        public function getName(){
            return $this->_name; 
        }

    }




    $person = new info();
    $person->setName('서기'); 
    $person->_age=15;


    echo $person->_age; 
    echo $person->getName();