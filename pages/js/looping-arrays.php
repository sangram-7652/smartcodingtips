<!-- JavaScript Looping Through Arrays -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/array-looping" class="text-blue-600 hover:underline">Looping Through Arrays</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Looping Through Arrays in JavaScript</h1>

    <p class="mb-4">
        JavaScript provides multiple ways to loop through arrays, ranging from traditional loops to modern high-level functions.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Using a <code>for</code> Loop</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const fruits = ["apple", "banana", "cherry"];

for (let i = 0; i &lt; fruits.length; i++) {
    console.log(fruits[i]);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">➡️ Using <code>for...of</code> Loop</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>for (const fruit of fruits) {
    console.log(fruit);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Using <code>forEach()</code> Method</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>fruits.forEach(function(fruit, index) {
    console.log(index + ": " + fruit);
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 <code>map()</code> for Transformation</h2>
    <p class="mb-4">
        <code>map()</code> creates a new array by transforming each element.
    </p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const upperFruits = fruits.map(fruit =&gt; fruit.toUpperCase());
console.log(upperFruits); // ["APPLE", "BANANA", "CHERRY"]</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Avoid <code>for...in</code> with Arrays</h2>
    <p class="mb-4">
        <code>for...in</code> is meant for objects. It loops over keys and can include inherited properties.
    </p>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        ⚠️ <strong>Tip:</strong> Use <code>for...of</code> or <code>forEach()</code> for clean array iteration.
    </div>

</main>
