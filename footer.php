<!-- Footer -->
<footer id="footer">
  <div class="content">
    <div class="wrap cf">
      <div class="col-4">
        <p>
          <?php echo ale_get_option('footer_description');?>
        </p>
        <!-- Copy -->
          <?php if (ale_get_option('copyrights')) : ?>
            <p><?php echo ale_option('copyrights'); ?></p>
          <?php else: ?>
            <p>&copy; <?php _e('2019 ALL RIGHTS RESERVED', 'aletheme')?></p>
          <?php endif; ?>
      </div>
      <div class="col-4">
        <div class="call">
          <h3><?php echo ale_get_option('footer_callnumber');?></h3>
          <span><?php echo ale_get_option('footer_callus');?></span>
        </div>
      </div>
      <div class="col-4">
        <p><?php echo ale_get_option('footer_address_label');?></p>
        <span><?php echo ale_get_option('footer_address');?></span>

        <div class="social">
          <?php if (ale_get_option('twi')) {?><a href="<?php echo ale_get_option('twi');?>" target="_blank" class="twitter"></a><?php }?>
          <?php if (ale_get_option('fb')) {?><a href="<?php echo ale_get_option('fb');?>" target="_blank" class="facebook"></a><?php }?>
          <?php if (ale_get_option('you')) {?><a href="<?php echo ale_get_option('you');?>" target="_blank" class="youtube"></a><?php }?>

        </div>
      </div>
    </div>
  </div>

  <!-- -->
  <div class="bottom-line">
    <div class="wrap">
        <?php
        if ( has_nav_menu( 'footer_menu' ) ) {
            wp_nav_menu(array(
                'theme_location'=> 'footer_menu',
                'menu'			=> 'Footer Menu',
                'menu_class'	=> 'footermenu cf',
                'walker'		=> new Aletheme_Nav_Walker(),
                'container'		=> '',
            ));
        }
        ?>
    </div>
  </div>
  <!-- Scripts -->
    <?php wp_footer(); ?>
</footer>
</body>
</html>