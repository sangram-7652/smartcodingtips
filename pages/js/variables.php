<!-- JavaScript Variables: var, let, const -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/variables" class="text-blue-600 hover:underline">JavaScript Variables</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Variables: <code>var</code>, <code>let</code>, and <code>const</code></h1>

    <p class="mb-4">
        In JavaScript, variables are used to store data values like numbers, strings, arrays, and objects. You can declare variables using <code>var</code>, <code>let</code>, or <code>const</code>. Let’s understand the differences and when to use each.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🪙 1. <code>var</code> – The Old Way</h2>
    <p class="mb-4">
        <code>var</code> was the original way to declare variables in JavaScript. It has function-level scope and can be redeclared.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>var name = "Alice";
console.log(name); // Alice

var name = "Bob";  // Redeclared
console.log(name); // Bob
</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li>Function-scoped</li>
        <li>Can be redeclared and reassigned</li>
        <li>Hoisted (but undefined at the top)</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2">🔒 2. <code>let</code> – The Modern Standard</h2>
    <p class="mb-4">
        <code>let</code> is block-scoped and prevents variable redeclaration.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let age = 25;
age = 26;      // ✅ Reassignment allowed

let age = 30;  // ❌ Error: Cannot redeclare
</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li>Block-scoped (works inside <code>{}</code>)</li>
        <li>Can be reassigned, but not redeclared in the same scope</li>
        <li>Also hoisted, but not initialized</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2">🧊 3. <code>const</code> – For Constants</h2>
    <p class="mb-4">
        <code>const</code> is also block-scoped and must be initialized when declared. The value cannot be reassigned.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const PI = 3.1416;
PI = 3.14; // ❌ Error: Assignment to constant variable

const user = { name: "Alice" };
user.name = "Bob"; // ✅ Allowed (object itself not reassigned)
</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li>Block-scoped</li>
        <li>Must be initialized</li>
        <li>Can't be reassigned, but object properties can change</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2">⚖️ Summary: When to Use What?</h2>

    <div class="dark:bg-gray-900 dark:text-white mb-6">
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">Feature</th>
                    <th class="border px-4 py-2">var</th>
                    <th class="border px-4 py-2">let</th>
                    <th class="border px-4 py-2">const</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Scope</td>
                    <td class="border px-4 py-2">Function</td>
                    <td class="border px-4 py-2">Block</td>
                    <td class="border px-4 py-2">Block</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Hoisting</td>
                    <td class="border px-4 py-2">Yes (undefined)</td>
                    <td class="border px-4 py-2">Yes (TDZ)</td>
                    <td class="border px-4 py-2">Yes (TDZ)</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Reassignable</td>
                    <td class="border px-4 py-2">Yes</td>
                    <td class="border px-4 py-2">Yes</td>
                    <td class="border px-4 py-2">No</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Redeclarable</td>
                    <td class="border px-4 py-2">Yes</td>
                    <td class="border px-4 py-2">No</td>
                    <td class="border px-4 py-2">No</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        <strong>Best Practice:</strong> Use <code>let</code> for variables that will change, and <code>const</code> for those that shouldn’t. Avoid <code>var</code> in modern JavaScript.
    </div>

</main>
