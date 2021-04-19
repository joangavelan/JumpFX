<?php wp_footer(); ?>

<?php $upload_dir = wp_upload_dir();?>

    </main>
    <footer class="footer">
      <div class="footer__content">
        <div class="footer__logo">
          <img src="<?=$upload_dir['baseurl'];?>/2021/04/jumpfx-logo.png" alt="jumppx logo">      
        </div>
        <div class="footer__social">
          <img src="<?=$upload_dir['baseurl'];?>/2021/04/1476331110_facebook.png" alt="fb icon">      
          <img src="<?=$upload_dir['baseurl'];?>/2021/04/1476331119_linkedin2.png" alt="linkedin icon">      
        </div>
        <nav class="footer__nav" aria-label="footer-nav">
          <a href="#">Contact Us</a>
          <a href="#">Sitemap</a>
          <a href="#">Blog</a>
          <a href="#">Services</a>
          <a href="#">Our Team</a>
          <a href="#">Mission and Values</a>
          <a href="#">Testimonials</a>
          <a href="#">FAQs</a>
        </nav>
        <div class="footer__contact">
          <p class="footer__contact-tel">443 - 812 - 3396</p>
          <p class="footer__contact-email">pena@jumpeffects.com</p>
        </div>
        <p class="footer__copyright">© 2018 Jump FX Digital Marketing ®. All Rights Reserved.</p>
        <nav class="footer__legal-pages" aria-label="legal-pages">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Earnings Disclaimer</a>
          <a href="#">Risk Aversion Policy</a>
          <a href="#">Facebook Disclaimer</a>
        </nav>
      </div>
    </footer>
</body>
</html> 