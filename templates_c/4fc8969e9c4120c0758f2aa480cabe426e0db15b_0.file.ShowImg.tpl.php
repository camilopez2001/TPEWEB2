<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 23:29:54
  from 'C:\xampp\htdocs\TPEWEB2\templates\ShowImg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc966e2277b13_95369780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc8969e9c4120c0758f2aa480cabe426e0db15b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\ShowImg.tpl',
      1 => 1606797958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc966e2277b13_95369780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
  <?php if ($_smarty_tpl->tpl_vars['imagenes']->value != null) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
$_smarty_tpl->tpl_vars['imagen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->do_else = false;
?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->path;?>
" class="imagenes">
      <button type="button" class="botonEstilo btnColor3"><a href="deleteImg/<?php echo $_smarty_tpl->tpl_vars['imagen']->value->id;?>
">Eliminar</a></button>
      <form action="editImg" method="post" enctype="multipart/form-data">
        <div>
          <label for="image">Inserte imagen</label>
          <input type="file" name="input_img" id="imageUpload">
          <input type="hidden" name="input_id_img" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->id;?>
">
          <input type="hidden" name="input_path" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->path;?>
">
        </div>
        <button type="submit" class="botonEstilo btnColor1">Editar</button>
      </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <p>Aun no hay imagenes disponibles</p>           
  <?php }?>
  <form action="insertImg" method="post" enctype="multipart/form-data">
    <div>
      <label for="image">Inserte imagen</label>
      <input type="file" id="imagenes" name="imagenes[]" multiple>
      <input type="hidden" id="game_id" name="input_id" value="<?php echo $_smarty_tpl->tpl_vars['id_game']->value;?>
">
    </div>
    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
  </form> 
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
