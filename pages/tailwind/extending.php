<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Extending Utilities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Extending Tailwind: Colors, Fonts & Breakpoints</h1>
        <p class=" mb-4">
            Tailwind lets you **extend the default design system** rather than override it. You can add new values for colors, fonts, spacing, screens, and more while preserving the base configuration.
        </p>

        <!-- Colors -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Add Custom Colors</h2>
            <p class=" mb-2">In your <code>tailwind.config.js</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  theme: {
    extend: {
      colors: {
        brand: {
          light: '#3AB0FF',
          DEFAULT: '#0084FF',
          dark: '#0057B8'
        }
      }
    }
  }
}
            </code></pre>
            <p class=" mt-2">Now you can use classes like <code>bg-brand</code> or <code>text-brand-dark</code> in your HTML.</p>
        </section>

        <!-- Fonts -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Add Custom Fonts</h2>
            <p class=" mb-2">Include a Google Font or local font, then add it to your config:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Inter"', 'sans-serif'],
        heading: ['"Poppins"', 'sans-serif']
      }
    }
  }
}
            </code></pre>
            <p class=" mt-2">Then apply with <code>class="font-heading"</code> or <code>font-sans</code>.</p>
        </section>

        <!-- Breakpoints -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Add or Override Breakpoints</h2>
            <p class=" mb-2">Define custom screens (breakpoints) to control responsiveness:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  theme: {
    extend: {
      screens: {
        'xs': '475px',
        '3xl': '1600px'
      }
    }
  }
}
            </code></pre>
            <p class=" mt-2">Use like <code>xs:text-sm</code> or <code>3xl:container</code>.</p>
        </section>

        <!-- Best Practices -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Tips & Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always use <code>extend</code> to avoid overwriting the default theme.</li>
                <li>Use descriptive names for your custom utilities.</li>
                <li>Consider extracting large themes into a separate file for cleaner config.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Extending Tailwind empowers you to create a design system that reflects your brand and layout preferences — while maintaining the utility-first workflow.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/custom-config') ?>" class="hover:underline">← Previous: Configuring Tailwind</a>
  <a href="<?= base_url('tailwind/css-variables') ?>" class="hover:underline">Next: Using :root CSS Variables →</a>
</div>
    </article>
</main>
