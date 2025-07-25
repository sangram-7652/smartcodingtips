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
            <li class="text-gray-500">Why Choose Utility-First Frameworks?</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Why Choose Utility-First Frameworks?</h1>
        <p class=" mb-4">
            Utility-first frameworks like Tailwind CSS offer a different approach to styling: instead of writing custom CSS for every element, you apply pre-built utility classes directly in your markup. This method dramatically speeds up development and increases consistency.
        </p>

        <!-- Core Idea -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. The Core Idea</h2>
            <p class=" mb-2">
                Utility classes are single-purpose, low-level classes that do one thing only — like <code>text-center</code> or <code>mt-4</code>. They eliminate the need to write separate CSS for layout and styling.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;div class="bg-white p-6 rounded shadow-md"&gt;
    &lt;h2 class="text-xl font-semibold mb-2"&gt;Hello World&lt;/h2&gt;
    &lt;p class="text-gray-600"&gt;This card is styled entirely with utilities.&lt;/p&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Benefits -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Key Benefits</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Faster Development:</strong> No need to jump between HTML and CSS files.</li>
                <li><strong>Consistency:</strong> Design tokens are reused consistently across the app.</li>
                <li><strong>Fewer CSS Files:</strong> Reduces the amount of custom CSS written.</li>
                <li><strong>Better Collaboration:</strong> Easier for teams to work together without overlapping styles.</li>
                <li><strong>Scalable:</strong> Works well in both small and large codebases.</li>
            </ul>
        </section>

        <!-- Misconceptions -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Common Misconceptions</h2>
            <ul class="list-disc list-inside ">
                <li><strong>“It's inline CSS”:</strong> Not true. Utility classes are atomic and reusable, unlike inline styles.</li>
                <li><strong>“Markup becomes messy”:</strong> It may look dense at first, but it's clear and scoped — no guessing where styles come from.</li>
                <li><strong>“It’s unsemantic”:</strong> Tailwind encourages writing semantic HTML and using utilities to style it.</li>
            </ul>
        </section>

        <!-- When It Shines -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. When Utility-First Works Best</h2>
            <p class=" mb-2">Utility-first frameworks are ideal when:</p>
            <ul class="list-disc list-inside ">
                <li>You build custom designs from scratch</li>
                <li>Your team wants to maintain design consistency</li>
                <li>You want to iterate and prototype quickly</li>
                <li>You’re working with component-based frameworks like React or Vue</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Utility-first frameworks help eliminate friction between design and development by offering direct control, consistent styling, and a faster workflow — all without sacrificing flexibility or maintainability.
            </p>
        </section>

        <!-- Next Link -->
      
        <div class="mt-4 flex justify-between flex-wrap gap-4 items-center text-blue-600 dark:text-blue-400 font-semibold">
            <div>
                <a href="<?= base_url('tailwind/what-is-tailwind') ?>" class="hover:underline">← Previous: What is Tailwind CSS?</a>
            </div>
          <div>
              <a href="<?= base_url('tailwind/comparison') ?>" class="hover:underline ms-auto">Next: Tailwind vs Bootstrap vs Custom CSS →</a>
          </div>
        </div>

    </article>
</main>