<?php
/* Smarty version 4.3.1, created on 2023-10-27 11:06:47
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653b7da72039c8_59441649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1671890849,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_653b7da72039c8_59441649 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/40afdb79a8a3356113e41c31a9cffead39fa719d_montage-banniere-comline-120420-2.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/a82599af92783d9aa90d8fbc2efea38f213a4534_banniere-dad3.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 2</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/038240b1be813784f9e3d0c912ddc3258dbcb005_3ordi.jpg" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 3</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
