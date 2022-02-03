<?php
require 'config.php';// para acessar o BD que o arquivo config.php está acessando
require 'dao/UsuarioDaoMysql.php';//NO ARQUIVO INDEX, IMPLEMENTO O MEU USUARIODAO

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();//ESSA LINHA SUBSTITUIRÁ TODO O CÓDIGO COMENTADO ABAIXO

/*$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}*/
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>
</br></br>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <!--COLOCO GETID()-->
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir ?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>        
</table>