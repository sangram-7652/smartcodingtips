<?php
include 'config.php';
include 'includes/header.php';


?>
<main style="padding: 20px; max-width: 1100px; margin: auto;">
    <h1 class="text-3xl font-bold text-center mb-8">Technology Tests</h1>

    <section class="grid gap-6 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
        <!-- HTML Test -->
        <div class="p-4 border rounded-lg text-center shadow hover:shadow-lg transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML Icon" class="w-16 h-16 mx-auto mb-2" />
            <h2 class="text-xl font-bold mb-2">HTML Test</h2>
            <a href="<?= base_url('mcq/html/html-test') ?>" class="text-blue-600 dark:text-blue-400 underline">Start Test</a>
        </div>

        <!-- CSS Test -->
        <div class="p-4 border rounded-lg text-center shadow hover:shadow-lg transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS Icon" class="w-16 h-16 mx-auto mb-2" />
            <h2 class="text-xl font-bold mb-2">CSS Test</h2>
            <a href="" class="text-blue-600 dark:text-blue-400 underline">Start Test</a>
        </div>

        <!-- Tailwind Test -->
        <div class="p-4 border rounded-lg text-center shadow hover:shadow-lg transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind Icon" class="w-16 h-16 mx-auto mb-2" />
            <h2 class="text-xl font-bold mb-2">Tailwind Test</h2>
            <a href="" class="text-blue-600 dark:text-blue-400 underline">Start Test</a>
        </div>


        <!-- JavaScript Test -->
        <div class="p-4 border rounded-lg text-center shadow hover:shadow-lg transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript Icon" class="w-16 h-16 mx-auto mb-2" />
            <h2 class="text-xl font-bold mb-2">JavaScript Test</h2>
            <a href="" class="text-blue-600 dark:text-blue-400 underline">Start Test</a>
        </div>

        <!-- React Test -->
        <div class="p-4 border rounded-lg text-center shadow hover:shadow-lg transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Icon" class="w-16 h-16 mx-auto mb-2" />
            <h2 class="text-xl font-bold mb-2">React Test</h2>
            <a href="" class="text-blue-600 dark:text-blue-400 underline">Start Test</a>
        </div>
    </section>
</main>


<?php
include 'includes/footer.php';
?>