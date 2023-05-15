<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./menu.php") ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Desenvolvimento Web 2</h1>
        <p class="lead">Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
            jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
            aplicações completas.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="Alunas no refeitorio no IFMS CG">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="Reunião de Pais e Professores do IFMS CB">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="Docentes realizando Curso de prepração dos Docentes do IFMS CB">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
               
                    <a href="https://www.ifms.edu.br/noticias/2023/abertas-inscricoes-para-760-vagas-em-cursos-de-graduacao"> <img src="arquivos/imagens/cards1.png" class="card-img-top" alt="Cursos de Graduações oferecidos pelo IFMS"></a>

                    <div class="card-body">
                        <h5 class="card-title">Graduação IFMS 2023</h5>
                        <p class="card-text">Podem participar candidatos que fizeram o Enem 2022 com nota acima de zero na redação. 
                            Oferta é em oito municípios.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>