<?php
// animate.php

$page = $_GET['page'] ?? 'animate/intro';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/animate/intro.php";
}

ob_start();
include $pagePath;
$pageContent = ob_get_clean();

include 'includes/header.php';
?>

<div class="flex">
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium bg-white text-black dark:bg-gray-900 dark:text-white">

        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction to Animate.css</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/intro">What is Animate.css?</a></li>
                <li><a href="animate.php?page=animate/why-use">Why Use Animate.css?</a></li>
                <li><a href="animate.php?page=animate/vs-custom">Animate.css vs Custom Animations</a></li>
                <li><a href="animate.php?page=animate/browser-support">Browser Compatibility</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. Installation & Setup</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/cdn">Adding via CDN</a></li>
                <li><a href="animate.php?page=animate/npm">Installing via npm</a></li>
                <li><a href="animate.php?page=animate/tailwind">Using with Tailwind</a></li>
                <li><a href="animate.php?page=animate/importing">Import in React/Vite</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Core Concepts</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/animated-class">animate__animated Class</a></li>
                <li><a href="animate.php?page=animate/naming">Naming Conventions</a></li>
                <li><a href="animate.php?page=animate/timing">Animation Timing</a></li>
                <li><a href="animate.php?page=animate/infinite">Infinite Animations</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Popular Animation Effects</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/entrance">Entrance Effects</a></li>
                <li><a href="animate.php?page=animate/exit">Exit Effects</a></li>
                <li><a href="animate.php?page=animate/attention">Attention Seekers</a></li>
                <li><a href="animate.php?page=animate/special">Special Effects</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. JS Integration</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/click-trigger">Trigger on Click</a></li>
                <li><a href="animate.php?page=animate/remove-class">Remove Animation</a></li>
                <li><a href="animate.php?page=animate/replay">Replay Animations</a></li>
                <li><a href="animate.php?page=animate/event-listener">animationend Event</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. Scroll Animations</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/intersection">Intersection Observer</a></li>
                <li><a href="animate.php?page=animate/scroll-trigger">Scroll Triggered Effects</a></li>
                <li><a href="animate.php?page=animate/visibility">Animate on Visible</a></li>
                <li><a href="animate.php?page=animate/avoid-repeat">Avoid Repeat</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Customization & Utilities</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/custom-duration">Custom Duration</a></li>
                <li><a href="animate.php?page=animate/delay-speed">Delay & Speed</a></li>
                <li><a href="animate.php?page=animate/custom-animations">Custom Effects</a></li>
                <li><a href="animate.php?page=animate/scss">SCSS Integration</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. Animate.css with Frameworks</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/react">React</a></li>
                <li><a href="animate.php?page=animate/vue">Vue</a></li>
                <li><a href="animate.php?page=animate/angular">Angular</a></li>
                <li><a href="animate.php?page=animate/jquery">jQuery</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. Practical Examples</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/button-hover">Button Hover</a></li>
                <li><a href="animate.php?page=animate/modal">Modal Animation</a></li>
                <li><a href="animate.php?page=animate/form-shake">Form Error Shake</a></li>
                <li><a href="animate.php?page=animate/page-load">Page Load Animations</a></li>
                <li><a href="animate.php?page=animate/list-items">Animated Lists</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. Libraries & Tools</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/wowjs">WOW.js</a></li>
                <li><a href="animate.php?page=animate/aos">AOS</a></li>
                <li><a href="animate.php?page=animate/gsap">GSAP + Animate</a></li>
                <li><a href="animate.php?page=animate/framer">Framer Motion Comparison</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. Best Practices</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/subtle">Subtle Animations</a></li>
                <li><a href="animate.php?page=animate/fallbacks">Browser Fallbacks</a></li>
                <li><a href="animate.php?page=animate/performance">Performance Tips</a></li>
                <li><a href="animate.php?page=animate/a11y">Accessibility</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Mini Projects</h2>
            <ul class="space-y-2">
                <li><a href="animate.php?page=animate/landing">Animated Landing Page</a></li>
                <li><a href="animate.php?page=animate/component">React Component Effects</a></li>
                <li><a href="animate.php?page=animate/notification">Popup Notification</a></li>
                <li><a href="animate.php?page=animate/login">Login Form</a></li>
                <li><a href="animate.php?page=animate/quiz">Quiz App Animation</a></li>
            </ul>
        </div>
    </div>

    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
