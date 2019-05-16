<?php if(!class_exists('Rain\Tpl')){exit;}?><?php if( count($product) > 0 ){ ?>
<form method="post">
    <input name="name" value="<?php echo htmlspecialchars( $product["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <input name="price" value="<?php echo htmlspecialchars( $product["price"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <textarea name="description"><?php echo htmlspecialchars( $product["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
    <button type="submit">editar</button>
</form>
<?php }else{ ?>
    <p>Não tem produto</p>
<?php } ?>