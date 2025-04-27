<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/d72c8a1900.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Navigation Bar Section -->
  <nav class="navbar">
    <div class="navbar__container">
        <a href="/" id="navbar__logo"><i class="fa-solid fa-house"></i>&nbsp;Ammons</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
            <li class="navbar__item">
                <a href="/" class="navbar__links">Home</a>
            </li>
            <li class="navbar__item">
                <a href="/tech.php" class="navbar__links">Tech</a>
            </li>
            <li class="navbar__item">
                <a href="/lab.php" class="navbar__links">Lab</a>
            </li>
            <li class="navbar__item">
                <a href="/istatus.php" class="navbar__links">iStatus</a>
            </li>
            <li class="navbar__btn">
                <a href="/" class="button">Blog</a>
            </li>
        </ul>
    </div>
  </nav>
