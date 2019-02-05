<!DOCTYPE html>
<html lang="<?= PHPTheme::lang();?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if($title):?><title><?= PHPTheme::escape($title);?></title><?php endif;?>
<!-- Bootstrap core CSS -->
<link href="<?= PHPTheme::url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="<?= PHPTheme::url('vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="<?= PHPTheme::url('css/clean-blog.min.css');?>" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script src="<?= PHPTheme::url('vendor/jquery/jquery.min.js');?>"></script>
<?php PHPTheme::trigger('page_head', $this->data);?>
<style type="text/css">
.page-item.active .page-link{
	background-color: #212529;
	border-color: #212529;
}
.page-link {
	color: #212529;
}
.page-link:hover {
	color: #212529;
}
a.page-link:focus {
	box-shadow: none;
}
</style>
</head>
<body>
<?php PHPTheme::trigger('page_body_begin', $this->data);?>
<?= PHPTheme::widget('navigation', $navigation);?>
<?= PHPTheme::widget('header', $header);?>
<!-- Main Content -->
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
<?= $content;?>
</div>
</div>
</div>
<hr>
<?= PHPTheme::widget('footer', $footer);?>
<script src="<?= PHPTheme::url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- Custom scripts for this template -->
<script src="<?= PHPTheme::url('js/clean-blog.min.js');?>"></script>
<?php PHPTheme::trigger('page_body_end', $this->data);?>
</body>
</html>