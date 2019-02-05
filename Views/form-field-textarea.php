<div class="control-group">
<div class="form-group floating-label-form-group controls">
<label><?= PHPTheme::escape($label);?></label>
<?= PHPTheme::textarea($name, $value, $options);?>
<p class="help-block text-danger"><?= PHPTheme::escape($error);?></p>
</div>
</div>