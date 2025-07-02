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
            <li class="text-gray-500">Product Card</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Product Card in CSS</h1>
        <p class="text-lg mb-4">
            A product card displays an item with its image, title, price, and a call-to-action. These cards are a core part of any online store layout. You can build them easily with clean, responsive CSS.
        </p>

        <!-- HTML Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic HTML Structure</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
<div class="product-card">
    <img src="product.jpg" alt="Product Image">
    <div class="product-info">
        <h3>Wireless Headphones</h3>
        <p class="price">$49.99</p>
        <button>Add to Cart</button>
    </div>
</div>
            </code></pre>
        </section>

        <!-- CSS Styling -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. CSS Styling</h2>
            <p class="text-lg mb-2">Style the card with borders, shadows, and layout:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.product-card {
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    transition: transform 0.2s ease;
    background: white;
    max-width: 250px;
    text-align: center;
}

.product-card:hover {
    transform: translateY(-4px);
}

.product-card img {
    width: 100%;
    height: auto;
}

.product-info {
    padding: 1rem;
}

.product-info h3 {
    font-size: 1.25rem;
    margin: 0.5rem 0;
    color: #1f2937;
}

.product-info .price {
    font-weight: bold;
    color: #2563eb;
    margin-bottom: 1rem;
}

.product-info button {
    background-color: #2563eb;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
}
            </code></pre>
        </section>

        <!-- Responsive Grid Display -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Display in a Grid</h2>
            <p class="text-lg mb-2">Use CSS Grid to show multiple product cards:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    padding: 2rem 0;
}
            </code></pre>
        </section>

        <!-- Optional: Badge & Ratings -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Addons: Badge & Ratings</h2>
            <p class="text-lg mb-2">You can add a badge (e.g., "New") or star ratings with icons:</p>
            <ul class="list-disc list-inside text-lg">
                <li>Add a <code>position: absolute;</code> badge in top corner</li>
                <li>Use ⭐ emojis or SVG for star ratings</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Product cards are essential components in modern websites. With CSS, you can easily build stylish, interactive, and responsive product displays to enhance user engagement.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="product-card-hover.php" class="text-blue-600 hover:underline">Hover Effects for Product Cards →</a></p>
        </div>
    </article>
</main>
