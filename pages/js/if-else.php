<!-- JavaScript If, Else, and Switch -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/if-else-switch" class="text-blue-600 hover:underline">If, Else, Switch</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">If, Else, and Switch Statements</h1>

    <p class="mb-4">
        Conditional statements let you control the flow of your program based on conditions. JavaScript provides <strong>if</strong>, <strong>else if</strong>, <strong>else</strong>, and <strong>switch</strong> statements for this purpose.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ 1. <code>if</code> Statement</h2>
    <p class="mb-4">Executes a block of code if a condition is true.</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let age = 18;

if (age &gt;= 18) {
    console.log("You are an adult.");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ 2. <code>if...else</code> Statement</h2>
    <p class="mb-4">Provides an alternative if the condition is false.</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let isLoggedIn = false;

if (isLoggedIn) {
    console.log("Welcome back!");
} else {
    console.log("Please log in.");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ 3. <code>if...else if...else</code> Chain</h2>
    <p class="mb-4">Checks multiple conditions in order.</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let score = 75;

if (score &gt;= 90) {
    console.log("Grade: A");
} else if (score &gt;= 75) {
    console.log("Grade: B");
} else {
    console.log("Grade: C");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 4. <code>switch</code> Statement</h2>
    <p class="mb-4">
        A cleaner way to compare a variable against many values.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let day = "Wednesday";

switch (day) {
    case "Monday":
        console.log("Start of the week");
        break;
    case "Wednesday":
        console.log("Midweek day");
        break;
    case "Friday":
        console.log("End of the week");
        break;
    default:
        console.log("Regular day");
}</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-6">
        ⚠️ Always use <code>break</code> to prevent fall-through between cases.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><strong><code>if</code></strong> – Run code if condition is true</li>
        <li><strong><code>else</code></strong> – Run alternative code</li>
        <li><strong><code>else if</code></strong> – Check multiple conditions</li>
        <li><strong><code>switch</code></strong> – Compare one value against many possible matches</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ <strong>Tip:</strong> Use <code>switch</code> when checking one variable against multiple fixed values. Use <code>if</code> for more flexible or complex conditions.
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/loops" class="text-blue-600 hover:underline">Loops: for, while →</a></p>
</div>
</main>
