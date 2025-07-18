<!-- JavaScript Basics - Spread & Rest Operators -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/spread-rest" class="text-blue-600 hover:underline">Spread & Rest</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Spread & Rest Operators in JavaScript</h1>

    <p class="mb-4">
        JavaScript uses the same syntax (`...`) for both **spread** and **rest** operators, but they serve opposite purposes:
    </p>

    <ul class="list-disc list-inside mb-6">
        <li><strong>Spread:</strong> Expands arrays or objects</li>
        <li><strong>Rest:</strong> Collects remaining items into an array</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧨 Spread Operator</h2>
    <p class="mb-2">Used to copy or expand iterable values like arrays or objects.</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const arr1 = [1, 2, 3];
const arr2 = [...arr1, 4, 5]; 
console.log(arr2); // [1, 2, 3, 4, 5]

const obj1 = { name: "Alice" };
const obj2 = { ...obj1, age: 30 };
console.log(obj2); // { name: "Alice", age: 30 }</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📥 Rest Operator</h2>
    <p class="mb-2">Used in function parameters or destructuring to group remaining values into an array.</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function sum(...nums) {
    return nums.reduce((a, b) => a + b, 0);
}
console.log(sum(1, 2, 3)); // 6</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧩 Rest in Destructuring</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const [first, ...rest] = [10, 20, 30, 40];
console.log(first); // 10
console.log(rest);  // [20, 30, 40]

const { a, ...others } = { a: 1, b: 2, c: 3 };
console.log(others); // { b: 2, c: 3 }</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Combining Spread with Functions</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const numbers = [4, 5, 6];
console.log(Math.max(...numbers)); // 6</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>Quick Recap:</strong>
        <ul class="list-disc list-inside mt-2">
            <li><code>...spread</code> → expands values</li>
            <li><code>...rest</code> → collects leftovers</li>
        </ul>
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/modules" class="text-blue-600 hover:underline">Modules: import/export →</a></p>
</div>
</main>
