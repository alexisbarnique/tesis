<?php

/* 
 * Validamos el usuario, la contraseña y el estatus para dar acceso al sistema y a la base de datos.
 */

if($_POST['usuario']!=null&&$_POST['password']!=null&&$_POST['login']==1)
{   $usuario=strtolower($_POST['usuario']);$pass=md5($_POST['password']);$status="0";
    include "pgsql.php";
     $enlace=conectarAd();
     $sql="select nivel from usuarios where nombre='$usuario' and estado='t'";
     $result=basedatos($sql);
     $row=pg_fetch_row($result);
     if($row!=0)
     { 
    $nivel=$row[0];
    switch ($nivel)
    {
        case '1':
            $enlace=conectarAd();
            $sql="select p.cedula,p.nombre,p.apellido,u.nombre,n.id
                    from personas as p, usuarios as u, niveles as n 
                    where  u.nombre='$usuario' and u.id='1' and u.clave='$pass' and u.nivel=n.id and u.id_persona=p.id";
            $resul=basedatos($sql);
            if($resul!=0)
            {
            $status="1";
            }
            cerrar($enlace);
            break;
        case '2':
            $enlace=conectarCo();
            $sql="select p.cedula,p.nombre,p.apellido,u.nombre,n.id
                    from personas as p, usuarios as u, niveles as n 
                    where  u.nombre='$usuario' and u.id='2' and u.clave=md5('$pass') and u.nivel=n.id and u.id_persona=p.id";
            $resul=basedatos($sql);
            if($resul!=0)
            {
            $status="1";
            }
            cerrar($enlace);
            break;
        default:
            ?>
            <script type="text/javascript">
                alert("Usuario invalido");
                location.href='../../login.html';
            </script>
            <?php
            break;
        }
     }
    else
    {?>
    <script>
        alert("Usuario invalido");
        location.href='../../login.html';
    </script>
<?php       
    }
     
    if($status=="1")
    {
        $row=pg_fetch_row($resul);
        if($row!=0)
        {
                session_start();
 
                $_SESSION['cedula']=$row[0];
                $_SESSION['hoy']=date("j F Y");
                $_SESSION['nombre']=$row[1];
                $_SESSION['apellido']=$row[2];
                $_SESSION['usuario']=$row[3];
                $_SESSION['nivel']=$row[4];
                $_SESSION['estado']='autenticado';
                header ("Location: ../../index.php");
        }
        else
        {
        ?>
                <script language="javascript" type="text/javascript">
                        alert("Usuario o Clave Invalida");
                        location.href='../../login.html';
                </script>
        <?php
        }
    }
}
else
{?>
    <script>
        alert("Rellene todas las opciones por favor");
        self.location="../../login.html";
    </script>
<?php
}