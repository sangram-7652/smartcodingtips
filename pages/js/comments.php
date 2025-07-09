<!-- JavaScript Comments -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/comments" class="text-blue-600 hover:underline">JavaScript Comments</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Comments</h1>

    <p class="mb-4">
        Comments in JavaScript are used to describe your code, explain logic, or temporarily disable parts of it. They are ignored during execution and help make your code more readable and maintainable.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💬 1. Single-Line Comments</h2>
    <p class="mb-4">
        Use <code>//</code> to write single-line comments.
    </p>
    
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>// This is a single-line comment
let x = 10; // Declaring a variable</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📝 2. Multi-Line Comments</h2>
    <p class="mb-4">
        Use <code>/* ... */</code> to write multi-line comments.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>/*
 This is a multi-line comment.
 It can span multiple lines.
*/
let y = 20;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ 3. Disabling Code with Comments</h2>
    <p class="mb-4">
        Comments are often used to "turn off" code for testing/debugging:
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>// console.log("This won't run");

let name = "Alice";
console.log(name); // This will run</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 4. Good Commenting Practices</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Use comments to explain "why", not just "what"</li>
        <li>Keep them concise and relevant</li>
        <li>Update or remove outdated comments</li>
        <li>Use comments to separate sections of code</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mb-6">
        💡 <strong>Tip:</strong> Clean, self-explanatory code reduces the need for excessive comments.
    </div>

</main>
