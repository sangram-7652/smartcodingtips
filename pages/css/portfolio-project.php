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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Portfolio Project</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Portfolio Project</h1>
        <p class=" mb-4">
            Creating a personal portfolio using HTML and CSS is a great way to showcase your projects, skills, and contact information. It’s also an ideal beginner-to-intermediate CSS project.
        </p>

        <!-- Project Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Structure</h2>
            <p class=" mb-2">Here’s a simple structure to get started:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;header&gt;...&lt;/header&gt;
&lt;section id="about"&gt;...&lt;/section&gt;
&lt;section id="projects"&gt;...&lt;/section&gt;
&lt;section id="contact"&gt;...&lt;/section&gt;
&lt;footer&gt;...&lt;/footer&gt;
            </code></pre>
        </section>

        <!-- Hero Section -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Hero Banner</h2>
            <p class=" mb-2">The landing section with your name and title:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background: linear-gradient(to right, #2563eb, #1e3a8a);
    color: white;
    padding: 80px 20px;
    text-align: center;
}
.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}
.hero p {
    font-size: 1.25rem;
}
            </code></pre>
        </section>

        <!-- Project Cards -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Project Showcase Grid</h2>
            <p class=" mb-2">Display projects using cards with CSS Grid:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.projects {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
}
.project-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    overflow: hidden;
    transition: transform 0.2s;
}
.project-card:hover {
    transform: translateY(-5px);
}
.project-card img {
    width: 100%;
    height: auto;
}
.project-card .content {
    padding: 1rem;
}
            </code></pre>
        </section>

        <!-- Contact Form -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Contact Section</h2>
            <p class=" mb-2">Include a contact form or email/social links:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.contact-form {
    max-width: 500px;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
.contact-form input,
.contact-form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Tips for Your Portfolio</h2>
            <ul class="list-disc list-inside ">
                <li>Highlight your best projects first.</li>
                <li>Use real screenshots or project links.</li>
                <li>Include a short bio and skillset.</li>
                <li>Keep it responsive and mobile-friendly.</li>
                <li>Add subtle animations for interactivity.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                A portfolio project helps you practice layout, responsiveness, and visual design. With CSS Grid, Flexbox, and transitions, you can build a professional and impressive showcase site.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="responsive-portfolio.php" class="text-blue-600 hover:underline">Responsive Portfolio Techniques →</a></p>
        </div>
    </article>
</main>
