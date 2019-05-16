<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Produtos</h1>
<a href="/produtos/criar">Criar novo produto</a>


<h4>Lista de Produto</h4>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Opções</td>
        </tr>
    </thead>
    <tbody>
    <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
        <tr>
            <td><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td>R$ <?php echo htmlspecialchars( $value1["price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><a href="/produtos/excluir/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">X</a> <a href="/produtos/editar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Editar</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>


</ul>