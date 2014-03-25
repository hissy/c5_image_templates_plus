<?php	defined('C5_EXECUTE') or die("Access Denied."); ?>
<figure class="ccm-image-figure">
<?php echo $controller->getContentAndGenerate(); ?>
<figcaption class="ccm-image-figcaption"><?php echo $controller->getAltText(); ?></figcaption>
</figure>