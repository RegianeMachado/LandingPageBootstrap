<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <title>Frutas e Saladas</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Frutas & Saladas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">início<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">receitas</a>
                    <a class="nav-item nav-link" href="#">quem somos</a>
                    <a class="nav-item nav-link" href="#">contato</a>
                </div>
            </div>
        </nav>
        <main>
            <section>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/carousel-1.jpg" class="d-block w-100 img-carrousel" alt="salada de frutas">
                            <div class="carousel-caption d-none d-md-block h-50">
                                <h1 class="fonte-titulo fonte-titulo-carrousel display-4">Reaproveite melhor os alimentos!</h1>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-2.jpg" class="d-block w-100 img-carrousel" alt="café da manhã">
                            <div class="carousel-caption d-none d-md-block h-50">
                                <h1 class="fonte-titulo fonte-titulo-carrousel display-4">Economize e ganhe saúde!</h1>
                            </div>
                        </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <h1  class="text-center fonte-titulo cor-especial pt-5">Reaproveite melhor os alimentos!</h1>
                <p class="text-center text-secondary pb-5">Economize e ganhe saúde!</p>
            </section>
            <section>
                <img src="img/middle-1.jpg" alt="tigela com frutas diversas">
                <h3>Tigela de frutas</h3>
                <p>Receita refrescante e cheia de vitaminas para seu café da manhã</p>

                <img src="img/middle-2.jpg" alt="tigela com morangos e mirtilos">
                <h3>Combinado de frutas vermelhas</h3>
                <p>Melhore sua saúde com consumo de frutas diário</p>

                <img src="img/middle-3.jpg" alt="tigela com legumes">
                <h3>Tigela de Legumes</h3>
                <p>Deixe seu almoço mais completo com consumo de saladas e legumes!</p>
            </section>
        </main>

        <!--<h2>Receitas para economizar e ganhar saúde</h2>-->
        <!--<h2>Nossas receitas ajudam você a aproveitar melhor os alimentos, economizar, ganhar tempo e praticidade</h2>;-->



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
