<article class="cf">
  <div class="col-3 left">
    <h3><?php echo get_the_date('d');?></h3>
    <span><?php echo get_the_date('M Y');?></span>

  </div>
  <div class="col-6 right">
    <div class="inner">

      <!-- Img -->
      <div class="img">
        <?php if (get_the_post_thumbnail($post->ID, 'post-blogsize')){
          echo get_the_post_thumbnail($post->ID, 'post-blogsize');
        } else { ?>
          <img src="http://placehold.it/326x193/fcf8eb/" alt=""/>
        <?php }?>
        </div>

      <div class="text">
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
        <p>
          <?php echo get_the_excerpt();?>
        </p>
      </div>
      <div class="by"><?php _e('by','aletheme');?> <span><?php echo get_the_author();?></span></div>
      <div class="category"><?php the_category(',','');?></div>

      <!-- Read -->
      <a class="read" href="<?php the_permalink();?>"><?php _e('Read More','aletheme');?></a>
      <div class="shadow-bottom"></div>
    </div>
  </div>
</article>