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
    <!-- CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
</head>

<body style="padding-top: 150px;">
    @include('navbar')
    {{--<img src="{{ asset('/images/1.jpg') }}" alt="" class="img-fluid">--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/images/Banner-1.jpg') }}" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/images/Banner-2.jpg') }}" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/images/Banner-3.jpg') }}" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
    <div class="container-fluid">
        <div class="row" id="quiensoy">
            <div class="col-md-6 p-4 align-self-center">
                <h3>??Quien</h3>
                <h1>soy?</h1>
                <p>Profesional con m??s de 20 a??os de experiencia, apasionada por la investigaci??n, la innovaci??n, la tecnolog??a, el desarrollo sostenible y el empoderamiento femenino.<br>
                Buscando permanentemente transformar realidades y aportar para el desarrollo de un mundo mejor</p>
                <button type="button" class="btn btn-dark d-none">Dark</button>
            </div>
            <div class="col-md-6">
                {{--<img src="{{ asset('/images/2.jpg') }}" alt="" class="img-fluid">--}}
                <div class="view">
                    <video class="video-fluid" autoplay="" loop="" muted="" width="100%">
                        <source src="{{ asset('/videos/Secuencia.mp4') }}" type="video/mp4">
                    </video>
                </div>
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
                            <b>Corporaci??n Universitaria de Santander</b>
                            <br>Especialista en Gerencia de Empresas<br>
                            1999
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Corporaci??n Universitaria de Santander</b>
                            <br>Especialista en Administraci??n y Docencia Universitaria<br>
                            2000
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Corporaci??n Universitaria Iberoamericana</b>
                            <br>Especialista en Formulaci??n y Evaluaci??n de Proyectos de Desarrollo Social<br>
                            2001
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Pedag??gica Experimetal Libertador</b>
                            <br>M??ster en Planificaci??n Globa<br>
                            2012
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Tecnol??gico de Monterrey</b>
                            <br>M??ster en Innovaci??n para el Desarrollo Empresarial<br>
                            2015
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <b>Universidad Pontificia Bolivariana</b>
                            <br>Estudiante Doctorado en Gesti??n de la Tecnolog??a y la Innovaci??n<br>
                            2019
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                    <div class="row text-center">
                        <div class="col-md-4 my-4">
                            <b>E mpat??a - Autonom??a - Proactividad.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Comunicaci??n asertiva.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Relaciones interpersonales Trabajo en equipo.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Toma de decisiones.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Soluci??n de problemas y conflictos.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Pensamiento creativo, cr??tico e innovador</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Flexibilidad y capacidad de adaptaci??n.</b>
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Resistencia a la presi??n.</b>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                    <div class="row justify-content-md-center text-center gx-5 py-5">
                        <div class="col-md-4">
                            <b>Espa??ol</b>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <b>Ingles</b>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-pills-4" role="tabpanel" aria-labelledby="ex2-tab-4">
                <div class="row">
                        <div class="col-md-4 my-4">
                            <b> Alcald??a de C??cuta</b>
                            <br>Secretaria TIC<br>
                            Diciembre 2020- ACT
                        </div>
                        <div class="col-md-4 my-4">
                            <b>CORPORACI??N PROPULSORA DE EMPRE - SAS DE NORTE DE SANTANDER.</b>
                            <br>Directora Ejecutiva Nacional<br>
                            2004 - Marzo 2020
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Estudiante de Doctorado</b>
                            <br>Investigador Colciencias - Convocatoria 2021<br>
                            2014 - Marzo 2020.
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Universidad Libre de Colombia.</b>
                            <br>Docente de C??tedra Facultad de ingenier??as<br>
                            2018- ACT
                        </div>
                        <div class="col-md-4 my-4">
                            <b>Universidad Francisco de Paula Santander</b>
                            <br>Docente de Innovaci??n Tecnol??gica - MBA<br>
                            2019
                        </div>
                        <div class="col-md-4 my-4">
                            <b>EXPERIENCIA EN DIRECCI??N DE PROYECTOS DE INNOVACI??N, TECNOL??GIA, INCUBACI??N Y ACELERACI??N</b>
                            <br>10 Proyectos de Innovaci??n<br>
                            7 Proyectos de Implementaci??n Tecnol??gica<br>
                            15 Proyectos de Incubaci??n<br>
                            7 Proyectos de Fortalecimiento Empresarial.
                        </div>
                        <div class="col-md-4 my-4">
                            <b>EXPERIENCIA EN SOLUCIONES EMPRESARIALES, CONSULTOR??A, ASISTENCIA T??CNICA Y TRAINING</b>
                            <br>18 Proyectos de Soluciones Empresariales<br>
                                25 Procesos Empresariales de Consultor??a<br>
                                30 Intervenciones de Asistencia T??cnica.<br>
                                15 Proyectos de Desarrollo Sostenible.
                        </div>
                        <div class="col-md-4 my-4">
                            <b>EXPERIENCIA EN INVESTIGACI??N, PATENTES, MARCAS Y DESARROLLO TECNOL??GICO</b>
                            <br>5 Investigaciones realizadas.<br>
                                3 acompa??amientos a Patentes<br>
                                5 acompa??amientos a registros de Marcas<br>
                                4 Proyectos de Desarrollo Tecnol??gico.
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