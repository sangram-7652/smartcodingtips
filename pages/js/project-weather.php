<!-- JavaScript Project – Weather App -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/weather-app" class="text-blue-600 hover:underline">Weather App</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-6">🌤️ Build a Simple Weather App</h1>

    <p class="mb-4">
        This project uses JavaScript and the OpenWeatherMap API to fetch and display real-time weather data based on city input.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔧 HTML Structure</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;div id="weather-container"&gt;
    &lt;input type="text" id="city" placeholder="Enter city" /&gt;
    &lt;button id="getWeather"&gt;Get Weather&lt;/button&gt;
    &lt;div id="weatherResult"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📜 JavaScript Code</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const apiKey = "YOUR_API_KEY"; // Replace with your OpenWeatherMap API key

document.getElementById("getWeather").addEventListener("click", () => {
    const city = document.getElementById("city").value;
    const result = document.getElementById("weatherResult");

    if (!city) {
        result.textContent = "Please enter a city name.";
        return;
    }

    fetch(\`https://api.openweathermap.org/data/2.5/weather?q=\${city}&appid=\${apiKey}&units=metric\`)
        .then(response => response.json())
        .then(data => {
            if (data.cod === 200) {
                result.innerHTML = \`
                    &lt;h3&gt;\${data.name}, \${data.sys.country}&lt;/h3&gt;
                    &lt;p&gt;🌡️ Temperature: \${data.main.temp}°C&lt;/p&gt;
                    &lt;p&gt;☁️ Condition: \${data.weather[0].main}&lt;/p&gt;
                    &lt;p&gt;💧 Humidity: \${data.main.humidity}%&lt;/p&gt;
                \`;
            } else {
                result.textContent = "City not found.";
            }
        })
        .catch(err => {
            console.error(err);
            result.textContent = "Error fetching weather data.";
        });
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎨 Optional Styling</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;style&gt;
#weather-container {
    max-width: 400px;
    margin: auto;
    text-align: center;
}
input {
    padding: 8px;
    width: 70%;
}
button {
    padding: 8px 12px;
    margin-left: 5px;
}
#weatherResult {
    margin-top: 15px;
    font-size: 1.1rem;
}
&lt;/style&gt;</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        ⚠️ <strong>Note:</strong> You must sign up at <a href="https://openweathermap.org/api" target="_blank" class="text-blue-600 underline">OpenWeatherMap</a> to get your API key and enable CORS access.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Concepts Covered</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Using external APIs</li>
        <li>Fetching JSON data</li>
        <li>DOM manipulation</li>
        <li>Error handling and validation</li>
    </ul>

</main>
