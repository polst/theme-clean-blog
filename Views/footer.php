<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">          
          <?php foreach($buttons as $button):?>
          	<?= PHPTheme::widget('footerButton', $button);?>
          <?php endforeach;?>
        </ul>
        <p class="copyright text-muted"><?= $copyright;?></p>
      </div>
    </div>
  </div>
</footer>