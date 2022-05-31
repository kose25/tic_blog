<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monica Fonseca</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
</head>

<body style="padding-top: 89px;">
    @include('navbar')
    <img src="{{ asset('/images/1.jpg') }}" alt="" class="img-fluid">
    <div class="container-fluid">
        <div class="row" id="quiensoy">
            <div class="col-md-6 p-4 align-self-center">
                <h3>¿Quien</h3>
                <h1>soy?</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto consequuntur, a placeat repudiandae
                    cum
                    assumenda repellendus, eveniet suscipit pariatur aut vel cumque hic nam quae autem saepe cupiditate
                    doloremque vero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae itaque perferendis sunt aut eum
                    reprehenderit sed assumenda saepe alias consectetur, harum, praesentium adipisci nihil quo iste
                    laudantium. Ex, quas dolore.</p>
                <button type="button" class="btn btn-dark">Dark</button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/2.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-fill mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="pill" href="#ex2-pills-1" role="tab"
                        aria-controls="ex2-pills-1" aria-selected="true">Educacion</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="pill" href="#ex2-pills-2" role="tab"
                        aria-controls="ex2-pills-2" aria-selected="false">Habilidades</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="pill" href="#ex2-pills-3" role="tab"
                        aria-controls="ex2-pills-3" aria-selected="false">Idiomas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-4" data-mdb-toggle="pill" href="#ex2-pills-4" role="tab"
                        aria-controls="ex2-pills-4" aria-selected="false">Experiencia</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade show active" id="ex2-pills-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                    <div class="row">
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Ingeniera de Sistemas <br>
                            1999
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                    <div class="row text-center">
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                        <div class="col-md-4 mt-4">
                            <b>Comunicacion Asertiva</b>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                    <div class="row justify-content-md-center text-center gx-5 py-5">
                        <div class="col-md-4">
                            <b>Español</b>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <b>Ingles</b>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-4" role="tabpanel" aria-labelledby="ex2-tab-4">
                    <div class="row text-center p-5">
                        <div class="col-12">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores magni odit, iste
                            animi mollitia? Voluptate accusantium nam eligendi, iure saepe esse quod sapiente amet ex
                            aliquam expedita deleniti mollitia? <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores ratione voluptas, quasi
                            eligendi minus praesentium nam nesciunt doloremque eaque quis ab culpa, soluta debitis
                            accusantium fugiat dolor pariatur eius. <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, officia? Ducimus qui
                            earum maiores sunt quaerat laborum nesciunt excepturi nisi ut a veniam asperiores, numquam,
                            culpa nulla placeat, eligendi voluptas! <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem exercitationem
                            molestias fugiat delectus magni quasi blanditiis mollitia expedita eius veniam excepturi,
                            consequuntur sapiente minus numquam aut harum, omnis corporis? <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('footer')
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</body>

</html>