<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Mapping\Loader; if (!defined('ABSPATH')) exit; class YamlFilesLoader extends \MailPoetVendor\Symfony\Component\Validator\Mapping\Loader\FilesLoader { public function getFileLoaderInstance($file) { return new \MailPoetVendor\Symfony\Component\Validator\Mapping\Loader\YamlFileLoader($file); } } 