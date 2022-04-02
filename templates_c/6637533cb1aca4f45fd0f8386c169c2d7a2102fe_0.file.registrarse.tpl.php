<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 23:28:38
  from 'C:\xampp\htdocs\TPEWEB2\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc96696270315_95692589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6637533cb1aca4f45fd0f8386c169c2d7a2102fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\registrarse.tpl',
      1 => 1605825913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc96696270315_95692589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['registracion']->value;?>
</h1>
<div class="container">
    <form action="registracionUser" method="post">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="input_email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" name="input_user">
        </div>   
        <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_password">
        </div>
        <div class="form-group">
            <button class="botonEstilo btnColor2">Registrarse</button>  
        </div>
     <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
            <?php }?> 
    </form>
   
</div> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
