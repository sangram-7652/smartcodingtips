<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/projects" class="text-blue-600 hover:underline dark:text-blue-400">Projects</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Weather App</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌤️ Weather App in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In this project, you’ll build a weather app using React and the OpenWeatherMap API. You'll learn how to handle forms, fetch data, manage loading/error states, and display real-time weather info.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 1. Setup OpenWeather API</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Get your API key from <a href="https://openweathermap.org/api" target="_blank" class="text-blue-600 dark:text-blue-400 underline">OpenWeatherMap</a> and add it to your <code>.env</code> file:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
REACT_APP_WEATHER_API_KEY=your_api_key_here
</code></pre>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Build the Weather Component</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useState } from 'react';

function WeatherApp() {
  const [city, setCity] = useState('');
  const [weather, setWeather] = useState(null);
  const [error, setError] = useState('');
  const [loading, setLoading] = useState(false);

  const fetchWeather = async () => {
    setLoading(true);
    setError('');
    try {
      const res = await fetch(
        `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${process.env.REACT_APP_WEATHER_API_KEY}&units=metric`
      );
      if (!res.ok) throw new Error('City not found');
      const data = await res.json();
      setWeather(data);
    } catch (err) {
      setError(err.message);
      setWeather(null);
    }
    setLoading(false);
  };

  return (
    &lt;div className="text-center space-y-6"&gt;
      &lt;h2 className="text-2xl font-bold"&gt;🌦️ Check Weather&lt;/h2&gt;
      &lt;input
        type="text"
        value={city}
        onChange={(e) =&gt; setCity(e.target.value)}
        placeholder="Enter city"
        className="px-4 py-2 rounded border dark:bg-gray-800 dark:text-white"
      /&gt;
      &lt;button
        onClick={fetchWeather}
        className="bg-blue-600 text-white px-4 py-2 rounded"
      &gt;
        Get Weather
      &lt;/button&gt;

      {loading &amp;&amp; &lt;p&gt;Loading...&lt;/p&gt;}
      {error &amp;&amp; &lt;p className="text-red-500"&gt;{error}&lt;/p&gt;}
      {weather &amp;&amp; (
        &lt;div className="mt-4"&gt;
          &lt;h3 className="text-xl font-semibold"&gt;{weather.name}, {weather.sys.country}&lt;/h3&gt;
          &lt;p&gt;🌡 Temp: {weather.main.temp}°C&lt;/p&gt;
          &lt;p&gt;🌬 Wind: {weather.wind.speed} m/s&lt;/p&gt;
          &lt;p&gt;⛅ Condition: {weather.weather[0].main}&lt;/p&gt;
        &lt;/div&gt;
      )}
    &lt;/div&gt;
  );
}

export default WeatherApp;
</code></pre>

  <!-- Step 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 3. Use in App</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import WeatherApp from './WeatherApp';

function App() {
  return (
    &lt;main className="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-800"&gt;
      &lt;WeatherApp /&gt;
    &lt;/main&gt;
  );
}

export default App;
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Used <code>useState</code> for form, data, and error handling</li>
    <li>Fetched live data using <code>fetch</code> and OpenWeather API</li>
    <li>Displayed loading and error feedback</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/project-weather') ?>" class="hover:underline">← Previous: Weather App</a>
  <a href="<?= base_url('react/project-auth') ?>" class="hover:underline ms-auto">Next: Login Form →</a>
</div>

</main>
