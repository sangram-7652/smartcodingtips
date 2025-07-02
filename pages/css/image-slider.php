<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Image Slider</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Image Slider in CSS</h1>
        <p class="text-lg mb-4">
            An image slider (carousel) cycles through images with transitions. You can build a simple automatic or manual slider using just HTML and CSS — no JavaScript required!
        </p>

        <!-- HTML Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic HTML Structure</h2>
            <p class="text-lg mb-2">Use a container with multiple images inside a wrapper:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
<div class="slider">
    <div class="slides">
        <img src="img1.jpg" alt="Slide 1" />
        <img src="img2.jpg" alt="Slide 2" />
        <img src="img3.jpg" alt="Slide 3" />
    </div>
</div>
            </code></pre>
        </section>

        <!-- CSS Animation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. CSS for Auto Sliding</h2>
            <p class="text-lg mb-2">Use keyframes to automatically move images left to right:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.slider {
    width: 100%;
    max-width: 800px;
    overflow: hidden;
    border-radius: 10px;
    margin: auto;
}

.slides {
    display: flex;
    width: 300%;
    animation: slide 9s infinite;
}

.slides img {
    width: 100%;
    height: auto;
}

@keyframes slide {
    0%   { transform: translateX(0); }
    33%  { transform: translateX(-100%); }
    66%  { transform: translateX(-200%); }
    100% { transform: translateX(0); }
}
            </code></pre>
        </section>

        <!-- Manual Navigation (Optional) -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Optional: Manual Navigation</h2>
            <p class="text-lg mb-2">Use radio buttons and labels to control slides without JavaScript:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
<!-- Add hidden radio buttons and labels to control -->
<input type="radio" name="slider" id="slide1" checked hidden>
<input type="radio" name="slider" id="slide2" hidden>
<input type="radio" name="slider" id="slide3" hidden>

<div class="slider manual">
    <div class="slides">
        <img src="img1.jpg" />
        <img src="img2.jpg" />
        <img src="img3.jpg" />
    </div>
    <div class="nav-manual">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
    </div>
</div>
            </code></pre>
            <p class="text-lg mt-2">
                Then, use the <code>:checked</code> pseudo-class to change slides with CSS only.
            </p>
        </section>

        <!-- Tips & Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tips & Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use responsive units (<code>max-width</code>, <code>vw</code>) for mobile support.</li>
                <li>Add <code>object-fit: cover</code> to control image cropping.</li>
                <li>For long sliders, consider using JavaScript or libraries like Swiper.js.</li>
                <li>Always provide <code>alt</code> attributes for accessibility.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                CSS-only sliders are great for simple websites and portfolios. While more complex features need JavaScript, these sliders are fast and lightweight for basic needs.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="testimonial-slider.php" class="text-blue-600 hover:underline">Testimonial Slider →</a></p>
        </div>
    </article>
</main>
