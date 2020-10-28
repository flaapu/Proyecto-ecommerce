<?php 
class Gestor{
    private $productos;

    public function __construct()
    {
        $con = new mysqli('localhost', 'root', '', 'candyshopbdd');

        //error
        if ($con ->connect_errno){
            echo "Error al conectar con la base de datos";
            exit();
        }

        $i=0;
        $sql = "SELECT * from productos";
        $resultado = mysqli_query($con, $sql);
        //recorro todo el array buscando mi consulta
        while($row = mysqli_fetch_array($resultado)){
            $oProducto = new Producto($row['codigo_producto'], $row['nombre_producto'], $row['descripcion_producto'], $row['stock'], $row['precio'], $row['imagen']);
            $this->productos[$i]= $oProducto;
            $i++;
        }
        $con->close();
    }

    public function mostrarProductos(){
        for($i = 0; $i<count($this->productos); $i++)
        {
            $this->productos[$i]->mostrar();
        }
    }
}

class Producto{
    private $codigo;
    private $nombre;
    private $descripcion;
    private $stock;
    private $precio;
    private $imagen;

    public function __construct($cod, $nom, $des, $stock, $pre, $img)
    {   
        $this->codigo = $cod;
        $this->nombre = $nom;
        $this->descripcion = $des;
        $this->stock = $stock;
        $this->precio = $pre;
        $this->imagen = $img;

    }

    public function mostrar(){
        
        echo '
        <div class="box-producto">
        <a href="index.php?p='.$this->codigo.'">
            <div class="producto">
                <img src="img/productos/'.$this->imagen.'">
                <div class="detail-title"><b>'.$this->nombre.'</b></div>
                <div class="description">'.$this->descripcion.'</div>
                <div class="detalle-precio">ARG./ $'.$this->precio.'</div>';
                if($this->stock>0){
                echo '<button type="submit" class="btn-comprar" name=alcarro id='.$this->codigo.'>Comprar</button>';}          
                else{echo '<button type="submit" class="btn-comprar" name=alcarro disabled>No hay stock</button>';}
                echo'   
            </div>
        </a>
        </div>
        '; 
    }
}



?>