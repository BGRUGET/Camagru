
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>camagru</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="/img/camabelagruge.png" width="150" height="150" class="d-inline-block align-top" alt="cama(bela)gru(ge)">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="hamburger">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-column align-items-end h-100"  id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/indexview.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cameraview.php">CAMERA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signin.php">CONNEXION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signup.php">SIGN UP</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</body>
<script> document.getElementById('hamburger').addEventListener('click', () => {
        const content = document.getElementById('navbarSupportedContent')
        const classes = content.className.split(' ')
        const collapsed = classes
            .reduce((has, content) => has || content === 'collapse', false)
        content.className = collapsed ? classes.filter(className => className !== 'collapse').join(' ') : [classes, 'collapse'].join(' ')
    }) </script>
</html>