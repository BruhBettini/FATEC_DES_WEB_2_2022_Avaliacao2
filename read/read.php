<<<<<<< HEAD
<h1>Listar:</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0 ){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Sobrenome</th>";
        print "<th>Email</th>";
        print "<th>Curso</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->sobrenome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->curso."</td>";
            print "<td>
                    <button onclick=\"location.href='?crud=editar&id=".$row->id."';\" class='btn btn-primary'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza?')){location.href='?crud=delete&acao=delete&id=".$row->id."';} else{false;}\" class='btn btn-danger'> Excluir </button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não há cadastros</p>";
    }

=======
<h1>Listar:</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0 ){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Sobrenome</th>";
        print "<th>Email</th>";
        print "<th>Curso</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->sobrenome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->curso."</td>";
            print "<td>
                    <button onclick=\"location.href='?crud=editar&id=".$row->id."';\" class='btn btn-primary'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza?')){location.href='?crud=delete&acao=delete&id=".$row->id."';} else{false;}\" class='btn btn-danger'> Excluir </button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não há cadastros</p>";
    }

>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
?>