<!-- JavaScript Arrays and Methods -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/arrays-methods" class="text-blue-600 hover:underline">Arrays & Methods</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Arrays and Common Methods in JavaScript</h1>

    <p class="mb-4">
        Arrays are used to store multiple values in a single variable. JavaScript provides many built-in methods to manipulate arrays efficiently.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Creating Arrays</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let fruits = ["apple", "banana", "cherry"];
let numbers = new Array(1, 2, 3, 4);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Looping Through Arrays</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>for (let i = 0; i &lt; fruits.length; i++) {
    console.log(fruits[i]);
}

fruits.forEach(function(item) {
    console.log(item);
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Useful Array Methods</h2>

    <ul class="list-disc list-inside mb-4">
        <li><code>push()</code> – Add to end</li>
        <li><code>pop()</code> – Remove from end</li>
        <li><code>shift()</code> – Remove from start</li>
        <li><code>unshift()</code> – Add to start</li>
        <li><code>indexOf()</code> – Find index of item</li>
        <li><code>includes()</code> – Check if value exists</li>
        <li><code>slice()</code> – Get part of array</li>
        <li><code>splice()</code> – Add/remove at index</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let colors = ["red", "green", "blue"];
colors.push("yellow");  // ["red", "green", "blue", "yellow"]
colors.splice(1, 1);    // ["red", "blue", "yellow"]
console.log(colors.includes("blue")); // true</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Higher-Order Methods</h2>
    <p class="mb-4">These are especially powerful when working with data:</p>

    <ul class="list-disc list-inside mb-4">
        <li><code>map()</code> – Transform each element</li>
        <li><code>filter()</code> – Select elements based on condition</li>
        <li><code>reduce()</code> – Accumulate a value</li>
        <li><code>find()</code> – Find first matching element</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let nums = [1, 2, 3, 4, 5];

let doubled = nums.map(n =&gt; n * 2);      // [2, 4, 6, 8, 10]
let evens = nums.filter(n =&gt; n % 2 === 0); // [2, 4]
let total = nums.reduce((sum, n) =&gt; sum + n, 0); // 15</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Arrays in JavaScript are flexible and dynamic. You can mix data types, nest arrays, and use them like lists or stacks.
    </div>

</main>
