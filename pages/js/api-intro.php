<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/api-intro" class="text-blue-600 dark:text-blue-400 hover:underline">Intro to APIs</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🌐 Introduction to APIs in JavaScript</h1>

    <p class="mb-4">
        An <strong>API (Application Programming Interface)</strong> allows different software applications to talk to each other. In JavaScript, APIs are commonly used to fetch data from external services like weather, news, or databases.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔗 What is an API?</h2>
    <p>
        Think of an API like a waiter in a restaurant. You (the client) ask for something (like food), and the waiter (the API) takes your request to the kitchen (server) and brings back your response (data).
    </p>

    <ul class="list-disc list-inside mt-4 mb-6">
        <li><strong>Client:</strong> Your browser or app</li>
        <li><strong>API:</strong> The messenger that sends and receives data</li>
        <li><strong>Server:</strong> The system that processes the request</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📥 What You Can Do With APIs</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Get weather forecasts, news headlines, stock prices</li>
        <li>Send or receive messages from databases</li>
        <li>Process payments, log in with Google/Facebook</li>
        <li>Build interactive dashboards and data visualizations</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Common API Response Format: JSON</h2>
    <p>APIs often send data in <code>JSON (JavaScript Object Notation)</code> format:</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>{
  "name": "John",
  "age": 30,
  "city": "New York"
}</code></pre>

    <p>JavaScript can easily parse and use JSON data using:</p>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white"><code>const jsonData = '{"name":"John","age":30}';
const obj = JSON.parse(jsonData);
console.log(obj.name); // "John"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Tools You’ll Use with APIs</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code>fetch()</code> – Built-in method to request data</li>
        <li><code>XMLHttpRequest</code> – Older method for AJAX</li>
        <li>Libraries like <code>Axios</code> for simplified requests</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded">
        💡 <strong>Next Step:</strong> Try using <code>fetch()</code> to request data from a free API like <a href="https://jsonplaceholder.typicode.com" class="underline text-blue-600" target="_blank">JSONPlaceholder</a> or <a href="https://openweathermap.org/api" class="underline text-blue-600" target="_blank">OpenWeather</a>.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Summary</h2>
    <ul class="list-disc list-inside">
        <li>APIs help JavaScript communicate with external services</li>
        <li>They return data, usually in JSON format</li>
        <li>You can fetch data using built-in tools like <code>fetch()</code></li>
        <li>APIs power modern web apps — from weather to login to search</li>
    </ul>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/popups') ?>" class="hover:underline">← Previous: Popups & Controls</a>
    <a href="<?= base_url('js/fetch-api') ?>" class="hover:underline ms-auto">Next: fetch() Basics →</a>
</div>

</main>
