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
            <li class="text-gray-500">Installing Tailwind via CDN and NPM</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Installing Tailwind via CDN and NPM</h1>
        <p class=" mb-4">
            Tailwind CSS can be installed in multiple ways based on your project type and workflow. The two most popular methods are using a CDN (quick & simple) or installing via NPM (powerful & customizable).
        </p>

        <!-- CDN Installation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using CDN (Quick Setup)</h2>
            <p class=" mb-2">
                This is ideal for quick experiments or small static projects. Just include this CDN link in your HTML:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
            </pre>
            <p class=" mt-2">
                You can also customize Tailwind using the CDN’s <code>tailwind.config</code> like this:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;script&gt;
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1E40AF',
                }
            }
        }
    }
&lt;/script&gt;
            </pre>
        </section>

        <!-- NPM Installation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using NPM (Recommended for Production)</h2>
            <p class=" mb-2">
                NPM installation gives you full control, custom builds, and enables features like PurgeCSS. Here's how to set it up:
            </p>

            <!-- Step-by-step -->
            <ol class="list-decimal list-inside  space-y-2 mb-4">
                <li>Initialize your project:
                    <pre class="bg-gray-100 p-3 rounded text-sm dark:bg-gray-900 dark:text-white">npm init -y</pre>
                </li>
                <li>Install Tailwind via NPM:
                    <pre class="bg-gray-100 p-3 rounded text-sm dark:bg-gray-900 dark:text-white">npm install -D tailwindcss</pre>
                </li>
                <li>Create config files:
                    <pre class="bg-gray-100 p-3 rounded text-sm dark:bg-gray-900 dark:text-white">npx tailwindcss init</pre>
                </li>
                <li>Create a CSS file and include Tailwind directives:
                    <pre class="bg-gray-100 p-3 rounded text-sm dark:bg-gray-900 dark:text-white">
@tailwind base;
@tailwind components;
@tailwind utilities;
                    </pre>
                </li>
                <li>Build your CSS using Tailwind CLI:
                    <pre class="bg-gray-100 p-3 rounded text-sm dark:bg-gray-900 dark:text-white">
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
                    </pre>
                </li>
            </ol>

            <p class="">
                Now link your <code>output.css</code> file in your HTML and you're ready to go!
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Use the CDN for quick testing and learning. For real-world projects, always prefer the NPM setup to unlock Tailwind’s full potential and customization power.
            </p>
        </section>

        <!-- Next Link -->
        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/comparison') ?>" class="hover:underline">← Previous: Tailwind vs Bootstrap vs Custom CSS</a>
  <a href="<?= base_url('tailwind/config-file') ?>" class="hover:underline">Next: Tailwind CLI and Configuration File →</a>
</div>
    </article>
</main>
