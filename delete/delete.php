<<<<<<< HEAD
<?php
     switch(@$_REQUEST ["acao"]){

        case 'delete':
          
            $sql = "DELETE FROM usuarios WHERE id =".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com Sucesso');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Excluir');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;
            
=======
<?php
     switch(@$_REQUEST ["acao"]){

        case 'delete':
          
            $sql = "DELETE FROM usuarios WHERE id =".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com Sucesso');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Excluir');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;
            
>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
    }