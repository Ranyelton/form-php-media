<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Ranyelton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="bg-dark  py-5">
    <h1 class="px-5 text-danger pb-1">Formulário PHP </h1>
    <p class="px-5 text-light" >Digite abaixo as informações e descubra se o Aluno está Aprovado ou Reprovado!</p>
</div>
<form class="m-5" method="post" action="">

<label for="">Aluno</label>
<input class="form-control" name="aluno" type="text" placeholder="Digite nome do Aluno">
<br>
<label for="">Disciplina</label>
<input class="form-control " name="disciplina" type="text" placeholder="Digite a Disciplina">
<br>
<div class="d-inline-flex mb-4">
    <div class="col-3">
        <label for="">Nota 1</label>
        <input class="form-control " name="n1" type="text" placeholder="Digite NOTA 1">
    </div>
    <div class="col-3 px-2">
        <label for="">Nota 2</label>
        <input class="form-control" name="n2" type="text" placeholder="Digite NOTA 2">
    </div>
 
    <div class="col-3 px-2">
        <label for="">Nota 3</label>
        <input class="form-control" name="n3" type="text" placeholder="Digite NOTA 3">
    </div>
    <div class="col-3 px-2">
        <label for="">Nota 4</label>
        <input class="form-control" name="n4" type="text" placeholder="Digite NOTA 4">    
    </div>
</div>
<br>
<button class="btn btn-danger" name="send" type="submit">Ver Resultados</button>

</form>   
</body>
</html>

<?php

header("Content-Type: text/html; charset=UTF-8", true);
    if (isset($_POST['send'])):
        $aluno = $_POST['aluno'];
        $disciplina = $_POST['disciplina'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $media = ($n1 + $n2 + $n3 + $n4)/4;

        echo "<hr> <div class='d-inline-flex mt-3 mb-2'> <h4 class='mx-5'>Aluno(a): ".$aluno."</h4><br>";
        echo "<h4 class='mx-5'>Matéria: ".$disciplina."</h4><br>";
        echo "<h4 class='mx-5 '>Média: ".$media."</h4><br>";

        if ($media >=6){
            echo "<h4 class='mx-5 text-success'>Aprovado!</h4><br></div>";
        }
        else{
            echo "<h4 class='mx-5 text-danger'>Reprovado!</h4><br></div>";}

        echo "<div class='mx-5 text-light d-inline-flex'> <h5 class='text-dark font-weight-bold py-2 '>Resumo Notas: </h5> <p class='bg-secondary p-2 mx-2'>Nota 1 = ".$n1."</p>"."<p class='bg-secondary p-2 mx-2'>Nota 2 = ".$n2."</p>"."<p class='bg-secondary p-2 mx-2'>Nota 3 = ".$n3."</p>"."<p class='mx-2 bg-secondary p-2'>Nota 4 = ".$n4."</p></div>";
    endif;
?>
