<!-- JavaScript Control Flow Examples -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/control-flow-examples" class="text-blue-600 hover:underline">Control Flow Examples</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Control Flow Examples in JavaScript</h1>

    <p class="mb-4">
        Control flow determines the order in which statements and expressions are executed. Let's look at some real-world examples using <code>if</code>, <code>switch</code>, <code>for</code>, <code>while</code>, and <code>break/continue</code>.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example 1: Login Access Check</h2>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let isLoggedIn = true;

if (isLoggedIn) {
    console.log("Welcome back!");
} else {
    console.log("Please log in.");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example 2: Grade Evaluation</h2>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let marks = 85;

if (marks &gt;= 90) {
    console.log("Grade: A");
} else if (marks &gt;= 75) {
    console.log("Grade: B");
} else {
    console.log("Grade: C");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example 3: Day of the Week using Switch</h2>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let day = "Saturday";

switch (day) {
    case "Monday":
        console.log("Work day");
        break;
    case "Saturday":
    case "Sunday":
        console.log("Weekend!");
        break;
    default:
        console.log("Just another day");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example 4: Loop with Continue</h2>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>for (let i = 1; i &lt;= 5; i++) {
    if (i === 3) {
        continue; // Skip 3
    }
    console.log(i);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example 5: Loop with Break</h2>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let count = 0;

while (true) {
    count++;
    if (count === 4) {
        break;
    }
    console.log("Counting:", count);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Use <strong>if/else</strong> for binary decisions</li>
        <li>Use <strong>switch</strong> when checking one value against many</li>
        <li>Use <strong>loops</strong> for repetition</li>
        <li>Use <strong>break</strong> to exit early</li>
        <li>Use <strong>continue</strong> to skip current iteration</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ Practice these patterns to master control flow logic in JavaScript!
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/functions" class="text-blue-600 hover:underline">Defining Functions →</a></p>
</div>

</main>
