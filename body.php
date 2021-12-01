<?php
include "cds.php";
?>

<body>
  <header>
    <img src="img/logo.png" alt="logo">
  </header>

  <main id="app">
    <div class="container">
      <div class="row row-cols-5">
        <?php
        foreach ($cdList as $cd) {
          echo "<div class='col'><div class='cd-card'>";
          echo "<img src='" . $cd["poster"] . "'>";
          echo "<h4>" . $cd["title"] . "</h4>";
          echo "<span>" . $cd["author"] . "</span>";
          echo "<span>" . $cd["year"] . "</span>";
          echo "</div></div>";
        }
        ?>
      </div>
    </div>
  </main>

  <script src="js/main.js"></script>
</body>