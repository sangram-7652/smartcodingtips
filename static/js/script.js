document.addEventListener("DOMContentLoaded", () => {
  const contentDiv = document.getElementById("content");

  // Load default content
  fetch("pages/html/what-is-html.php")
    .then((res) => res.text())
    .then((html) => {
      contentDiv.innerHTML = html;
    });

  // Sidebar click
  const links = document.querySelectorAll("a[data-page]");
  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const page = this.getAttribute("data-page");

      // Fetch new content
      fetch(`pages/${page}`)
        .then((res) => res.text())
        .then((html) => {
          contentDiv.innerHTML = html;
        });

      // Update active class
      links.forEach((l) => l.classList.remove("font-bold"));
      this.classList.add("font-bold");
    });
  });
});


  // const toggleBtn = document.getElementById('themeToggle');
  // const html = document.documentElement;

  // if (localStorage.getItem('theme') === 'dark') {
  //   html.classList.add('dark');
  //   toggleBtn.textContent = '☀️';
  // }

  // toggleBtn.addEventListener('click', () => {
  //   html.classList.toggle('dark');
  //   const isDark = html.classList.contains('dark');
  //   localStorage.setItem('theme', isDark ? 'dark' : 'light');
  //   toggleBtn.textContent = isDark ? '☀️' : '🌙';
  // });