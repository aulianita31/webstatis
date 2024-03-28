<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Keren |by Nita Aulia</title>
    <link rel="shortcut" href="images/tkj-logo-tkj-letter-tkj-letter-logo-design-initials-tkj-logo-linked-with-circle-and-uppercase-monogram-logo-tkj-typography-for-technology-business-and-real-estate-brand-vector.jpg" type="images/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="n navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="."><img src="images/tkj-logo-tkj-letter-tkj-letter-logo-design-initials-tkj-logo-linked-with-circle-and-uppercase-monogram-logo-tkj-typography-for-technology-business-and-real-estate-brand-vector.jpg" alt="TKJ" height="99px" title="Nita Aulia">
                <span class="h2">TKJ A30</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?m=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href=
                        "?m=profil">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tutorial
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?m=server">Server</a></li>
                            <li><a class="dropdown-item" href="?m=webdev" title="Web Development">Webdev</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?m=jarkom">Jarkom</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=vidio">Vidio</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
     
    <div class="container mt-2">
        <?php include_once('tkj.php'); ?>
    </div>
    
    <div class="fixed-bottom">
        <div class="card">
            <div class="card-body">
              &copy; 2024-<?= date("Y")?> - TKJ RGI A30
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </script>
</body>

</html>