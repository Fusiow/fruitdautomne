<?php /*%%SmartyHeaderCode:204765857faa04defa7-91648537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1479911600,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '204765857faa04defa7-91648537',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586125ba1f75f3_79771532',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586125ba1f75f3_79771532')) {function content_586125ba1f75f3_79771532($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active">
          <figure>
            <img src="http://localhost/fruitdautomne/modules/ps_imageslider/images/dbab160d510081b6cd23347662419dcb30d3e3f0_carousel1.png" alt="">
                      </figure>
        </li>
          </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }} ?>
