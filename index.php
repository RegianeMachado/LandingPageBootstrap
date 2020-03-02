<?php include_once 'header.php';?>
        <main>
            <section class="carrosel">
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
            </section>
            <section class="titulos">
                <h1  class="text-center fonte-titulo cor-especial pt-5">Reaproveite melhor os alimentos!</h1>
                <p class="text-center text-secondary pb-5">Economize e ganhe saúde!</p>
            </section>
            <?php include_once 'cards.php';?>
        </main>

        <!--<h2>Receitas para economizar e ganhar saúde</h2>-->
        <!--<h2>Nossas receitas ajudam você a aproveitar melhor os alimentos, economizar, ganhar tempo e praticidade</h2>;-->

    <?php include_once 'footer.php';?>