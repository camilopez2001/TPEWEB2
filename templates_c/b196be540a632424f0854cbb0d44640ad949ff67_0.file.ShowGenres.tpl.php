<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-06 22:10:24
  from 'C:\xampp\htdocs\TPEWEB2\templates\ShowGenres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60944d30b43d40_99690115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b196be540a632424f0854cbb0d44640ad949ff67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\ShowGenres.tpl',
      1 => 1602459744,
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
function content_60944d30b43d40_99690115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:Genres.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
