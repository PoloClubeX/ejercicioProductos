<?php
include "../controllers/conexion.php";
class Producto
{
    private $producto;
    private $categoria;
    public function __construct()
    {
        $this->producto = array();
        $this->categoria = array();

    }


    public function getProductos()
    {
        global $con;

        $query = "EXEC spu_ObtenerProductos;";
        $res = sqlsrv_query($con, $query);
        while ($row = sqlsrv_fetch_array($res)) {
            $this->producto[] = $row;
        }
        return $this->producto;
    }

    public function getCategorias()
    {
        global $con;
        $query = "EXEC spu_ObtenerCategorias;";
        $res = sqlsrv_query($con, $query);
        while ($row = sqlsrv_fetch_array($res)) {
            $this->categoria[] = $row;
        }
        return $this->categoria;
    }

    public function setProducto($nombre, $precio, $idCategoria)
    {
        global $con;
        //self::setNames();
        $query = "EXEC spu_addProducto '$nombre','$precio',$idCategoria";
        $res = sqlsrv_prepare($con, $query);
        try {
            if (sqlsrv_execute($res)) {
                return true;
                // header("location:insertar.php");
            } else if (($errors = sqlsrv_errors()) != null) {
                foreach ($errors as $error) {
                    //  echo '<script language="javascript"> alert("Ocurrió un error durante la inserción de los datos del empleado."); </script>';
                    // echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                    //echo "code: " . $error['code'] . "<br />";
                    //echo "message: " . $error['message'] . "<br />";
                }
                return false;
            }
        } catch (Exception $ex) {

        }

    }

    public function setCategoria($nombre)
    {
        global $con;
        //self::setNames();
        $query = "EXEC spu_addCategoria '$nombre'";
        $res = sqlsrv_prepare($con, $query);
        try {
            if (sqlsrv_execute($res)) {
                return true;
                // header("location:insertar.php");
            } else if (($errors = sqlsrv_errors()) != null) {
                foreach ($errors as $error) {
                    //  echo '<script language="javascript"> alert("Ocurrió un error durante la inserción de los datos del empleado."); </script>';
                    // echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                    //echo "code: " . $error['code'] . "<br />";
                    //echo "message: " . $error['message'] . "<br />";
                }
                return false;
            }
        } catch (Exception $ex) {
        }
    }
}
?>