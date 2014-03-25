<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class HissyImageTemplatesPackage extends Package {
	protected $pkgHandle = 'hissy_image_templates';
	protected $appVersionRequired = '5.6';
	protected $pkgVersion = '0.1';
	public function getPackageDescription() {
		return t('Additional Image block templates');
	}
	public function getPackageName() {
		return t('Image Templates+');
	}
}