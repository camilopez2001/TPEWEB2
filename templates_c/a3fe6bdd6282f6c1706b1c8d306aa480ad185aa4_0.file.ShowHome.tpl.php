<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 06:08:27
  from 'C:\xampp\htdocs\TPEWEB2\templates\ShowHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc872cb3f6679_80388765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3fe6bdd6282f6c1706b1c8d306aa480ad185aa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\ShowHome.tpl',
      1 => 1605396448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Genres.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc872cb3f6679_80388765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Genres.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    

<?php if ($_smarty_tpl->tpl_vars['games']->value) {?>
 <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="container">

        <ul class="list-group">
              
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
                <li class="list-group-item "><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a><span class="badge badge-primary badge-pill" >Gratis</span> </li>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         
        </ul>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
