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
            <li class="text-gray-500">DevTools for CSS</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using DevTools for CSS</h1>
        <p class="text-lg mb-4">
            Developer Tools (DevTools) in browsers like Chrome and Firefox are powerful for inspecting and editing CSS live, helping you debug layouts, check styles, and test changes quickly.
        </p>

        <!-- Opening DevTools -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. How to Open DevTools</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><strong>Windows/Linux:</strong> Press <code>F12</code> or <code>Ctrl + Shift + I</code></li>
                <li><strong>Mac:</strong> Press <code>Cmd + Option + I</code></li>
                <li>Right-click on any element and choose <strong>Inspect</strong></li>
            </ul>
        </section>

        <!-- Inspect Element -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Inspect and Edit CSS</h2>
            <p class="text-lg mb-2">Use the Elements panel to:</p>
            <ul class="list-disc list-inside text-lg">
                <li>See HTML and CSS side by side</li>
                <li>Click on an element to view and edit its styles</li>
                <li>Enable/disable CSS properties by checking/unchecking</li>
                <li>Live edit padding, margin, font, colors, etc.</li>
            </ul>
            <p class="text-lg mt-2">
                Changes made here are **temporary** and reset on refresh.
            </p>
        </section>

        <!-- Box Model View -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Box Model Visual</h2>
            <p class="text-lg mb-2">
                DevTools shows the CSS box model visually, helping you understand:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li>Padding, border, margin</li>
                <li>Element’s size and spacing</li>
                <li>Clicking each area highlights it live on the page</li>
            </ul>
        </section>

        <!-- Mobile View -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Responsive Design Mode</h2>
            <p class="text-lg mb-2">
                Click the 📱 icon (Device Toggle Toolbar) to:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li>Simulate different screen sizes</li>
                <li>Test breakpoints and media queries</li>
                <li>Rotate orientation or throttle network speeds</li>
            </ul>
        </section>

        <!-- Sources and Live Editing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Edit CSS Files Directly (Sources Panel)</h2>
            <p class="text-lg mb-2">
                In the <strong>Sources</strong> tab, you can:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li>Find and open CSS files</li>
                <li>Live edit them for previewing changes</li>
                <li>Use <code>Cmd/Ctrl + P</code> to search file by name</li>
            </ul>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Pro Tips</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Right-click on a style rule → “Copy Rule”</li>
                <li>Click the color box to use a color picker or change color format</li>
                <li>Use the filter in Styles pane to search properties</li>
                <li>Use the computed tab to see final styles (after all inheritance and cascade)</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                DevTools is an essential part of modern CSS development. It helps you test changes in real-time, debug layouts visually, and improve your workflow dramatically.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="css-debugging.php" class="text-blue-600 hover:underline">CSS Debugging Techniques →</a></p>
        </div>
    </article>
</main>
