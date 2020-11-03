<?php 

    
    class Gestor extends Producto{
    private $productos;
    private $cantidad = 0;
    
    public function __construct()
    {
        $con = new mysqli('localhost', 'user_normal', 'unormal1', 'candyshopbdd');
        //$con = new Conexion();
        //$con->CambiarPrivilegio(1);
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
        //$con->CerrarConexion();
    }
    //mostrar productos en el index, de todo pal user
    public function mostrarProductos(){
        for($i = 0; $i<count($this->productos); $i++)
        {
            $this->productos[$i]->mostrar();
        }
    }
    //mostrar tabla pal proveedor que nos va a de proveer de sus provedurias
    public function mostrarProductosAlProv(){
        for($i = 0; $i<count($this->productos); $i++)
        {
            $this->productos[$i]->mostrarPProv();
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
    private $cantidad;

    //Constructor del producto, cargo todos los datos
    public function __construct($cod, $nom, $des, $stock, $pre, $img)
    {   
        $this->codigo = $cod;
        $this->nombre = $nom;
        $this->descripcion = $des;
        $this->stock = $stock;
        $this->precio = $pre;
        $this->imagen = $img;

    }
    //getters
    /*
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getStock(){
        return $this->stock;
    }
    public function getPrecio(){
        return $this->precio;
    }*/


    /*mostrando los productos de la bdd
    @parametro Producto $codigo
    @parametro Producto $nombre
    @parametro Producto $descripcion
    @parametro Producto $stock
    @parametro Producto $precio
    @parametro Producto $imagen
    @return Producto
    */
    public function mostrar(){
        //quite la etiqueta a de todo el box <a href="index.php?p='.$this->codigo.'"> </a>
        echo '
        <div class="box-producto">
        
            <div class="producto">
                <img src="img/productos/'.$this->imagen.'">
                <div class="detail-title"><b>'.$this->nombre.'</b></div>
                <div class="description">'.$this->descripcion.'</div>
                <div class="detalle-precio">ARG./ $'.$this->precio.'</div>';
                if($this->stock>0){
                    //seria con el id o con el value? 
                echo '<a href="index.php?action=add&id='.$this->codigo.'" class="btn-agregar">Comprar</a>';}          
                else{echo '<a class="btn-agregar" disabled>No hay stock</a>';}
                echo'   
            </div>
        
        </div>
        '; 
        if(isset($_POST['action']))
        {   
            include("index.php");
        }
    }

    ////////////////////ACA ARRANCO CON LO DEL PROVEEDOR
    //armo la tablita pa mostrar todos los productos al proveedor que nos va a proveer bue seguia

    /*Nota de la creadora: odio usar javascript*/
    
    public function mostrarPProv(){
        //$cantidad = '<script>document.write(ChangeNumber())</script>';
            echo 
            '<form action="./php/modificarProducto.php" method="POST">
            <tr>
                <td>'.$this->nombre.'</td>
                <td>'.$this->stock.'</td>
                <td><input name="cantidad" type="number" value=0 min=0 pattern="^[0-9]+"><td>
                <td style="width: 200px">'.number_format($this->precio, 2).'</td>
                <td style="width: 200px">'.number_format($this->precio*$this->cantidad,2).'</td>
                <td>
                    <input name="agregarStock" value="Agregar" type="submit" class="btn-agregar">
                </td>
                    <input name="producto" type="hidden" value="'.$this->codigo.'">
                <td>
                    <input name="eliminarStock" value="Eliminar" type="submit" class="btn-quitar" >
                </td>
            </tr>
            </form>
            ';

    } 

    /*
    //ESTO TENIA QUE HACERLO CON OBJETO PERO ME PETO LA MENTE
    //VALIDAR BOTON PA' QUE EL PROVEEDOR AGREGUE LO QUE NOS VA A PROVEER JAJASJKFJAS
    public function proveedor_agregar($cantidad, $cod){
        $conn = new mysqli("localhost", "user_modify", "umodify1", "candyshop");
        $sql = "UPDATE productos SET stock=stock+$cantidad WHERE codigo_producto=$cod";
        $respuesta = mysqli_query($conn, $sql);
        if($respuesta){
            echo"producto agregado, gracias señor";
            header("Location: configuracion.php");
        }
        else{
            echo "noo, algo salio mal señor, por favor intente de nuevo";
        }

    }
    //Funcion para que el proveedor pueda ingresar un nuevo producto
    public function insertarProductos($nombre, $descripcion, $precio){
        $con = new mysqli("localhost", "user_modify", "umodify1", "candyshopbdd");
        $imagen = 'imagenotfound.jpg';
        $stock = 0;
        $sql = "INSERT INTO productos(nombre_producto, descripcion_producto, stock, precio, imagen) VALUES ('$nombre', '$descripcion', $stock, $precio, '$imagen')";
        $respuesta = mysqli_query($con, $sql);
        if($respuesta){
            header("Location: configuracion.php");
            echo "gracias señor por proveernos de un nuevo producto <3";
        }
        else{
            echo "noo señor, no pudo agregar su nuevo producto que tanto queremos";
        }
    }

    public function deletearProducto($cod){
        $con = new mysqli("localhost", "user_delete", "udelete1", "candyshopbdd");
        $sql= "DELETE FROM productos WHERE codigo_producto=$cod";
        $resultado=mysqli_query($con, $sql);
        if($resultado){
            echo "producto eliminado";
        }
        else {
            echo "epa, salio mal algo, no va sa poder eliminarlo";
        }        
    }*/

}

?>