<?php
session_start();

function displayAudios()
{
    $conn = mysqli_connect('localhost', 'root', '1234', 'users');
    if (!$conn) {
        die('Server not connected');
    }

    $query = 'SELECT * FROM audios';
    $r = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($r)) {
        echo '<a href="play.php?name=' . $row['filename'] . '">' . $row['trackName'] . '</a>';
        echo '<br/>';
    }

    mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG%20&%20SVG/favicon.ico" type="image/x-icon">
    <title>SoundShare</title>
</head>
<body class="">
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="index.php">
        <svg width="100" height="30" viewBox="0 0 200 93">
            <image width="240" height="93"
                   xlink:href="data:img/png;base64,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"/>
            s
        </svg>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul>
                <li><a class="nav-item nav-link" href="index.php">HOME</a></li>
                <li><a class="nav-item nav-link active" href="discover.php">DISCOVER</a></li>
                <li><a class="nav-item nav-link" href="upload.php">UPLOAD</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <section>
        <div>
            <div class="cards p-3 m-2">
                <h1 class="text-center p-3">Users</h1>
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <div class="card m-2">
                        <a href="#" class="cardLink">
                            <div class="card-body">
                                <div class="title">
                                    <h5>User1</h5>
                                </div>
                                <p class="card-text">
                                    Samples made by
                                </p>
                            </div>
                            <img class="card-img-top placeholder" src="IMG%20&%20SVG/Portrait_Placeholder.png"
                                 alt="Card image cap">
                        </a>
                    </div>
                    <div class="card m-2">
                        <a href="#" class="cardLink">
                            <div class="card-body">
                                <div class="title">
                                    <h5>User1</h5>
                                </div>
                                <p class="card-text">
                                    Samples made by user1
                                </p>
                            </div>
                            <img class="card-img-top placeholder" src="IMG%20&%20SVG/Portrait_Placeholder.png"
                                 alt="Card image cap">
                        </a>
                    </div>
                    <div class="card m-2">
                        <a href="#" class="cardLink">
                            <div class="card-body">
                                <div class="title">
                                    <h5>User1</h5>
                                </div>
                                <p class="card-text">
                                    Samples made by user1
                                </p>
                            </div>
                            <img class="card-img-top placeholder" src="IMG%20&%20SVG/Portrait_Placeholder.png"
                                 alt="Card image cap">
                        </a>
                    </div>
                    <div class="card m-2">
                        <a href="#" class="cardLink">
                            <div class="card-body">
                                <div class="title">
                                    <h5>User1</h5>
                                </div>
                                <p class="card-text">
                                    Samples made by user1
                                </p>
                            </div>
                            <img class="card-img-top placeholder" src="IMG%20&%20SVG/Portrait_Placeholder.png"
                                 alt="Card image cap">
                        </a>
                    </div>
                    <div class="card m-2">
                        <a href="#" class="cardLink">
                            <div class="card-body">
                                <div class="title">
                                    <h5>User1</h5>
                                </div>
                                <p class="card-text">
                                    Samples made by user1
                                </p>
                            </div>
                            <img class="card-img-top placeholder" src="IMG%20&%20SVG/Portrait_Placeholder.png"
                                 alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1 class="text-center p-3">Tracks</h1>
        <div class="py-2 ml-5 container">
            <?php
            displayAudios();
            ?>
        </div>
    </section>
</main>

<footer>
    <p>This website was made by Tymo Verhaegen</p>
    <p>Contact me</p>
    <ul class="contact">
        <li><a class="nav-item nav-link" href="https://twitter.com/AyeItsSilence">Twitter</a></li>
        <li><a class="nav-item nav-link" href="">Instagram</a></li>
        <li><a class="nav-item nav-link" href="https://www.linkedin.com/in/tymo-verhaegen-161b18221/">LinkedIn</a></li>
    </ul>
</footer>

<script src="JS/searchBar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>