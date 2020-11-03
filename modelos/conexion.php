<?php 
Class Conexion{
    private $con;

    public function __construct()
    {
        $this->con = NULL;
    }

    public function getCon(){
        return $this->con;
    }

    public function CambiarPrivilegio($priviledge){
        switch($priviledge){
            case 1: 
                $this->conex = new mysqli("localhost", "root", "", "candyshopbdd");
                break;
            case 2: $this->con = new mysqli("localhost", "user_normal", "unormal1", "candyshopbdd");
                break;   
            case 3: $this->con = new mysqli("localhost", "user_modify", "umodify1", "candyshopbdd");
                break;
            case 4: $this->con = new mysqli("localhost", "user_delete", "udelete1", "candyshopbdd");
                break;
        }
        return $this->con;
    }

    public function CerrarConexion(){
        if($this->con!=NULL){
            $this->con->close();
            $this->con = NULL;
        }
    }
}

?>