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
            <li class="text-gray-500">Input & Button Styling</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Input & Button Styling in CSS</h1>
        <p class=" mb-4">
            Inputs and buttons are essential UI elements in any form or interface. With CSS, you can transform their appearance to match your design while enhancing accessibility and interactivity.
        </p>

        <!-- Styling Inputs -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Styling Input Fields</h2>
            <p class=" mb-2">Basic input styling includes padding, borders, and focus states:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
input[type="text"],
input[type="email"],
input[type="password"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    width: 100%;
    font-size: 1rem;
}

input:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
}
            </code></pre>
        </section>

        <!-- Styling Buttons -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Styling Buttons</h2>
            <p class=" mb-2">Customize colors, padding, border-radius, and hover/focus effects:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
button {
    background-color: #2563eb;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

button:hover {
    background-color: #1d4ed8;
}

button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.4);
}
            </code></pre>
        </section>

        <!-- Disabled States -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Disabled States</h2>
            <p class=" mb-2">Style disabled inputs and buttons clearly to indicate interactivity:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
input:disabled,
button:disabled {
    background-color: #f3f4f6;
    color: #9ca3af;
    cursor: not-allowed;
    border-color: #d1d5db;
}
            </code></pre>
        </section>

        <!-- Input Icons or Adornments -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Input with Icons (Optional)</h2>
            <p class=" mb-2">You can style inputs with icons using relative/absolute positioning:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.input-wrapper {
    position: relative;
}

.input-wrapper input {
    padding-left: 2.5rem;
}

.input-wrapper .icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #9ca3af;
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Ensure sufficient contrast for accessibility.</li>
                <li>Use focus styles for keyboard navigation support.</li>
                <li>Minimize reliance on JavaScript for basic styling.</li>
                <li>Test on mobile devices for usability.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Well-styled inputs and buttons improve the user experience significantly. With just a few lines of CSS, you can create clean, modern, and accessible form components for any interface.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/dark-mode') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Dark Mode</a> 
   <a href="<?= base_url('css/form-layouts') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Form Layout →</a> 
</div>
    </article>
</main>
