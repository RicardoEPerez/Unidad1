<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>PHPROJECT 1.0</title>
</head>
<body>
<div class="jumbotron text-center">
        <h1>Chambiando interfaces con BootsTrapito-3 El regreso del Trapito</h1>
        <p>Aqui se usa al Trapito y ejemplifica el "responsive".</p>
    </div>
    
    <br>

    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark ">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Tablas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ima.php">Imagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Bidouu.php">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./NopTouch.php">BenjamonButtons</a>
                </li>
            </ul>
        </nav>
    </div>
    <br>
    <div class="container">
        <h1>Ejemplo de repositorio</h1>
        <h2>It´s a my working in alarmas</h2>
        <br>
        <h2>Alerts</h2>
        <p>Alerts are created with the .alert class, followed by a contextual color classes:</p>
            <div class="alert alert-success">
                <strong>Success!</strong> Todo esta chido.
            </div>
            <div class="alert alert-info">
                <strong>Info!</strong> Algo cambio pero no es bueno ni malo.
            </div>
            <div class="alert alert-warning">
                <strong>Warning!</strong> Mucho ojo cuate.
            </div>
            <div class="alert alert-danger">
                <strong>Danger!</strong> Esto ya valio queso.
            </div>
            <div class="alert alert-primary">
                <strong>Primary!</strong> Yo ser importante hazme caso.
            </div>
            <div class="alert alert-secondary">
                <strong>Secondary!</strong> Soy el mario verde de "Primary".
            </div>
            <div class="alert alert-dark">
                <strong>Dark!</strong> I´m batman.
            </div>
            <div class="alert alert-light">
                <strong>Light!</strong> May the force be with you.
            </div>
        <br>
        <h2>Alert Links</h2>
        <p>Add the alert-link class to any links inside the alert box to create "matching colored links".</p>
            <div class="alert alert-success">
                <strong>Success!</strong> <a href="./tesoso.php" class="alert-link">Solo uno tiene un mesaje, los demas no busca el correcto y el tesoro se abrira ante tus ojos</a>.
            </div>
            <div class="alert alert-info">
                <strong>Info!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-warning">
                <strong>Warning!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-danger">
                <strong>Danger!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-primary">
                <strong>Primary!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-secondary">
                <strong>Secondary!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-dark">
                <strong>Dark!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
            <div class="alert alert-light">
                <strong>Light!</strong>  <a href="#" class="alert-link">Nel, no soy</a>.
            </div>
        <br>
        <p>Shale estos no me salieron no encontre el error :´c</p>
        <br>
        <h2>Alerts</h2>
        <p>The button with class="close" and data-dismiss="alert" is used to close the alert box.</p>
        <p>The alert-dismissible class adds some extra padding to the close button.</p>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
            </div>
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
            </div>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
            </div>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div>
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Primary!</strong> Indicates an important action.
            </div>
            <div class="alert alert-secondary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Secondary!</strong> Indicates a slightly less important action.
            </div>
            <div class="alert alert-dark alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Dark!</strong> Dark grey alert.
            </div>
            <div class="alert alert-light alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Light!</strong> Light grey alert.
            </div>
        <br>
        <h2>Animated Alerts</h2>
        <p>The .fade and .show classes adds a fading effect when closing the alert message.</p>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
            </div>
            <div class="alert alert-info alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
            </div>
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
            </div>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div>
            <div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Primary!</strong> Indicates an important action.
            </div>
            <div class="alert alert-secondary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Secondary!</strong> Indicates a slightly less important action.
            </div>
            <div class="alert alert-dark alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Dark!</strong> Dark grey alert.
            </div>
            <div class="alert alert-light alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Light!</strong> Light grey alert.
            </div>
    </div>
</body>
</html>