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
            <li class="text-gray-500">Custom Checkbox/Radio</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Custom Checkbox & Radio Buttons in CSS</h1>
        <p class="text-lg mb-4">
            Default checkboxes and radio buttons are hard to style. By hiding the native input and designing a custom visual element, you can build accessible and stylish form controls.
        </p>

        <!-- Basic Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. HTML Structure</h2>
            <p class="text-lg mb-2">Wrap your input with a label and add a <code>span</code> for the custom UI:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
<label class="custom-checkbox">
    <input type="checkbox" />
    <span class="checkmark"></span>
    Subscribe to newsletter
</label>
            </code></pre>
        </section>

        <!-- Custom Checkbox Styling -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Custom Checkbox CSS</h2>
            <p class="text-lg mb-2">Hide the native checkbox and style the <code>.checkmark</code>:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.custom-checkbox {
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    font-size: 1rem;
    gap: 0.5rem;
}

.custom-checkbox input {
    display: none;
}

.custom-checkbox .checkmark {
    width: 20px;
    height: 20px;
    background-color: #e2e8f0;
    border-radius: 4px;
    border: 2px solid #94a3b8;
    position: relative;
    transition: background 0.2s;
}

.custom-checkbox input:checked + .checkmark::after {
    content: '';
    position: absolute;
    left: 5px;
    top: 1px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    background: transparent;
}
.custom-checkbox input:checked + .checkmark {
    background-color: #2563eb;
    border-color: #2563eb;
}
            </code></pre>
        </section>

        <!-- Custom Radio Styling -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Custom Radio Buttons</h2>
            <p class="text-lg mb-2">The structure is similar—just use a circle:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
<label class="custom-radio">
    <input type="radio" name="gender" />
    <span class="radiomark"></span>
    Male
</label>
            </code></pre>

            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.custom-radio {
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    gap: 0.5rem;
}

.custom-radio input {
    display: none;
}

.custom-radio .radiomark {
    width: 18px;
    height: 18px;
    border: 2px solid #94a3b8;
    border-radius: 50%;
    background: #f1f5f9;
    position: relative;
}

.custom-radio input:checked + .radiomark::after {
    content: '';
    position: absolute;
    top: 4px;
    left: 4px;
    width: 8px;
    height: 8px;
    background: #2563eb;
    border-radius: 50%;
}
            </code></pre>
        </section>

        <!-- Accessibility Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Accessibility Tips</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Wrap <code>&lt;input&gt;</code> in a <code>&lt;label&gt;</code> for clickable access.</li>
                <li>Use <code>tabindex</code> or ARIA roles if doing complex customization.</li>
                <li>Never remove the actual <code>input</code>—just hide it visually.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Custom checkboxes and radio buttons allow for consistent styling across browsers while keeping the native functionality intact. Use them carefully with proper accessibility support.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="toggle-switch.php" class="text-blue-600 hover:underline">Custom Toggle Switch →</a></p>
        </div>
    </article>
</main>
