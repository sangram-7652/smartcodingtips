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
            <li class="text-gray-500">Form Layout</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Form Layout in CSS</h1>
        <p class=" mb-4">
            Creating clean, user-friendly form layouts is a crucial part of web design. CSS makes it easy to organize and align form elements using techniques like flexbox, grid, spacing, and labels.
        </p>

        <!-- Single Column Layout -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Single Column Form</h2>
            <p class=" mb-2">A simple vertical layout, perfect for mobile devices:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 500px;
    margin: auto;
}
label {
    font-weight: 600;
}
input, select, textarea {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}
            </code></pre>
        </section>

        <!-- Two-Column Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Two-Column Layout Using Grid</h2>
            <p class=" mb-2">Great for desktop forms with grouped fields:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}
.form-grid .full-width {
    grid-column: 1 / -1;
}
            </code></pre>
            <p class=" mt-2">
                Add a class like <code>.full-width</code> to span both columns for larger fields like textareas.
            </p>
        </section>

        <!-- Inline Form Elements -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Inline Inputs & Buttons</h2>
            <p class=" mb-2">Useful for search bars or compact login forms:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.inline-form {
    display: flex;
    gap: 10px;
    align-items: center;
}
.inline-form input {
    flex: 1;
}
            </code></pre>
        </section>

        <!-- Fieldset and Legend -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Using <code>&lt;fieldset&gt;</code> and <code>&lt;legend&gt;</code></h2>
            <p class=" mb-2">These help group related form fields semantically and visually:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
fieldset {
    border: 1px solid #ddd;
    padding: 1rem;
    border-radius: 6px;
}
legend {
    font-weight: bold;
    padding: 0 10px;
}
            </code></pre>
        </section>

        <!-- Responsive Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Responsive Form Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>max-width</code> and <code>width: 100%</code> to make inputs fluid.</li>
                <li>Switch to a single-column layout on smaller screens.</li>
                <li>Use <code>gap</code> or margins to separate fields.</li>
                <li>Ensure labels and inputs are clearly paired for accessibility.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                A well-structured form layout improves usability and accessibility. With CSS Grid, Flexbox, and simple styling, you can build responsive forms that look great on all devices.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="form-validation-styling.php" class="text-blue-600 hover:underline">Form Validation Styling →</a></p>
        </div>
    </article>
</main>
