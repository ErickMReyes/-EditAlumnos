<?php ?>

    <style>
    .carousel{
    min-height: 500px;
    }

    .carousel-item img{
        height: 360px;
        width: 640px !important;
        margin-left: -100%;
        margin-top: -50%;
    }
    </style>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class=" card indigo white-text">
            <div class=" card-content">
                <p>
                    Terminar la carrera, tener un buen empleo. Conocer nuevas
                    tecnologías. Ser distraído o la motivación. Me duermo temprano.
                </p>
        
                <p>
                    Adquirir un nuevo conocimiento o no tener Un mal día. Familia,
                    amigos y compañeros del trabajo. Resolver problemas de la vida o de
                    mi carrera. El no saber como resolver problemas de mi trabajo o
                    tareas.
                </p>
            </div>
            </div>
            </div>
    </div>

    <div class="conteiner section width:700px">
        <div class="row">
            <div class="col s12">
                <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="https://static.motor.es/fotos-galerias/fotos-gp-italia-f1-2021/fotos-gp-italia-f1-2021-95685.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="https://static.motor.es/fotos-galerias/fotos-gp-italia-f1-2021/fotos-gp-italia-f1-2021-95686.jpg"></a>
                    <a class="carousel-item" href="#three!"><img src="https://static.motor.es/fotos-galerias/fotos-gp-italia-f1-2021/fotos-gp-italia-f1-2021-95692.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="https://static.motor.es/fotos-galerias/fotos-gp-italia-f1-2021/fotos-gp-italia-f1-2021-95717.jpg"></a>
                    <a class="carousel-item" href="#five!"><img src="https://static.motor.es/fotos-galerias/fotos-gp-italia-f1-2021/fotos-gp-italia-f1-2021-95701.jpg"></a>
                </div>
            </div>
        </div>
    </div>

    <a class="btn-floating btn-large waves-effect waves-light yellow right" href="https://github.com/ErickMReyes"><i class="material-icons">+</i></a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
        });
    </script>
