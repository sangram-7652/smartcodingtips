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
            <li class="text-gray-500">Hover, Focus, Active, Visited</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Hover, Focus, Active, Visited in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind uses variant prefixes like <code>hover:</code>, <code>focus:</code>, <code>active:</code>, and <code>visited:</code> to apply styles under specific interaction states. These help you create interactive, accessible, and responsive UIs with ease.
        </p>

        <!-- Hover State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Hover State</h2>
            <p class=" mb-2">Use <code>hover:</code> to style elements when hovered:</p>
            <div class="mb-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Hover Me
                </button>
            </div>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded"&gt;
    Hover Me
&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Focus State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Focus State</h2>
            <p class=" mb-2">Use <code>focus:</code> to style focused form elements:</p>
            <input type="text" placeholder="Focus me" class="border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-700">
        </section>

        <!-- Active State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Active State</h2>
            <p class=" mb-2">Use <code>active:</code> for when an element is pressed:</p>
            <div class="mb-2">
                <button class="bg-green-500 active:bg-green-700 text-white px-4 py-2 rounded">
                    Press Me
                </button>
            </div>
        </section>

        <!-- Visited State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Visited State</h2>
            <p class=" mb-2">Use <code>visited:</code> to change the style of links after visiting:</p>
            <a href="https://example.com" target="_blank" class="text-blue-600 dark:text-blue-400 visited:text-purple-600 underline">
                Visit Example.com
            </a>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>focus:</code> styles for accessibility and keyboard navigation.</li>
                <li><code>hover:</code> helps indicate interactivity on buttons and links.</li>
                <li><code>active:</code> provides tactile feedback.</li>
                <li>Don't rely only on color for state indication — add icons, shadows, etc.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind makes it easy to apply interactive states through simple prefixes. With consistent use of <code>hover:</code>, <code>focus:</code>, <code>active:</code>, and <code>visited:</code>, you can enhance user interaction and accessibility.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/opacity') ?>" class="hover:underline">← Previous: Box Shadows and Opacity Control</a>
  <a href="<?= base_url('tailwind/states-group') ?>" class="hover:underline ms-auto">Next: Group Hover, Focus Within →</a>
</div>
    </article>
</main>
