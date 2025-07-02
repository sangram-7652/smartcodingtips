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
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Tailwind CLI and Configuration File</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind CLI and Configuration File</h1>
        <p class="text-lg mb-4">
            Tailwind CLI is a powerful tool that lets you compile your CSS with Tailwind’s utility classes. It's fast, simple, and supports advanced features like theming and purging unused styles.
        </p>

        <!-- What is Tailwind CLI? -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. What is Tailwind CLI?</h2>
            <p class="text-lg mb-2">
                Tailwind CLI is a command-line tool for processing your input CSS file with Tailwind’s directives into a final output CSS. It's a great way to use Tailwind without setting up complex build tools.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
            </pre>
            <p class="text-lg mt-2">
                This tells Tailwind to watch your input CSS and update the output automatically when changes occur.
            </p>
        </section>

        <!-- Creating tailwind.config.js -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Creating a Configuration File</h2>
            <p class="text-lg mb-2">
                To enable customization (themes, plugins, variants), create a Tailwind configuration file:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
npx tailwindcss init
            </pre>
            <p class="text-lg mt-2">
                This generates a basic <code>tailwind.config.js</code> file:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}
            </pre>
        </section>

        <!-- Customizing Config -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Customizing Your Tailwind Build</h2>
            <p class="text-lg mb-2">You can add paths to your HTML/JS/PHP files so Tailwind only includes used styles:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
module.exports = {
  content: ["./*.html", "./src/**/*.{js,ts,php}"],
  theme: {
    extend: {
      colors: {
        primary: '#0f172a',
      },
      spacing: {
        '128': '32rem',
      },
    },
  },
  plugins: [],
}
            </pre>
            <p class="text-lg mt-2">
                This makes your CSS smaller, faster, and customized to your project.
            </p>
        </section>

        <!-- Advantages of Using Config -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Benefits of Configuration</h2>
            <ul class="list-disc list-inside text-lg space-y-1">
                <li>Extend default spacing, colors, fonts</li>
                <li>Add custom breakpoints and media queries</li>
                <li>Define dark mode strategy</li>
                <li>Install and configure plugins (forms, typography, etc.)</li>
                <li>Remove unused styles with PurgeCSS</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Using the Tailwind CLI and configuration file unlocks powerful customization and performance benefits. It’s the foundation for building scalable, maintainable Tailwind-based UI systems.
            </p>
        </section>

        <!-- Next Link -->
        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/utility-classes" class="text-blue-600 hover:underline">What Are Utility Classes? →</a></p>
        </div>
    </article>
</main>
