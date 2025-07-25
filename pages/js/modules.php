<!-- JavaScript Basics - Spread & Rest Operators -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/spread-rest" class="text-blue-600 dark:text-blue-400 hover:underline">Spread & Rest</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Spread & Rest Operators in JavaScript</h1>

    <p class="mb-4">
        The <code>...</code> (three dots) operator is used in two main contexts:
        <strong>spread</strong> (expanding) and <strong>rest</strong> (gathering). Despite using the same syntax, they serve opposite purposes based on where they are used.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📤 Spread Operator</h2>
    <p class="mb-2">Used to expand elements from arrays or objects into individual elements.</p>

    <h3 class="text-xl font-semibold mt-4 mb-2">👉 Arrays:</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const arr1 = [1, 2, 3];
const arr2 = [...arr1, 4, 5];
console.log(arr2); // [1, 2, 3, 4, 5]</code></pre>

    <h3 class="text-xl font-semibold mt-4 mb-2">👉 Objects:</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const obj1 = { a: 1, b: 2 };
const obj2 = { ...obj1, c: 3 };
console.log(obj2); // { a: 1, b: 2, c: 3 }</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📥 Rest Operator</h2>
    <p class="mb-2">Used to collect the remaining values into an array or object.</p>

    <h3 class="text-xl font-semibold mt-4 mb-2">👉 Arrays:</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const [first, ...rest] = [10, 20, 30, 40];
console.log(first); // 10
console.log(rest);  // [20, 30, 40]</code></pre>

    <h3 class="text-xl font-semibold mt-4 mb-2">👉 Functions:</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>function sum(...numbers) {
    return numbers.reduce((acc, curr) => acc + curr, 0);
}
console.log(sum(1, 2, 3)); // 6</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Differences Summary</h2>
    <table class="table-auto border border-collapse w-full text-sm mb-6">
        <thead>
            <tr class="bg-gray-100  dark:text-black">
                <th class="border dark:border-black px-4 py-2 text-left">Operator</th>
                <th class="border dark:border-black px-4 py-2 text-left">Use Case</th>
                <th class="border dark:border-black px-4 py-2 text-left">Example Context</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Spread</td>
                <td class="border px-4 py-2">Expands items</td>
                <td class="border px-4 py-2">Arrays, objects, function arguments</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Rest</td>
                <td class="border px-4 py-2">Gathers items</td>
                <td class="border px-4 py-2">Destructuring, function parameters</td>
            </tr>
        </tbody>
    </table>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Use <code>...rest</code> to write flexible, dynamic functions and <code>...spread</code> to clone or combine data cleanly.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/spread-rest') ?>" class="hover:underline">← Previous: Spread & Rest</a>
    <a href="<?= base_url('js/callbacks') ?>" class="hover:underline ms-auto">Next: Callbacks →</a>
</div>

</main>
