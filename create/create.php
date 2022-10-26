<<<<<<< HEAD
<?php

     switch(@$_REQUEST ["acao"]){
        case 'create':
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $curso = $_POST["curso"];

            $sql =  "INSERT INTO usuarios (nome, sobrenome, email, curso) VALUES ('{$nome}', '{$sobrenome}','{$email}', '{$curso}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Cadastrar');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;


=======
<?php

     switch(@$_REQUEST ["acao"]){
        case 'create':
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $curso = $_POST["curso"];

            $sql =  "INSERT INTO usuarios (nome, sobrenome, email, curso) VALUES ('{$nome}', '{$sobrenome}','{$email}', '{$curso}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado');</script>";
                print "<script>location.href='?crud=read';</script>";
            }else{
                print "<script>alert('Não foi possivel Cadastrar');</script>";
                print "<script>location.href='?crud=read';</script>";
            }
        break;


>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
    }