<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/project-quiz-advanced" class="text-blue-600 dark:text-blue-400 hover:underline">Advanced Quiz</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🧠 Advanced JavaScript Quiz App</h1>

  <p class="mb-4">
    Build an interactive multiple-choice quiz app with JavaScript that includes question navigation, score tracking, dynamic feedback, and a final result screen.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📄 HTML Layout</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>&lt;div id="quiz-container"&gt;
  &lt;h2 id="question"&gt;&lt;/h2&gt;
  &lt;div id="answers"&gt;&lt;/div&gt;
  &lt;button id="next-btn"&gt;Next&lt;/button&gt;
  &lt;p id="score" class="mt-4 font-semibold"&gt;&lt;/p&gt;
&lt;/div&gt;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 JavaScript Logic</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>const questions = [
  {
    question: "Which method is used to parse JSON in JavaScript?",
    options: ["JSON.parse()", "JSON.stringify()", "parseJSON()", "convertJSON()"],
    answer: "JSON.parse()"
  },
  {
    question: "What does '===' mean?",
    options: ["Assignment", "Strict equality", "Loose equality", "Compare by value"],
    answer: "Strict equality"
  },
  // Add more questions as needed
];

let currentIndex = 0;
let score = 0;

const questionEl = document.getElementById("question");
const answersEl = document.getElementById("answers");
const nextBtn = document.getElementById("next-btn");
const scoreEl = document.getElementById("score");

function showQuestion() {
  const q = questions[currentIndex];
  questionEl.textContent = q.question;
  answersEl.innerHTML = "";

  q.options.forEach(option => {
    const btn = document.createElement("button");
    btn.textContent = option;
    btn.classList.add("bg-blue-100", "hover:bg-blue-200", "m-1", "p-2", "rounded");
    btn.onclick = () => selectAnswer(btn, q.answer);
    answersEl.appendChild(btn);
  });
}

function selectAnswer(selectedBtn, correctAnswer) {
  const isCorrect = selectedBtn.textContent === correctAnswer;
  if (isCorrect) {
    selectedBtn.classList.add("bg-green-300");
    score++;
  } else {
    selectedBtn.classList.add("bg-red-300");
  }

  Array.from(answersEl.children).forEach(btn => {
    btn.disabled = true;
    if (btn.textContent === correctAnswer) {
      btn.classList.add("border", "border-green-600");
    }
  });

  nextBtn.style.display = "block";
}

nextBtn.onclick = () => {
  currentIndex++;
  if (currentIndex &lt; questions.length) {
    showQuestion();
    nextBtn.style.display = "none";
  } else {
    showResult();
  }
};

function showResult() {
  questionEl.textContent = "🎉 Quiz Complete!";
  answersEl.innerHTML = "";
  nextBtn.style.display = "none";
  scoreEl.textContent = `You scored ${score} out of ${questions.length}`;
}

showQuestion();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✨ Features You Can Add</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Timer per question</li>
    <li>Progress bar</li>
    <li>Randomized questions</li>
    <li>LocalStorage for high scores</li>
    <li>Category-based quiz filtering</li>
  </ul>

  <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded">
    💡 <strong>Tip:</strong> Wrap questions in a JSON file for loading via <code>fetch()</code> to make it scalable.
  </div>

 <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/project-slider') ?>" class="hover:underline">← Previous: Image Slider</a>
    <a href="<?= base_url('js/project-notes') ?>" class="hover:underline ms-auto">Next: Notes App →</a>
</div>
</main>
