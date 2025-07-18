<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/project-slider" class="text-blue-600 hover:underline">Image Slider</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🖼️ JavaScript Project: Image Slider</h1>

  <p class="mb-4">
    Let's build a simple and responsive image slider (carousel) using plain JavaScript and a bit of CSS. This project teaches DOM manipulation, event handling, and working with dynamic content.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📦 HTML Structure</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white mb-4"><code>&lt;div class="slider-container"&gt;
  &lt;div class="slides"&gt;
    &lt;img src="img1.jpg" class="slide active"&gt;
    &lt;img src="img2.jpg" class="slide"&gt;
    &lt;img src="img3.jpg" class="slide"&gt;
  &lt;/div&gt;
  &lt;button class="prev">&#10094;&lt;/button&gt;
  &lt;button class="next">&#10095;&lt;/button&gt;
&lt;/div&gt;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🎨 CSS Styles</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white mb-4"><code>.slider-container {
  position: relative;
  max-width: 700px;
  margin: auto;
  overflow: hidden;
}
.slides img {
  width: 100%;
  display: none;
}
.slide.active {
  display: block;
}
button.prev, button.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  color: white;
  border: none;
  padding: 12px;
  cursor: pointer;
}
.prev { left: 0; }
.next { right: 0; }</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ JavaScript Functionality</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white mb-4"><code>const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide, i) =&gt; {
    slide.classList.remove("active");
    if (i === index) slide.classList.add("active");
  });
}

nextBtn.addEventListener("click", () =&gt; {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
});

prevBtn.addEventListener("click", () =&gt; {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(currentSlide);
});

// Auto Slide (Optional)
setInterval(() =&gt; {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}, 5000);

showSlide(currentSlide);</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✨ Features to Add</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Auto-play toggle</li>
    <li>Dots navigation</li>
    <li>Keyboard navigation support</li>
    <li>Swipe support for mobile (touch events)</li>
  </ul>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded">
    💡 <strong>Tip:</strong> Use royalty-free images from sites like <a href="https://unsplash.com" class="underline text-blue-700" target="_blank">Unsplash</a> for demo.
  </div>

  <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/project-quiz-2" class="text-blue-600 hover:underline">Advanced Quiz →</a></p>
</div>
</main>
