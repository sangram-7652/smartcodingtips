<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Color Utilities and Custom Colors</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Color Utilities and Custom Colors in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS offers a rich set of utility classes for text, background, border, and ring colors — all easily customizable via the config file.
        </p>

        <!-- Text and Background Colors -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Text and Background Colors</h2>
            <p class=" mb-2">Tailwind provides predefined color classes like:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;p class="text-red-500"&gt;This is red text&lt;/p&gt;
&lt;div class="bg-blue-100 text-blue-800 p-4"&gt;Info box&lt;/div&gt;
            </pre>
            <div class="mt-3 space-y-2">
                <p class="text-red-500">This is red text</p>
                <div class="bg-blue-100 text-blue-800 p-4 rounded">Info box</div>
            </div>
        </section>

        <!-- Hover and Focus States -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Hover and Focus States</h2>
            <p class=" mb-2">You can change colors on interaction:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded"&gt;
    Submit
&lt;/button&gt;
            </pre>
            <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mt-2">Submit</button>
        </section>

        <!-- Customizing Colors -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Customizing Colors in Tailwind</h2>
            <p class=" mb-2">You can define your own palette in <code>tailwind.config.js</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colors: {
        brand: {
          light: '#3AB0FF',
          DEFAULT: '#0080FF',
          dark: '#0057B8',
        }
      }
    }
  }
}
            </pre>
            <p class=" mt-2">Then use it like this:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="bg-brand text-white p-4"&gt;Brand Primary Background&lt;/div&gt;
            </pre>
        </section>

        <!-- Color Opacity -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Color Opacity</h2>
            <p class=" mb-2">Tailwind supports color opacity using <code>/</code> notation:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="bg-red-500/30 p-4"&gt;Light red background&lt;/div&gt;
&lt;p class="text-blue-700/80"&gt;Faded blue text&lt;/p&gt;
            </pre>
            <div class="mt-2 space-y-2">
                <div class="bg-red-500/30 p-4 rounded">Light red background</div>
                <p class="text-blue-700/80">Faded blue text</p>
            </div>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Stick to a defined color palette for brand consistency</li>
                <li>Use <code>text-opacity</code> and <code>bg-opacity</code> with Tailwind v2, or <code>/opacity</code> in v3+</li>
                <li>Keep accessibility in mind — ensure good contrast ratios</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind’s color utilities help you build beautiful, consistent UIs quickly — and you can fully customize them to match your brand.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/text-truncate') ?>" class="hover:underline">← Previous: Text Truncation, Clamping</a>
  <a href="<?= base_url('tailwind/colors-bg') ?>" class="hover:underline ms-auto">Next: Text and Background Colors →</a>
</div>
    </article>
</main>
