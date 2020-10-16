<?php

    class Sortie{
        public $inp_date;

        public $inp_lib;
        public $inp_ref;
        public $inp_q;
        public $inp_cu;
        public $inp_m;

        public function setStock(
            // $inp_lib,
            // $inp_ref,
            $inp_q, 
            $inp_cu, 
            $inp_m){
            
            // $this->inp_lib = $inp_lib;
            // $this->inp_ref = $inp_ref;
            
            $this->inp_q = $inp_q;
            $this->inp_cu = $inp_cu;
            $this->inp_m = $inp_m;
        }
        public function getQuantite(){
            if ($this->inp_m != "" && $this->inp_cu != "" && $this->inp_q == "") {
                # code... third code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;
                
                return $this->inp_m / $this->inp_cu;
            }
        }
        public function getCoutUnitaire(){
            if ($this->inp_q != "" && $this->inp_m != "" && $this->inp_cu == "") {
                # code... second code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;

                return $this->inp_m / $this->inp_q;
            }
        }
        public function getMontant(){
            if ($this->inp_q != "" && $this->inp_cu != "" && $this->inp_m == "") {
                # code... first code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;
                
                return $this->inp_q * $this->inp_cu;
            }
        }
        public function getStock(){
            
            if ($this->inp_q != "" && $this->inp_cu != "" && $this->inp_m == "") {
                # code... first code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;
                // if ($this->inp_q != "") {
                //     # code...
                //     return $this->inp_q;
                // }
                // if ($this->inp_cu != "") {
                //     # code...
                //     return $this->inp_cu;
                // }
                return $this->inp_q * $this->inp_cu;
                // if ($this->) {
                //     # code...
                // }
            }
            if ($this->inp_q != "" && $this->inp_m != "" && $this->inp_cu == "") {
                # code... second code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;
                if ($this->inp_q != "") {
                    # code...
                    return $this->inp_q;
                }
                if ($this->inp_m != "") {
                    # code...
                    return $this->inp_m;
                }
                return $this->inp_m / $this->inp_q;
            }
            if ($this->inp_m != "" && $this->inp_cu != "" && $this->inp_q == "") {
                # code... third code
                $this->inp_q;
                $this->inp_cu;
                $this->inp_m;
                if ($this->inp_m != "") {
                    # code...
                    return $this->inp_m;
                }
                if ($this->inp_cu != "") {
                    # code...
                    return $this->inp_cu;
                }
                return $this->inp_m / $this->inp_cu;
            }
        }
    }
?>