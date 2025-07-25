<!-- JavaScript Basics - let & const -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/variables-let-const" class="text-blue-600 dark:text-blue-400 hover:underline">let & const</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Using <code>let</code> and <code>const</code> in JavaScript</h1>

    <p class="mb-4">
        In modern JavaScript (ES6+), <code>let</code> and <code>const</code> are preferred over <code>var</code> for declaring variables. They offer block scoping and help avoid bugs related to variable hoisting and redeclaration.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 <code>let</code> – Mutable Variable</h2>
    <p class="mb-2">Use <code>let</code> when the value of a variable might change later.</p>
    
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>let count = 0;
count = count + 1; // ✅ valid
console.log(count); // 1</code></pre>

    <p><strong>Scope:</strong> Block-scoped (within { ... })</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔒 <code>const</code> – Constant (Read-only)</h2>
    <p class="mb-2">Use <code>const</code> when the value should not be reassigned.</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const pi = 3.14;
pi = 3.1415; // ❌ Error: Assignment to constant variable</code></pre>

    <p><strong>Note:</strong> Objects and arrays declared with <code>const</code> can still be mutated:</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const user = { name: "John" };
user.name = "Jane"; // ✅ Allowed

const arr = [1, 2, 3];
arr.push(4); // ✅ Allowed</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Key Differences</h2>
    <table class="table-auto border border-collapse w-full text-sm mb-6">
        <thead>
            <tr class="bg-gray-100  dark:text-black">
                <th class="border dark:border-black px-4 py-2 text-left">Feature</th>
                <th class="border dark:border-black px-4 py-2 text-left">let</th>
                <th class="border dark:border-black px-4 py-2 text-left">const</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Reassignable</td>
                <td class="border px-4 py-2">✅ Yes</td>
                <td class="border px-4 py-2">❌ No</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Scope</td>
                <td class="border px-4 py-2">Block</td>
                <td class="border px-4 py-2">Block</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Hoisted</td>
                <td class="border px-4 py-2">Yes (not initialized)</td>
                <td class="border px-4 py-2">Yes (not initialized)</td>
            </tr>
        </tbody>
    </table>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 When to Use?</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>Use <code>const</code></strong> by default for safety.</li>
        <li><strong>Use <code>let</code></strong> if you know the variable will change.</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>Tip:</strong> Avoid <code>var</code> unless you're working in older environments or need function scope specifically.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/bubbling') ?>" class="hover:underline">← Previous: Bubbling vs Capturing</a>
    <a href="<?= base_url('js/destructuring') ?>" class="hover:underline ms-auto">Next: Destructuring →</a>
</div>

</main>
