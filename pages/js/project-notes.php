<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/project-notes-app" class="text-blue-600 dark:text-blue-400 hover:underline">Notes App</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">📝 JavaScript Notes App</h1>

  <p class="mb-4">
    Build a simple and persistent Notes App using plain JavaScript and <code>localStorage</code>. Users can add, delete, and save notes — and they persist even after refreshing the page.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📄 HTML Structure</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>&lt;div id="app"&gt;
  &lt;textarea id="note-input" placeholder="Write your note here..." class="w-full p-2 border rounded"&gt;&lt;/textarea&gt;
  &lt;button id="add-note" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded"&gt;Add Note&lt;/button&gt;
  &lt;div id="notes-container" class="mt-6 space-y-4"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ JavaScript Logic</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>const noteInput = document.getElementById("note-input");
const addBtn = document.getElementById("add-note");
const notesContainer = document.getElementById("notes-container");

let notes = JSON.parse(localStorage.getItem("notes")) || [];

function saveNotes() {
  localStorage.setItem("notes", JSON.stringify(notes));
}

function renderNotes() {
  notesContainer.innerHTML = "";
  notes.forEach((note, index) =&gt; {
    const noteDiv = document.createElement("div");
    noteDiv.className = "bg-yellow-100 p-3 rounded shadow";

    const content = document.createElement("p");
    content.textContent = note;

    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "Delete";
    deleteBtn.className = "text-red-600 text-sm mt-2";
    deleteBtn.onclick = () =&gt; {
      notes.splice(index, 1);
      saveNotes();
      renderNotes();
    };

    noteDiv.appendChild(content);
    noteDiv.appendChild(deleteBtn);
    notesContainer.appendChild(noteDiv);
  });
}

addBtn.onclick = () =&gt; {
  const newNote = noteInput.value.trim();
  if (newNote) {
    notes.unshift(newNote);
    saveNotes();
    renderNotes();
    noteInput.value = "";
  }
};

renderNotes();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✨ Extra Ideas</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Allow editing existing notes</li>
    <li>Tag or categorize notes</li>
    <li>Add a search filter</li>
    <li>Enable dark mode</li>
    <li>Export/import notes as JSON file</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Note:</strong> Since this app uses <code>localStorage</code>, your notes will persist in the browser but not sync across devices.
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/project-quiz-2') ?>" class="hover:underline">← Previous: Advanced Quiz</a>
    <a href="<?= base_url('js/project-crud') ?>" class="hover:underline ms-auto">Next: Simple CRUD →</a>
</div>
</main>
