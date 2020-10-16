<?php 

    class Lifo{
        
        // public $date;
        // public $libellés;
        // public $Eq;
        // public $Ecu;
        // public $Em;
        // public $Soq;
        // public $Socu;
        // public $Som;
        // public $Stq;
        // public $Stcu;
        // public $Stm;

        public $inp_date;
        public $inp_lib;
        public $inp_ref;
        public $inp_q;
        public $inp_cu;
        public $inp_m;

        // require_once 'C:\xampp\htdocs\analyse-financière\Model\Entrée.php';
        // require_once 'C:\xampp\htdocs\analyse-financière\Model\Sortie.php';
        // require_once 'C:\xampp\htdocs\analyse-financière\Model\Stock.php';

        
        public function setStock($inp_q, $inp_cu, $inp_m){
            $this->inp_q;
            $this->inp_cu;
            $this->inp_m;
        }


        public function getStock(){
            $resStock = new Stock();
            $resEntree = new Entree();
            $resSortie = new Sortie();

            if ($this->opss == "Stock Initial") {
                # code...
                $inp_date = $_POST['inp_date'];
                $inp_lib = $_POST['inp_lib'];
                $inp_ref = $_POST['inp_ref'];
                $inp_q = $_POST['inp_q'];
                $inp_cu = $_POST['inp_cu'];
                $inp_m = $_POST['inp_m'];


                $resStock->setStock($inp_q, $inp_cu, $inp_m);
                $stock = $resStock->getStock();

                return $stock;
                // echo $ValeurEntree;
            }
            if ($this->opss == "Sortie") {
                # code...
                $inp_date = $_POST['inp_date'];
                $inp_lib = $_POST['inp_lib'];
                $inp_ref = $_POST['inp_ref'];
                $inp_q = $_POST['inp_q'];
                $inp_cu = $_POST['inp_cu'];
                $inp_m = $_POST['inp_m'];


                $resSortie->setStock($inp_q, $inp_cu, $inp_m);
                $sortie = $resSortie->getStock();

                return $sortie;
            }
            if ($this->opss == "Entrée") {
                # code...
                $inp_date = $_POST['inp_date'];
                $inp_lib = $_POST['inp_lib'];
                $inp_ref = $_POST['inp_ref'];
                $inp_q = $_POST['inp_q'];
                $inp_cu = $_POST['inp_cu'];
                $inp_m = $_POST['inp_m'];


                $resEntree->setStock($inp_q, $inp_cu, $inp_m);
                $entree = $resEntree->getStock();

                return $entree;
            }
            if ($this->opss == "Stock Final") {
                # code...
                $inp_date = $_POST['inp_date'];
                $inp_lib = $_POST['inp_lib'];
                $inp_ref = $_POST['inp_ref'];
                $inp_q = $_POST['inp_q'];
                $inp_cu = $_POST['inp_cu'];
                $inp_m = $_POST['inp_m'];


                $resStock->setStock($inp_q, $inp_cu, $inp_m);
                $stock = $resStock->getStock();

                return $stock;
            }
        }
    }
?>
<!-- <?php 


?> -->