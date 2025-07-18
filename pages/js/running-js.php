<!-- Where JavaScript Runs -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/where-js-runs" class="text-blue-600 hover:underline">Where JavaScript Runs</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Where Does JavaScript Run?</h1>

    <p class="mb-4">
        JavaScript is no longer limited to just web browsers. Thanks to modern tools and engines, JavaScript can run in many environments — from your browser to backend servers, even mobile apps and IoT devices.
    </p>

    <h2 class="text-2xl font-semibold mb-2">🌐 1. In Web Browsers</h2>
    <p class="mb-4">
        This is the most common place where JavaScript runs. Every modern browser (Chrome, Firefox, Safari, Edge, etc.) comes with a built-in JavaScript engine:
    </p>
    <ul class="list-disc list-inside mb-4">
        <li><strong>Chrome:</strong> V8</li>
        <li><strong>Firefox:</strong> SpiderMonkey</li>
        <li><strong>Safari:</strong> JavaScriptCore</li>
        <li><strong>Edge:</strong> Chakra (older) / V8 (newer)</li>
    </ul>
    <p>
        JavaScript in the browser powers things like:
        DOM manipulation, event handling, form validation, and client-side logic.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🖥️ 2. On Servers (Node.js)</h2>
    <p class="mb-4">
        <strong>Node.js</strong> is a runtime environment that allows JavaScript to run on the server-side, outside the browser. With Node.js, developers can build:
    </p>
    <ul class="list-disc list-inside mb-4">
        <li>Web servers and APIs</li>
        <li>Command-line tools</li>
        <li>Real-time apps (like chat)</li>
    </ul>
    <p>
        It uses the same V8 engine as Chrome but adds modules for file systems, networking, databases, etc.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📱 3. In Mobile Apps</h2>
    <p class="mb-4">
        JavaScript can be used to build mobile apps using frameworks like:
    </p>
    <ul class="list-disc list-inside mb-4">
        <li><strong>React Native:</strong> Native iOS/Android apps using React</li>
        <li><strong>Ionic + Capacitor:</strong> Hybrid apps using web technologies</li>
        <li><strong>Expo:</strong> Quick mobile development toolkit</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🖥️ 4. On Desktop</h2>
    <p class="mb-4">
        Using <strong>Electron</strong>, JavaScript can power cross-platform desktop apps — like VS Code, Slack, or Discord.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📡 5. In IoT and Embedded Systems</h2>
    <p class="mb-4">
        Platforms like <strong>Johnny-Five</strong> and <strong>Espruino</strong> allow JavaScript to control hardware — sensors, motors, microcontrollers (like Arduino, Raspberry Pi, etc.).
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Summary</h2>
    <p class="mb-4">
        JavaScript started in the browser but now runs nearly everywhere:
    </p>

    <div class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded text-sm mb-6">
        <ul class="space-y-1 list-disc list-inside">
            <li>✅ Browsers – for front-end interactivity</li>
            <li>✅ Servers – with Node.js for backend APIs</li>
            <li>✅ Mobile – using React Native, Ionic</li>
            <li>✅ Desktop – using Electron</li>
            <li>✅ Hardware – for IoT projects</li>
        </ul>
    </div>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-4">
        <strong>Fun Fact:</strong> JavaScript is the only language that natively runs in every major web browser without plugins.
    </div>
    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/first-script" class="text-blue-600 hover:underline">Your First Script →</a></p>
</div>

</main>
