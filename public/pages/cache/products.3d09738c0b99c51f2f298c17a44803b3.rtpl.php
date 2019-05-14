<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Produtos</h1>
<a href="/produtos/criar">Criar novo produto</a>


<h4>Lista de Produto</h4>
<ul>
    <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
    <li><a href="/products/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
    <?php } ?>
</ul>