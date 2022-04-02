<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 06:08:31
  from 'C:\xampp\htdocs\TPEWEB2\templates\ShowComents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc872cf3e65e2_48671665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182f01ee4143740997cd03b95ce27433d09118d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\ShowComents.tpl',
      1 => 1606889584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc872cf3e65e2_48671665 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="container">
        
        <ul id="comentarios-list" class="list-group">
        </ul>
        <input type="hidden" id="juego" name="input_juegos" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">
    </div>    

    <div class="container">
        <form id= "form-comentario"  method="post">
            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?> 
                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <input class="form-control" id="comentario" >
                </div>
                <div>
                    <label for="valoracion">Valoracion
                        <select id="valoracion" name="input_valoracion">
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>
                    </label>
                </div>
                <input type="hidden" id="user"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
                <input type="hidden" id="admin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
">
                <div class="form-group">
                    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
                </div>
            <?php }?>    
        </form>
    </div>
    
</div>

<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
<?php }
}
