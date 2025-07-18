<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/deployment" class="text-blue-600 hover:underline dark:text-blue-400">Deployment</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Free Domain</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌐 Get a Free Domain for Your React Project</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A custom domain makes your React site look more professional. There are several platforms that offer free domains (with or without hosting). Below are popular options and how to use them.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Option 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🆓 1. Free Subdomains from Hosting Platforms</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>
      <strong>Vercel:</strong> your-app.vercel.app<br />
      <strong>Netlify:</strong> your-site.netlify.app<br />
      <strong>GitHub Pages:</strong> username.github.io/project-name
    </li>
  </ul>

  <!-- Option 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌍 2. Free Custom Domains (.tk, .ml, .ga)</h2>
  <p class="mb-2 text-black dark:text-gray-300">You can register free domains from:</p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><a href="https://www.freenom.com" target="_blank" class="text-blue-600 dark:text-blue-400 underline">Freenom.com</a> – Offers .tk, .ml, .ga, .cf, .gq</li>
    <li><a href="https://infinityfree.net" target="_blank" class="text-blue-600 dark:text-blue-400 underline">InfinityFree</a> – Free subdomain + hosting</li>
    <li><a href="https://eu.org" target="_blank" class="text-blue-600 dark:text-blue-400 underline">EU.org</a> – Free domains with DNS setup (requires review)</li>
  </ul>

  <!-- Step-by-Step -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 3. Connect Domain to Hosting</h2>
  <p class="text-black dark:text-gray-300 mb-2">To link a domain to Vercel, Netlify, or GitHub Pages:</p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Go to your hosting dashboard</li>
    <li>Add a custom domain (e.g., <code>yourdomain.tk</code>)</li>
    <li>Update DNS settings at your domain provider:
      <ul class="list-disc ml-6 mt-2">
        <li><strong>A Record</strong> – Points to hosting IP (for GitHub)</li>
        <li><strong>CNAME</strong> – Points to app domain (e.g., <code>your-app.netlify.app</code>)</li>
      </ul>
    </li>
    <li>Wait for DNS propagation (can take a few hours)</li>
  </ul>

  <!-- Note -->
  <div class="bg-yellow-100 dark:bg-yellow-800 text-yellow-900 dark:text-yellow-200 p-4 rounded mb-6">
    ⚠️ Free domains (.tk, .ml, etc.) can be less reliable and may be suspended without notice. Use them for learning or early-stage projects.
  </div>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/cicd') ?>" class="hover:underline">← Previous: CI/CD Basics</a>
  <a href="<?= base_url('react/folder-structure') ?>" class="hover:underline">Next: Folder Structure →</a>
</div>

</main>
