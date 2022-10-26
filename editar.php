<<<<<<< HEAD
<h1>Editar:</h1>
<?php
    $sql = "SELECT * FROM usuarios where id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form action="?crud=update" method="POST">
    <input type="hidden" name="acao" value ="update">
    <input type="hidden" name="id" value ="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value ="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" value ="<?php print $row->sobrenome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" value ="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Curso:</label>
        <input type="text" name="curso" value ="<?php print $row->curso; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success"> Editar</button>
    </div>
=======
<h1>Editar:</h1>
<?php
    $sql = "SELECT * FROM usuarios where id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form action="?crud=update" method="POST">
    <input type="hidden" name="acao" value ="update">
    <input type="hidden" name="id" value ="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value ="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" value ="<?php print $row->sobrenome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" value ="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Curso:</label>
        <input type="text" name="curso" value ="<?php print $row->curso; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success"> Editar</button>
    </div>
>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
</form>