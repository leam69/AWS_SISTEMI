<?php
// Include auth.php to get $name variable
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Docker Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#initial_configuration">Initial Configuration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#add_nginx_ssl">Add Nginx and SSL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#configure_php">Configure PHP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#container">Container</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#update_repo_aws">Update Repo on AWS</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <section id="initial_configuration" class="mb-5">
      <h2>Initial Configuration</h2>
      <p>Follow these commands to install Docker and Docker Compose:</p>
      <ul>
        <li>Update your package index:</li>
        <li>Install Docker Engine:</li>
        <li>Enable Docker correctly:</li>
        <li>Install Docker Compose:</li>
        <li>Create the project folder:</li>
      </ul>
      <a href="https://example.com/initial_configuration_help" class="btn btn-primary">Get Started</a>
    </section>

    <!-- Add Nginx and SSL -->
    <section id="add_nginx_ssl" class="mb-5">
      <h2>Add Nginx and SSL</h2>
      <p>Follow these steps to add Nginx and SSL to your project:</p>
      <ul>
        <li>Create the docker-compose.yml file</li>
        <li>Create SSL certificate</li>
        <li>Connect SSL to Nginx container</li>
      </ul>
      <a href="https://example.com/add_nginx_ssl_help" class="btn btn-primary">Learn More</a>
    </section>

    <!-- Configure PHP -->
    <section id="configure_php" class="mb-5">
      <h2>Configure PHP</h2>
      <p>Configure PHP for your project:</p>
      <ul>
        <li>Create PHP folder</li>
        <li>Clone the repo</li>
        <li>Create Nginx default configuration file</li>
      </ul>
      <a href="https://example.com/configure_php_help" class="btn btn-primary">See Instructions</a>
    </section>

    <!-- Container -->
    <section id="container" class="mb-5">
      <h2>Container</h2>
      <p>Manage containers for your project:</p>
      <a href="https://example.com/container_help" class="btn btn-primary">View Containers</a>
    </section>

    <!-- Update Repo on AWS -->
    <section id="update_repo_aws">
      <h2>Update Repo on AWS</h2>
      <p>Keep your repository updated on AWS:</p>
      <a href="https://example.com/update_repo_aws_help" class="btn btn-primary">Update Repo</a>
    </section>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

