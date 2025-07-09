<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Photo Gallery</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Photo Gallery in HTML & CSS</h1>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is a Photo Gallery?</h2>
            <p class=" mb-2">
                A photo gallery is a grid or layout of images displayed on a web page, often used to showcase photography, products, portfolios, or memories in an organized and visually appealing format.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Structure</h2>
            <p class=" mb-2">You can use a combination of HTML elements and CSS (Flexbox or Grid) to layout your gallery. Below is a simple example:</p>

            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap text-sm dark:bg-gray-900 dark:text-white"><code>
&lt;div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4"&gt;
  &lt;img src="img1.jpg" alt="Image 1" class="w-full h-auto rounded"&gt;
  &lt;img src="img2.jpg" alt="Image 2" class="w-full h-auto rounded"&gt;
  &lt;img src="img3.jpg" alt="Image 3" class="w-full h-auto rounded"&gt;
  &lt;img src="img4.jpg" alt="Image 4" class="w-full h-auto rounded"&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use descriptive <code>alt</code> attributes for accessibility and SEO.</li>
                <li>Compress images for faster page loading.</li>
                <li>Use a consistent aspect ratio (e.g., square or 3:2) for a clean layout.</li>
                <li>Consider adding hover effects or lightbox popups for a better user experience.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive Gallery with Tailwind</h2>
            <p class=" mb-2">Tailwind's grid utilities help create responsive galleries easily:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap text-sm dark:bg-gray-900 dark:text-white"><code>
&lt;div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"&gt;
  &lt;img src="gallery1.jpg" class="w-full rounded shadow"&gt;
  &lt;img src="gallery2.jpg" class="w-full rounded shadow"&gt;
  &lt;img src="gallery3.jpg" class="w-full rounded shadow"&gt;
  &lt;img src="gallery4.jpg" class="w-full rounded shadow"&gt;
&lt;/div&gt;
            </code></pre>
        </section>

         <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/contact-project" class="text-blue-600 hover:underline">Contact Us Form →</a></p>
        </div>
    </article>
</main>
