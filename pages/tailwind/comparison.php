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
            <li class="text-gray-500">Tailwind vs Bootstrap vs Custom CSS</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind vs Bootstrap vs Custom CSS</h1>
        <p class="text-lg mb-4">
            Choosing the right styling method can significantly impact your workflow, performance, and maintainability. Let's break down how Tailwind CSS compares to Bootstrap and traditional Custom CSS.
        </p>

        <!-- Philosophy -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Design Philosophy</h2>
            <div class="text-lg">
                <p><strong>Tailwind:</strong> Utility-first – build your UI by composing small utility classes.</p>
                <p><strong>Bootstrap:</strong> Component-based – use pre-built components and override as needed.</p>
                <p><strong>Custom CSS:</strong> You define all rules from scratch – full control but more setup.</p>
            </div>
        </section>

        <!-- Code Comparison -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Code Comparison Example</h2>
            <p class="text-lg mb-2">Here’s how you would build the same button:</p>
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <h3 class="font-semibold mb-1">Tailwind</h3>
                    <pre class="bg-gray-100 p-3 rounded text-sm overflow-x-auto">
&lt;button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"&gt;
    Click Me
&lt;/button&gt;
                    </pre>
                </div>
                <div>
                    <h3 class="font-semibold mb-1">Bootstrap</h3>
                    <pre class="bg-gray-100 p-3 rounded text-sm overflow-x-auto">
&lt;button class="btn btn-primary"&gt;
    Click Me
&lt;/button&gt;
                    </pre>
                </div>
                <div>
                    <h3 class="font-semibold mb-1">Custom CSS</h3>
                    <pre class="bg-gray-100 p-3 rounded text-sm overflow-x-auto">
&lt;button class="custom-btn"&gt;
    Click Me
&lt;/button&gt;

/* CSS */
.custom-btn {
    background: #3490dc;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
}
                    </pre>
                </div>
            </div>
        </section>

        <!-- Pros and Cons -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Pros and Cons</h2>
            <div class="grid md:grid-cols-3 gap-6 text-lg">
                <div>
                    <h3 class="font-bold mb-2 text-blue-700">Tailwind</h3>
                    <ul class="list-disc list-inside">
                        <li>Highly customizable</li>
                        <li>Fast prototyping</li>
                        <li>Requires no context switching</li>
                        <li>Steeper initial learning curve</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2 text-purple-700">Bootstrap</h3>
                    <ul class="list-disc list-inside">
                        <li>Quick to start</li>
                        <li>Well-documented</li>
                        <li>Opinionated design system</li>
                        <li>Harder to customize deeply</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2 text-gray-700">Custom CSS</h3>
                    <ul class="list-disc list-inside">
                        <li>Maximum control</li>
                        <li>Reusable class names</li>
                        <li>Time-consuming to set up</li>
                        <li>Easy to get inconsistent</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Use Case Recommendation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Which One Should You Use?</h2>
            <ul class="list-disc list-inside text-lg">
                <li><strong>Use Tailwind</strong> if you prefer flexibility and fast iteration, especially in component-based frameworks.</li>
                <li><strong>Use Bootstrap</strong> for quick prototyping or when a pre-built system is needed.</li>
                <li><strong>Use Custom CSS</strong> when you need total control and performance isn’t your biggest constraint.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind, Bootstrap, and Custom CSS all have their place. The best choice depends on your project goals, team experience, and how much customization and scalability you need.
            </p>
        </section>

        <!-- Next Link -->
        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/installation" class="text-blue-600 hover:underline">Installing Tailwind via CDN and NPM →</a></p>
        </div>
    </article>
</main>
