<!-- footer.php -->
<footer class="bg-gray-900 dark:bg-gray-800 text-white mt-10">
  <div class="max-w-7xl mx-auto px-6 py-10 flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">

    <!-- Left: Brand Info -->
    <div class="text-center md:text-left">
      <h2 class="text-xl font-bold text-emerald-400">SmartCodingTips</h2>
      <p class="text-sm mt-1 text-gray-300">Learn Web Development with Simplicity and Clarity</p>
    </div>

    <!-- Center: Navigation Links -->
    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-300">
      <a href="about.php" class="hover:text-emerald-300 transition">About</a>
      <a href="contact.php" class="hover:text-emerald-300 transition">Contact</a>
      <a href="privacy-policy.php" class="hover:text-emerald-300 transition">Privacy Policy</a>
    </div>

    <!-- Right: Social Icons -->
    <div class="flex space-x-4 text-xl">
      <a href="#" class="hover:text-emerald-300" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="hover:text-emerald-300" aria-label="GitHub"><i class="fab fa-github"></i></a>
      <a href="#" class="hover:text-emerald-300" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
  </div>

  <!-- Copyright -->
  <div class="border-t border-gray-700 mt-6 pt-4 text-center text-sm text-gray-400">
    &copy; <?= date("Y"); ?> SmartCodingTips. All rights reserved.
  </div>
</footer>

<!-- Font Awesome (replace with your own kit) -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<!-- Scripts -->
<script src="static/js/script.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // 🌙 Theme Toggle
    const toggleBtn = document.getElementById("themeToggle");
    const html = document.documentElement;

    if (localStorage.getItem("theme") === "dark") {
      html.classList.add("dark");
      toggleBtn.textContent = "☀️";
    }

    toggleBtn?.addEventListener("click", () => {
      html.classList.toggle("dark");
      const isDark = html.classList.contains("dark");
      localStorage.setItem("theme", isDark ? "dark" : "light");
      toggleBtn.textContent = isDark ? "☀️" : "🌙";
    });

    // 📱 Mobile Navigation
    const mobileNavBtn = document.getElementById('mobile_nav');
    const closeBtn = document.getElementById('close_mobile_nav');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileNavBtn && closeBtn && mobileMenu) {
      mobileNavBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
      });

      closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });

      const menuLinks = mobileMenu.querySelectorAll('a');
      menuLinks.forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
        });
      });
    }

    // 📄 Dynamic Page Load (optional)
    const contentDiv = document.getElementById("content");
    if (contentDiv) {
      fetch("pages/html/what-is-html.php")
        .then((res) => res.text())
        .then((html) => {
          contentDiv.innerHTML = html;
        });

      const links = document.querySelectorAll("a[data-page]");
      links.forEach((link) => {
        link.addEventListener("click", function(e) {
          e.preventDefault();
          const page = this.getAttribute("data-page");

          fetch(`pages/${page}`)
            .then((res) => res.text())
            .then((html) => {
              contentDiv.innerHTML = html;
            });

          links.forEach((l) => l.classList.remove("font-bold"));
          this.classList.add("font-bold");
        });
      });
    }

    const toc = document.getElementById('mobileToc');
    const openTocBtn = document.getElementById('openToc');
    const closeTocBtn = document.getElementById('closeToc');

    let tocScrollY = sessionStorage.getItem('toc-scroll') || 0;

    // Restore scroll position when TOC is opened
    openTocBtn?.addEventListener('click', () => {
      toc.classList.remove('-translate-x-full');

      // Wait for animation to complete then restore scroll
      // After restoring sidebar
      setTimeout(() => {
        toc.scrollTop = tocScrollY;

        // Scroll the active link into view smoothly
        const activeLink = toc.querySelector('a.active');
        if (activeLink) {
          activeLink.scrollIntoView({
            behavior: 'smooth',
            block: 'center',
          });
        }
      }, 50); // match the sidebar open transition

    });

    // Save scroll position when closed manually
    closeTocBtn?.addEventListener('click', () => {
      tocScrollY = toc.scrollTop;
      sessionStorage.setItem('toc-scroll', tocScrollY);
      toc.classList.add('-translate-x-full');
    });

    // Save scroll position when any link is clicked (auto-close)
    toc.querySelectorAll('a')?.forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth < 768) {
          tocScrollY = toc.scrollTop;
          sessionStorage.setItem('toc-scroll', tocScrollY);
          toc.classList.add('-translate-x-full');
        }
      });
    });
  });
</script>

</body>

</html>