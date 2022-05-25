<<<<<<< HEAD
<?php

include_once ("config.php");
class CRUD {

 // actualizar los datos de los clientes
    public function update(){

        $con=conectar();

            $cod_estudiante=$_POST['cod_estudiante'];
            $cedula=$_POST['cedula'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];

            $sql="UPDATE alumno SET  cedula='$cedula',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
            $query=mysqli_query($con,$sql);

            if($query){
                Header("Location: alumno.php");
            }

    }

    // borrar los datos de los clientes
    public function delete(){

        $con=conectar();

            $cod_estudiante=$_GET['id'];

            $sql="DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'";
            $query=mysqli_query($con,$sql);

            if($query){
                Header("Location: alumno.php");
            }

    }

    // ingresar nuevos datos de los clientes 
    public function insert(){

        $con=conectar();

            $cod_estudiante=$_POST['cod_estudiante'];
            $cedula=$_POST['cedula'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];


            $sql="INSERT INTO alumno VALUES('$cod_estudiante','$cedula','$nombres','$apellidos')";
            $query= mysqli_query($con,$sql);

            if($query){
                Header("Location: alumno.php");
    
            }else {
        }

    }

    // mostrar los datos de los clientes en pantalla
    public function select(){

        $con=conectar();

            $id=$_GET['id'];
        
            $sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
            $query=mysqli_query($con,$sql);
        
            $row=mysqli_fetch_array($query);
    }


=======
<?php

class CRUD {


    public function insert(){





    }

    public function delete(){



    }

    public function edit(){



    }

    public function select(){

        
    }


>>>>>>> f575bc69225674fdac70c0f943ae44511c9a452f
}