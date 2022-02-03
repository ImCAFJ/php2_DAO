<h1>Adicionar Usuário</h1>

<form method="POST" action="adicionar_action.php">
    <label>
        Nome:</br>
        <input type="text" name="name" required="required" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" />
    </label></br></br>

    <label>
        E-mail:</br>
        <input type="email" name="email" />
    </label></br></br>

    <input type="submit" value="Adicionar" />
</form>
