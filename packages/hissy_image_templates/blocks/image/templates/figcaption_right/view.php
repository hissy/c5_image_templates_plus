<?php	defined('C5_EXECUTE') or die("Access Denied.");
$f = $controller->getFileObject();
$fullPath = $f->getPath();		
$size = @getimagesize($fullPath);
$maxWidth = ($controller->maxWidth > 0) ? $controller->maxWidth : $size[0];
?>
<figure class="ccm-image-figure ccm-image-figright" <?php if(!empty($maxWidth)):?>style="width: <?php echo $maxWidth?>px"<?php endif; ?>>
<?php echo $controller->getContentAndGenerate(); ?>
<figcaption class="ccm-image-figcaption"><?php echo $controller->getAltText(); ?></figcaption>
</figure>