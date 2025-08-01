<?php
$title = "CSS Pricing Table Design | SmartCodingTips";
$description = "Create a responsive pricing table layout using Flexbox and CSS styling.";
$keywords = "css pricing table, pricing layout css, pricing card design, css ui projects";
?>

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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Pricing Table</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Pricing Table in CSS</h1>
        <p class=" mb-4">
            A pricing table showcases your product plans and features clearly. With CSS, you can create responsive, modern-looking pricing cards that are easy to scan and visually appealing.
        </p>

        <!-- Layout Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. HTML Structure</h2>
            <p class=" mb-2">Use a simple flex or grid layout for your pricing cards:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
<div class="pricing-table">
    <div class="pricing-card">
        <h3>Basic</h3>
        <p class="price">$9/mo</p>
        <ul>
            <li>1 Website</li>
            <li>Email Support</li>
            <li>1GB Storage</li>
        </ul>
        <button>Choose Plan</button>
    </div>
    <!-- Repeat for more plans -->
</div>
            </code></pre>
        </section>

        <!-- CSS Styling -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. CSS Styling</h2>
            <p class=" mb-2">Here's a basic responsive pricing table style using Flexbox:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.pricing-table {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.pricing-card {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 2rem;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    transition: transform 0.2s ease;
}

.pricing-card:hover {
    transform: translateY(-5px);
}

.pricing-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.pricing-card .price {
    font-size: 2rem;
    color: #2563eb;
    margin: 1rem 0;
}

.pricing-card ul {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.pricing-card ul li {
    margin: 0.5rem 0;
    color: #4b5563;
}

.pricing-card button {
    background-color: #2563eb;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
}
            </code></pre>
        </section>

        <!-- Highlighted Plan -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Highlight Featured Plan</h2>
            <p class=" mb-2">Use a special class to draw attention to the most popular plan:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.pricing-card.featured {
    border: 2px solid #2563eb;
    background-color: #f0f9ff;
}
            </code></pre>
        </section>

        <!-- Responsive Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Responsive Design Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>flex-wrap</code> to wrap cards on small screens.</li>
                <li>Use <code>max-width: 100%</code> for mobile friendliness.</li>
                <li>Reduce padding and font size on smaller devices.</li>
                <li>Test hover and click interactions on touch devices.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                A pricing table communicates your value clearly. With modern CSS, you can build responsive, accessible, and visually compelling plans that work well across all devices.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/portfolio-project') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Portfolio Project</a> 
   <a href="<?= base_url('css/navbar-project') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Animated Navbar →</a> 
</div>
    </article>
</main>
