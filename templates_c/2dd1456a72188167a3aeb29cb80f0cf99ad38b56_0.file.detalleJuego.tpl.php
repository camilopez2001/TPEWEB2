<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 06:08:31
  from 'C:\xampp\htdocs\TPEWEB2\templates\detalleJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc872cf34e624_91494183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd1456a72188167a3aeb29cb80f0cf99ad38b56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\detalleJuego.tpl',
      1 => 1606956882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:ShowComents.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc872cf34e624_91494183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1>Titulo : <?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if ($_smarty_tpl->tpl_vars['imagenes']->value != null) {?>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
$_smarty_tpl->tpl_vars['imagen']->index = -1;
$_smarty_tpl->tpl_vars['imagen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->do_else = false;
$_smarty_tpl->tpl_vars['imagen']->index++;
$_smarty_tpl->tpl_vars['imagen']->first = !$_smarty_tpl->tpl_vars['imagen']->index;
$__foreach_imagen_0_saved = $_smarty_tpl->tpl_vars['imagen'];
?>
                <?php if ($_smarty_tpl->tpl_vars['imagen']->first) {?>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->path;?>
">
                  </div>
                <?php } else { ?>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->path;?>
">
                  </div>
                <?php }?>
              <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      <?php }?>     
    </div>
    <div class="col-md-8">
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['game']->value->precio;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>
        <h3>Precio: Gratis</h3>
      <?php } else { ?>
        <h3>Precio: $<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</h3>
      <?php }?>
      <h3>La version del juego es <?php echo $_smarty_tpl->tpl_vars['game']->value->version;?>
</h3>
      <h3>Ocupa un espacio total de <?php echo $_smarty_tpl->tpl_vars['game']->value->memoria;?>
 GB</h3>
      <h3>Genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->name;?>
</h3>
      <?php $_smarty_tpl->_subTemplateRender("file:ShowComents.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['game']->value), 0, false);
?>
    </div>
    
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
