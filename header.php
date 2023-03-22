<?php
?>
<div class="container">
  <header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Homepage</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Attività formative</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Unit</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2" id="log-button" value="<?php
      if (isset($_SESSION['userID'])) {
        echo ("logout");
      } else {
        echo ("login");
      }
      ?>">
        <?php
        if (isset($_SESSION['userID'])) {
          echo ("Logout");
        } else {
          echo ("Login");
        }
        ?>
      </button>
    </div>
  </header>
</div>
<script>
  $(document).ready(function () {
    $("#log-button").click(function () {
      switch ($(this).val()) {
        case "login":
          window.location = "http://localhost/medicina/index.php?page=0";
          break;
        case "logout":
          window.location = "http://localhost/medicina/index.php?page=99";
          break;
        default:
          console.log($(this).val());
          alert("no");
          break;
      }
    });
  });
</script>