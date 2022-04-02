<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 23:30:13
  from 'C:\xampp\htdocs\TPEWEB2\templates\ShowUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc966f5132488_77709917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c5c1f925baa721aa50991c4a69cb1d093e4c5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\ShowUsers.tpl',
      1 => 1606889913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc966f5132488_77709917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
   <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->id != $_smarty_tpl->tpl_vars['userSession']->value) {?>
                <li class="list-group-item " ><?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>
<button type="button" class="btn btn-danger"><a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Borrar</a></button>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
                    <button type="button" class="btn btn-warning"><a href="editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Hacer Admin</a></button></li>
                <?php } else { ?>
                    <button type="button" class="btn btn-warning"><a href="editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Hacer Usuario</a></button></li>
                <?php }?>  
             <?php }?>         
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <button type="button" class="botonEstilo btnColor4"><a href="user">Volver</a></button>
        </ul>
    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
