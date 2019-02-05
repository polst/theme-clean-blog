<form name="sentMessage" id="contactForm" novalidate action="<?= $url;?>" method="POST">

<?php foreach($fields as $field):?>

<?= PHPTheme::widget('contactFormField', $field);?>

<?php endforeach;?>

<br>
<div id="success"><?= $message;?></div>
<div class="form-group">
<button type="submit" class="btn btn-primary" id="sendMessageButton"><?= $submit;?></button>
</div>
</form>