<?php 
/**
 * Template Name: Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <!-- Content -->
<!--
    <div class="contacts-center">
        <div class="content">

            <div class="h2" ><?php the_title(); ?></div>

            <div class="contact-content">
                <div class="left">
                    <div class="contacts">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>

                <div class="right">
                    <form method="post" action="<?php the_permalink();?>">
                        <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                        <?php endif; ?>
                        <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                        <?php endif; ?>

                        <div class="form">
                            <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            <input name="contact[phone]" type="text" placeholder="Phone (required)" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                            <input name="contact[genre]" type="text" placeholder="Genre (required)" value="<?php echo isset($_POST['contact']['genre']) ? $_POST['contact']['genre'] : ''?>" required="required" id="contact-form-genre" />

                            <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
                        </div>
                        <?php wp_nonce_field() ?>
                    </form>
                </div>
            </div>

        </div>
    </div>
    -->


  <!-- Content -->
  <div class="inner">

    <!-- Back -->
    <div class="back-left"></div>
    <div class="back-right"></div>

    <!-- Content -->
    <div class="wrap cf">
      <div class="col-6 left">
        <h2><?php echo ale_get_meta('title_one');?> <span><?php echo ale_get_meta('title_two');?></span></h2>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; endif; ?>

        <div class="line"></div>

        <span><?php echo ale_get_meta('title_address');?></span>
        <p><?php echo ale_get_meta('site_address');?></p>
        <br/>
        <span><?php echo ale_get_meta('title_phone');?></span>
        <p class="phone"><?php echo ale_get_meta('site_phone');?></p>
        <br/>
        <div class="line"></div>

        <div class="social">
          <?php if (ale_get_option('twi')) {?><a href="<?php echo ale_get_option('twi');?>" target="_blank" class="twitter"></a><?php }?>
          <?php if (ale_get_option('fb')) {?><a href="<?php echo ale_get_option('fb');?>" target="_blank" class="facebook"></a><?php }?>
          <?php if (ale_get_option('you')) {?><a href="<?php echo ale_get_option('you');?>" target="_blank" class="youtube"></a><?php }?>
        </div>

      </div>
      <div class="col-6 right">
        <h3><?php echo ale_get_meta('title_form');?></h3>

        <div class="form">
          <form method="post" action="<?php the_permalink();?>">
            <label for="name"><?php _e('Name','aletheme');?>:</label>
            <input id="name" name="contact[name]" type="text" placeholder="<?php _e('Your Name (required)','aletheme');?>" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
            <label for="email"><?php _e('Email','aletheme');?>:</label>
            <input id="email" name="contact[email]" type="email" placeholder="<?php _e('Email (required)','aletheme');?>" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />

            <label for="message"><?php _e('Message','aletheme');?>:</label>
            <textarea id="message" name="contact[message]"  placeholder="<?php _e('Your Message (required)','aletheme');?>"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
            <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>"/>
          <?php wp_nonce_field() ?>
        </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Map -->
<?php if (ale_get_meta('site_address')) {?>
  <section class="map">
    <?php echo do_shortcode('[ale_map address="'.ale_get_meta('site_address').'" width="100%" height="400px"]')?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d90860.65863106427!2d33.984499373942135!3d44.629831331463585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1564050724479!5m2!1sru!2s" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
    <?php }?>
<?php get_footer(); ?>