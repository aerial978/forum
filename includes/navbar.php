<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">Publication</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publicationsUser.php">My questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actions/users/logoutAction.php">Logout</a>
        </li>
      </ul>
      <div class="text-light">
      <?php 
        if (isset($_SESSION['auth'])) {
          echo $_SESSION['username'];    
          }
      ?>
      </div>

    </div>
  </div>
</nav>