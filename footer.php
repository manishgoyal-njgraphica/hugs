<footer class="site-footer mt-16">
      <div class="footer-top">
        <div class="message">sometimes a hug is all your little one needs</div>

        <div class="contact-us">
          <a href="tel:+%201(212)%20255-511">
            <span class="phone-icon">
              <img src="./assets/images/phone.svg" />
            </span>
            <span class="pbmit-header-button-text-1">+91 (212)255-511</span>
          </a>
        </div>
      </div>
      <div class="footer-mid">
        <div class="footer-column logo-area">
          <img
            src="./assets/images/HUGS Logo Final PNG-01.png"
            alt="Logo"
            class="footer-logo"
          />

          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <div class="footer-column description-area">
          <h3>Inspiring Growth and Learning for your Child</h3>
          <div class="footer-links">
            <div>
              <h4>Quick Links</h4>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About </a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="for-parents.php">For Parents</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact-us.php">Contact</a></li>
              </ul>
            </div>
            <div>
              <h4>Get In Touch</h4>
              <p>
                +91 9845423366 <br />
                +91 9686637360 <br />
                +91 7829550276 <br /><br />

                info@hugscounselling.com
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="footer-left">
          <a href="#">Terms and conditions</a> | <a href="#">Privacy policy</a>
        </div>
        <div class="footer-right">© 2025 HUGS. All rights reserved.</div>
      </div>
    </footer>
  </body>
  <script>
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const tabId = button.getAttribute("data-tab");

        tabButtons.forEach((btn) => btn.classList.remove("active"));
        tabContents.forEach((content) => content.classList.remove("active"));

        button.classList.add("active");
        document.getElementById(tabId).classList.add("active");
      });
    });

    function toggleFAQ(element) {
        const allFaqs = document.querySelectorAll('.faq');
        const currentFaq = element.parentElement;

        allFaqs.forEach(faq => {
            if (faq !== currentFaq) {
                faq.classList.remove('active');
            }
        });
        currentFaq.classList.toggle('active');
    }
  </script>
</html>
