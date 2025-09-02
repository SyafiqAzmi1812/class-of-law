<?php
session_start();

$title = "Kuis | Class Of Law - Website Hukum KUHP";
include "template/header.php";
?>
<link rel="stylesheet" href="style/quiz.css">
<body>
    
<div class="title">
    <h1>Title</h1>
    <h2>Session 1</h2>
    <div class="progress-wrapper">
    <div class="progress-text" id="progressText">0%</div>
    <div class="progress-container">
      <div class="progress-bar" id="progressBar"></div>
    </div>
  </div>

</div>
</body>