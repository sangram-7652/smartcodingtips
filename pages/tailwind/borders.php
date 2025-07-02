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
            <li class="text-gray-500">Border and Radius</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Borders and Border Radius in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind provides utility classes to control border width, color, and corner radius, allowing for quick and flexible styling of element outlines and rounded corners.
        </p>

        <!-- Border Width -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Border Width</h2>
            <p class="text-lg mb-2">Use classes like <code>border</code>, <code>border-2</code>, <code>border-4</code>, etc. to define thickness:</p>
            <div class="flex gap-4">
                <div class="border border-gray-400 p-4 rounded">border</div>
                <div class="border-4 border-gray-400 p-4 rounded">border-4</div>
                <div class="border-t-4 border-blue-400 p-4">Top Border</div>
            </div>
        </section>

        <!-- Border Color -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Border Color</h2>
            <p class="text-lg mb-2">Apply border color using <code>border-{color}</code> classes:</p>
            <div class="flex gap-4">
                <div class="border-2 border-red-500 p-4 rounded">Red Border</div>
                <div class="border-2 border-green-500 p-4 rounded">Green Border</div>
                <div class="border-2 border-blue-500 p-4 rounded">Blue Border</div>
            </div>
        </section>

        <!-- Border Radius -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Border Radius</h2>
            <p class="text-lg mb-2">Control rounding with classes like <code>rounded</code>, <code>rounded-lg</code>, <code>rounded-full</code>:</p>
            <div class="flex gap-4">
                <div class="border border-gray-400 p-4 rounded">rounded</div>
                <div class="border border-gray-400 p-4 rounded-lg">rounded-lg</div>
                <div class="border border-gray-400 p-4 rounded-full">rounded-full</div>
            </div>
        </section>

        <!-- Individual Corners -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Individual Corners</h2>
            <p class="text-lg mb-2">Tailwind also allows rounding specific corners:</p>
            <div class="flex gap-4">
                <div class="border p-4 rounded-t-lg">Top Rounded</div>
                <div class="border p-4 rounded-bl-lg">Bottom-Left Rounded</div>
                <div class="border p-4 rounded-tr-full">Top-Right Full</div>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use <code>rounded</code> consistently to create visual softness</li>
                <li>Combine border color with background contrast</li>
                <li>Use <code>rounded-full</code> for circles or avatars</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind's border utilities give you complete control over element outlines and rounded edges without writing custom CSS. Great for cards, buttons, avatars, and layout boxes.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/ring-shadow" class="text-blue-600 hover:underline">Ring, Divide, Shadows →</a></p>
        </div>
    </article>
</main>
