<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Pricing Table with Toggle</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article x-data="{ yearly: false }">
        <h1 class="text-3xl font-bold mb-4">Tailwind Pricing Table with Toggle</h1>
        <p class="text-lg mb-4">
            A modern, responsive pricing table using Tailwind CSS and Alpine.js. Toggle between monthly and yearly plans with a smooth switch.
        </p>

        <!-- Toggle Switch -->
        <div class="flex items-center justify-center mb-8 space-x-3">
            <span class="text-gray-600 font-medium">Monthly</span>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" x-model="yearly">
                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:bg-blue-600 transition"></div>
                <div class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
            </label>
            <span class="text-gray-600 font-medium">Yearly</span>
        </div>

        <!-- Pricing Cards -->
        <section class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Basic Plan -->
            <div class="border border-gray-200 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">Basic</h2>
                <p class="text-gray-500 mb-4">Perfect for beginners and personal projects.</p>
                <div class="text-3xl font-bold mb-4 text-blue-600" x-text="yearly ? '$99/year' : '$10/mo'">$10/mo</div>
                <ul class="text-sm text-gray-600 mb-4 space-y-1">
                    <li>✔ 1 Website</li>
                    <li>✔ 10GB Storage</li>
                    <li>✔ Community Support</li>
                </ul>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Start Basic</button>
            </div>

            <!-- Pro Plan -->
            <div class="border-2 border-blue-500 p-6 rounded-lg shadow-lg bg-blue-50 relative">
                <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white px-3 py-1 rounded-full text-xs uppercase">Most Popular</span>
                <h2 class="text-xl font-semibold mb-2">Pro</h2>
                <p class="text-gray-600 mb-4">Best for freelancers and small businesses.</p>
                <div class="text-3xl font-bold mb-4 text-blue-700" x-text="yearly ? '$199/year' : '$20/mo'">$20/mo</div>
                <ul class="text-sm text-gray-700 mb-4 space-y-1">
                    <li>✔ 5 Websites</li>
                    <li>✔ 50GB Storage</li>
                    <li>✔ Email Support</li>
                </ul>
                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Start Pro</button>
            </div>

            <!-- Business Plan -->
            <div class="border border-gray-200 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">Business</h2>
                <p class="text-gray-500 mb-4">For growing teams and companies.</p>
                <div class="text-3xl font-bold mb-4 text-blue-600" x-text="yearly ? '$399/year' : '$40/mo'">$40/mo</div>
                <ul class="text-sm text-gray-600 mb-4 space-y-1">
                    <li>✔ Unlimited Websites</li>
                    <li>✔ 200GB Storage</li>
                    <li>✔ Premium Support</li>
                </ul>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Start Business</button>
            </div>
        </section>

        <!-- Note -->
        <p class="text-sm text-gray-500 mt-6 text-center">Toggle prices between monthly and yearly using the switch above. All plans are billed securely.</p>

        <!-- Next -->
        <div class="mt-6">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/project-dashboard" class="text-blue-600 hover:underline">→ Dark Mode Dashboard</a></p>
        </div>
    </article>

</main>
