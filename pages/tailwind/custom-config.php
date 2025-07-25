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
            <li class="text-gray-500">Tailwind Config File</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind Config File (`tailwind.config.js`)</h1>
        <p class=" mb-4">
            The `tailwind.config.js` file is where you customize and extend Tailwind’s default design system. You can define colors, breakpoints, fonts, and more to match your design needs.
        </p>

        <!-- Creating the Config File -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Creating the Config File</h2>
            <p class=" mb-2">Generate the file using the CLI:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
npx tailwindcss init
            </code></pre>
            <p class=" mt-2">This will create a minimal config file:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}
            </code></pre>
        </section>

        <!-- Adding Content Paths -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Specify Content Sources</h2>
            <p class=" mb-2">Update the <code>content</code> array with paths to your HTML/JS files so Tailwind can purge unused styles:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
content: [
  "./index.html",
  "./src/**/*.{js,ts,jsx,tsx,php}"
],
            </code></pre>
        </section>

        <!-- Extending the Theme -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Customizing the Theme</h2>
            <p class=" mb-2">You can add custom colors, spacing, fonts, and more inside <code>theme.extend</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
theme: {
  extend: {
    colors: {
      primary: '#1D4ED8',
      secondary: '#9333EA',
    },
    spacing: {
      '72': '18rem',
      '84': '21rem',
    },
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
    }
  }
}
            </code></pre>
        </section>

        <!-- Enabling Dark Mode -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Dark Mode Settings</h2>
            <p class=" mb-2">Enable dark mode using either <code>'media'</code> or <code>'class'</code> strategy:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
darkMode: 'class', // or 'media'
            </code></pre>
            <p class=" mt-2">Use <code>dark:</code> utilities in your HTML to style for dark mode.</p>
        </section>

        <!-- Adding Plugins -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">5. Adding Plugins</h2>
            <p class=" mb-2">Add official or custom plugins under the <code>plugins</code> array:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
plugins: [
  require('@tailwindcss/forms'),
  require('@tailwindcss/typography'),
]
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                The Tailwind config file is a powerful way to customize the design system for your project. Tailor every aspect of your styles while keeping your HTML clean and consistent.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/forms-validation') ?>" class="hover:underline">← Previous: Interactive Forms with Validation Styling</a>
  <a href="<?= base_url('tailwind/extending') ?>" class="hover:underline ms-auto">Next: Extending Colors, Fonts, Breakpoints →</a>
</div>
    </article>
</main>
