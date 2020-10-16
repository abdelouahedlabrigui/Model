<?php 
    class CMUPFinPeriode{
        // hello world
        /**
         * siev = Stock initiam en valeur
         * sieq = Stock initiam en quantité
         * eev = Entrée en valeur
         * eeq = Entrée en quantité
         */
        public $siev;
        public $sieq;
        public $eev;
        public $eeq;

        public function set_CMUPFinPeriode($siev, $sieq,
         $eev, $eeq){
             $this->siev = $siev;
             $this->sieq = $sieq;
             $this->eev = $eev;
             $this->eeq = $eeq;
        }
        public function get_CMUPFinPeriode(){
            return (($this->siev + $this->eev) / ($this->sieq + $this->eeq));
        }
    }
?>