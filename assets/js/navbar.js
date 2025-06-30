 // Get DOM elements
    const hamburger = document.getElementById("hamburger");
    const mobileDrawer = document.getElementById("mobileDrawer");
    const drawerOverlay = document.getElementById("drawerOverlay");
    const closeBtn = document.getElementById("closeBtn");
    const drawerLinks = document.querySelectorAll(".drawer-link");

    // Function to open drawer
    function openDrawer() {
      console.log("Opening drawer"); // Debug log
      hamburger.classList.add("active");
      mobileDrawer.classList.add("active");
      drawerOverlay.classList.add("active");
      document.body.style.overflow = "hidden";
    }

    // Function to close drawer
    function closeDrawer() {
      console.log("Closing drawer"); // Debug log
      hamburger.classList.remove("active");
      mobileDrawer.classList.remove("active");
      drawerOverlay.classList.remove("active");
      document.body.style.overflow = "auto";
    }

    // Event listeners
    hamburger.addEventListener("click", openDrawer);
    closeBtn.addEventListener("click", closeDrawer);
    drawerOverlay.addEventListener("click", closeDrawer);

    // Close drawer when clicking on navigation links
    drawerLinks.forEach((link) => {
      link.addEventListener("click", closeDrawer);
    });

    // Close drawer on escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && mobileDrawer.classList.contains("active")) {
        closeDrawer();
      }
    });

    // Add navbar scroll effect
    let lastScrollTop = 0;
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > 10) {
        navbar.style.boxShadow = "0 2px 20px rgba(0, 0, 0, 0.1)";
      } else {
        navbar.style.boxShadow = "none";
      }

      lastScrollTop = scrollTop;
    });