<?php 
    class Operation{
        public $q1;
        public $q2;

        public $cu;
        public $m1;
        public $m2;


        public function set_quadd($q1, $q2){
            $this->q1 = $q1;
            $this->q2 = $q2;
        }
        public function get_qadd(){
            return (float)((float)$this->q1 + (float)$this->q2);
        }
        public function get_qretrieve(){
            return (float)((float)$this->q1 - (float)$this->q2);
        }

        public function set_muadd($m1, $m2){
            $this->m1 = $m1;
            $this->m2 = $m2;
        }
        public function get_madd(){
            return (float)((float)($this->m1) + (float)($this->m2));
        }
        public function get_mretrieve(){
            return (float)((float)$this->m1 - (float)$this->m2);
        }
    }
?>