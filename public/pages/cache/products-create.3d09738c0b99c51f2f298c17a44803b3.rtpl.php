<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Criando um novo produto</h1>
<form method="post">
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="price" placeholder="Preço">
    <textarea name="description" placeholder="Descrição do produto"></textarea>
    <button type="submit">Criar</button>
</form>