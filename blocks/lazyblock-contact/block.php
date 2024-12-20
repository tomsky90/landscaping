 <section class="contact">
        <div class="contact__map-wrapper">
         <iframe
            class="contact__map"
            title="Google Map"
            loading="lazy"
            allowFullScreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.745116344609!2d-2.2367841847992817!3d53.47769997999268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1e6f4f53c3f%3A0xc001aa83b620c90!2sManchester%20M1!5e0!3m2!1sen!2suk!4v1620672014935!5m2!1sen!2suk"
            style="border: 0;"
            aria-hidden="false"
            tabIndex="0">
        </iframe>
        </div>
        <div class="contact__text-wrapper"> 
          <h2 class="contact__heading"><?php echo esc_html($attributes['contact-heading'])?></h2>
          <p class="contact__text">
           <?php echo esc_html($attributes['contact-text'])?>
          </p>
          <h3 class="contact__subheading"><?php echo esc_html($attributes['contact-subheading'])?></h3>
          <div class="contact__link-wrapper">
            <?php if(isset($attributes['contact-address-icon']['url'])) : ?>
              <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-address-icon']['url'])?>' alt="<?php echo esc_attr($attributes['contact-address-icon']['alt'])?>" />
            <?php endif ?>
            <p class="contact__link"><?php echo esc_html($attributes['contact-address'])?> </p>
          </div>
          <div class="contact__link-wrapper">
            <a class="contact__link" href="tel:078645723">
              <?php if(isset($attributes['contact-phone-icon']['url'])) : ?>
              <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-phone-icon']['url'])?>' alt="<?php echo esc_attr($attributes['contact-phone-icon']['alt'])?>" />
            <?php endif ?>
             <?php echo esc_html($attributes['contact-phone'])?>
            </a>
          </div>
          <div class="contact__link-wrapper">
            <a class="contact__link" href="mailto:hi@labella.com">
              <?php if(isset($attributes['contact-email-icon']['url'])) : ?>
              <img class="contact__link-icon" src='<?php echo esc_url($attributes['contact-email-icon']['url'])?>' alt="<?php echo esc_attr($attributes['contact-email-icon']['alt'])?>" />
            <?php endif ?>
            <?php echo esc_html($attributes['contact-email'])?>
            </a>
          </div>
        </div>
      </section>