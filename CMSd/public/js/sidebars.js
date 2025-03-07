/* global bootstrap: false */
(() => {
  'use strict';
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });
})();

function loadContent(route) {
  const contentMap = {
    "/admin/login": '<h1>Login</h1><p>This is the admin login content.</p>',
    "summary.html": '<h1>Summary</h1><p>This is the summary content.</p>',
    "status.html": '<h1>Open/close (status)</h1><p>This is the status content.</p>',
    "set_topics.html": '<h1>Set topics</h1><p>This is the set topics content.</p>',
    "list_submissions.html": '<h1>List Submissions</h1><p>This is the list submissions content.</p>',
    "view_uploaded_files.html": '<h1>View uploaded files</h1><p>This is the view uploaded files content.</p>',
    "select_reviewer.html": '<h1>Select Reviewer</h1><p>This is the select reviewer content.</p>',
    "assign_paper.html": '<h1>Assign Paper To Reviewer</h1><p>This is the assign paper to reviewer content.</p>',
    // Add more sections here
  };
  const mainContent = document.getElementById('main-content');
  mainContent.innerHTML = contentMap[route] || '<h1>Content Not Found</h1>';
}
