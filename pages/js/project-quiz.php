<!-- JavaScript Project – Quiz App -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/quiz-app" class="text-blue-600 hover:underline">Quiz App</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-6">🧠 Build a Simple JavaScript Quiz App</h1>

    <p class="mb-4">
        A basic interactive quiz using JavaScript. Practice DOM manipulation, conditionals, and event handling.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 HTML Markup</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;div id="quiz-container"&gt;
    &lt;h2 id="question"&gt;&lt;/h2&gt;
    &lt;ul id="answers"&gt;&lt;/ul&gt;
    &lt;button id="nextBtn"&gt;Next&lt;/button&gt;
&lt;/div&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📜 JavaScript Logic</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const questions = [
    {
        question: "Which language runs in a web browser?",
        options: ["Java", "C", "Python", "JavaScript"],
        answer: "JavaScript"
    },
    {
        question: "What does CSS stand for?",
        options: ["Central Style Sheets", "Cascading Style Sheets", "Colorful Style Sheets", "Computer Style Sheets"],
        answer: "Cascading Style Sheets"
    },
    {
        question: "What is HTML?",
        options: ["Programming Language", "Markup Language", "Database", "Framework"],
        answer: "Markup Language"
    }
];

let currentQuestion = 0;
let score = 0;

const questionEl = document.getElementById("question");
const answersEl = document.getElementById("answers");
const nextBtn = document.getElementById("nextBtn");

function loadQuestion() {
    const q = questions[currentQuestion];
    questionEl.textContent = q.question;
    answersEl.innerHTML = "";

    q.options.forEach(option => {
        const li = document.createElement("li");
        li.textContent = option;
        li.classList.add("cursor-pointer", "hover:text-blue-500", "mb-2");

        li.addEventListener("click", () => {
            if (option === q.answer) {
                li.classList.add("text-green-600");
                score++;
            } else {
                li.classList.add("text-red-600");
            }

            [...answersEl.children].forEach(btn => btn.style.pointerEvents = "none");
        });

        answersEl.appendChild(li);
    });
}

nextBtn.addEventListener("click", () => {
    currentQuestion++;
    if (currentQuestion &lt; questions.length) {
        loadQuestion();
    } else {
        questionEl.textContent = \`🎉 Quiz Finished! Your score: \${score}/\${questions.length}\`;
        answersEl.innerHTML = "";
        nextBtn.style.display = "none";
    }
});

loadQuestion();</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎨 Optional Styling</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;style&gt;
#quiz-container {
    max-width: 500px;
    margin: auto;
    text-align: left;
}
#answers li {
    list-style: none;
    padding: 10px;
    border: 1px solid #ddd;
    margin-bottom: 8px;
    border-radius: 5px;
}
#nextBtn {
    padding: 10px 20px;
    background-color: #2563eb;
    color: white;
    border: none;
    border-radius: 4px;
}
&lt;/style&gt;</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>Tip:</strong> Add a timer, randomize questions, or save high scores with <code>localStorage</code>.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📚 What You Practice</h2>
    <ul class="list-disc list-inside mb-6">
        <li>DOM manipulation</li>
        <li>Event handling</li>
        <li>Conditional logic</li>
        <li>Dynamic UI generation</li>
    </ul>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/browser-bom" class="text-blue-600 hover:underline">Browser Object Model →</a></p>
</div>
</main>
