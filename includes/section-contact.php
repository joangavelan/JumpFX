<?php    
  $upload_dir = wp_upload_dir();
?>

<section class="contact">
  <div class="content-wrapper">
    <div class="contact__heading">
      <div class="sub-heading dark">Get in touch</div>
      <div class="border-gradient"></div>
      <p>We can't wait to hear from you</p>
    </div>
    <div class="contact__details">
      <!-- contact details -->
      <div class="contact__detail">
        <img src="<?=$upload_dir['baseurl'];?>/2021/04/1457414917_map-location-pin-map-marker-glyph.png" alt="location icon">
        <address>225 N Dithridge<br> St Pittsburgh, PA, 15213</address>
      </div>
      <div class="contact__detail">
        <img src="<?=$upload_dir['baseurl'];?>/2021/04/1485214922_common-email-envelope-mail-glyph.png" alt="mail icon">
        <p>pena@jumpeffects.com</p>
      </div>
      <div class="contact__detail">
        <img src="<?=$upload_dir['baseurl'];?>/2021/04/1470264055_09.png" alt="tel icon">
        <p>443 - 812 - 3396</p>
      </div>
      <div class="contact__detail">
        <img src="<?=$upload_dir['baseurl'];?>/2021/04/calendar.png" alt="calendar icon">
        <p>Monday - Friday: 8 am - 6 pm</p>
      </div>
    </div>
    <!-- form -->
    <form class="contact__form">
      <!-- name -->
      <div class="contact__form-entry name">
        <label for="name">Name:</label>
        <input type="text" id="name" email="name">
      </div>
      <!-- email -->
      <div class="contact__form-entry email">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
      <!-- tel -->
      <div class="contact__form-entry phone">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <!-- message -->
      <div class="contact__form-entry textarea">
        <label for="message">Textarea:</label>
        <textarea id="message" name="message" rows="4" cols="50"></textarea>
      </div>
      <!-- submit -->
      <div class="contact__form-submit">
        <input type="submit" class="btn-primary"  value="Schedule A Free Call">
      </div>
      <!-- calendar -->
      <img class="contact__form-calendar" src="<?=$upload_dir['baseurl'];?>/2021/04/calendar-contact-form.png" alt="calendar">
    </form>
  </div>
</section>