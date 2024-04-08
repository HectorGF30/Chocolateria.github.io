<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Chocolates Artesanales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .card {
            height: 100%;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <!-- Banner principal -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Descubre la magia del chocolate artesanal</h1>
            <p class="lead">Sumérgete en un mundo de sabores únicos y texturas exquisitas</p>
        </div>
    </div>

    <!-- Sección con más texto -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Más sobre nuestros chocolates</h2>
                <p>En Chocolates Artesanales nos apasiona crear experiencias sensoriales a través del chocolate. Utilizamos solo los mejores ingredientes, desde el cacao más fino hasta las frutas frescas y las nueces crujientes. Cada uno de nuestros chocolates es una obra maestra elaborada con amor y cuidado.</p>
                <p>Nuestro compromiso con la calidad se refleja en cada bocado. Descubre una amplia variedad de sabores, desde el clásico chocolate con leche hasta combinaciones exóticas como chocolate con jengibre o chocolate con chile.</p>
            </div>
        </div>
    </div>
    
    <!-- Catálogo de chocolates -->
    <div class="container">
        <h2 class="mt-5">Catálogo de Chocolates</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.ketoconlaura.com/cdn/shop/articles/bombones-helados-de-frambuesa.jpg?v=1661868037" class="card-img-top" alt="Chocolate 1">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate de Frambuesa</h5>
                        <p class="card-text">Disfruta de nuestro chocolate artesanal con relleno cremoso de frambuesa, perfecto para los amantes del dulce y ácido.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Mint_chocolate.jpg/800px-Mint_chocolate.jpg" class="card-img-top" alt="Chocolate 2">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate de Menta</h5>
                        <p class="card-text">Experimenta una explosión de frescura con nuestro chocolate oscuro infusionado con esencia natural de menta.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://lh5.googleusercontent.com/proxy/iaBE_fBwRPp9WjeN9BbNfSLNtzxNk-0Dmn8ltOacHO77niJxJr07nNOZk9LMqSZ4HaU3KXXFEQnQtgN5MrgtImwTRIskGowfSApnBH3F5iyv8cw6Pzm_MUu1y165kbO18rwp4AVy_0lqx77Na4ukRKRj6shdxQ" class="card-img-top" alt="Chocolate 3">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate con Nueces</h5>
                        <p class="card-text">Sumérgete en la cremosidad de nuestro chocolate con leche y disfruta del contraste de las nueces tostadas.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Otra sección abajo del catálogo de chocolates -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Otra sección interesante</h2>
                <p>Descubre más sobre nuestra historia, nuestra misión o cómo elaboramos nuestros deliciosos chocolates. ¡Te invitamos a explorar y aprender más sobre el mundo del chocolate artesanal!</p>
            </div>
        </div>
    </div>

</body>
</html>
