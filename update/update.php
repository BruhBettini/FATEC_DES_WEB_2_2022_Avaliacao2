<<<<<<< HEAD
<?php
     switch(@$_REQUEST ["acao"]){

        case 'update':
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $curso = $_POST["curso"];
              
            $sql = "UPDATE usuarios SET
            nome ='{$nome}',
            sobrenome ='{$sobrenome}', 
            email ='{$email}',
            curso ='{$curso}'
            Where id =".$_REQUEST["id"];


            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Editar');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;
            
=======
<?php
     switch(@$_REQUEST ["acao"]){

        case 'update':
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $curso = $_POST["curso"];
              
            $sql = "UPDATE usuarios SET
            nome ='{$nome}',
            sobrenome ='{$sobrenome}', 
            email ='{$email}',
            curso ='{$curso}'
            Where id =".$_REQUEST["id"];


            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Editar');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;
            
>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
    }