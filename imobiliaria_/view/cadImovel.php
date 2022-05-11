<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóvel</title>
</head>
<body>
    <form name="cadImovel" id="cadImovel" action="" method="post">
        </br><h1>Cadastro de Imóvel</h1>
        Descricao: <input type="text" class="from-control col-sm-8" name="descricao" id="descricao" value="<?php echo isset($imovel)?$imovel->getDescricao():''?>"/></br>
        Foto: <input type="text" class="from-control col-sm-8" name="foto" id="foto" value="<?php echo isset($imovel)?$imovel->getFoto():''?>"/></br>
        Valor: <input type="number" class="from-control col-sm-8" name="valor" id="valor" value="<?php echo isset($imovel)?$imovel->getValor():''?>"/></br>
        Tipo:
        <select name="tipo" id="tipo">
            <option value="0"></option>
            <option value="A" <?php echo isset($imovel) && $imovel->getTipo()=='A'?'selected':''?>>Apartamento</option>
            <option value="C" <?php echo isset($imovel) && $imovel->getTipo()=='C'?'selected':''?>>Casa</option>
            <option value="T" <?php echo isset($imovel) && $imovel->getTipo()=='T'?'selected':''?>>Terreno</option>
        </select><br/><br/>
        <input type="submit" name="btnSalvar1" id="btnSalvar1">
        <input type="hidden" name="id" id ="id" value="<?php echo isset($imovel)?$imovel->getId():'';?> "/>
    </form>

    <?php
        if(isset($_POST["btnSalvar1"])){

            require_once "./controller/ImovelController.php";

            call_user_func(array("ImovelController","salvar"));
            header("location:index.php?page=imovel&action=listar");
        }
    ?>
</body>
</html>
 