<?php 
   include_once 'recursos/docentes.php';
   $ojbDocente = new Datos();

  if (isset($_GET['id_doc'])) {
     $id_doc = $_GET['id_doc'];
  }

  $docentes = $ojbDocente->docentes();
  $array = array($docentes[$id_doc-1]);

  foreach ($array as $key => $value) {
        $nombres = $value['nombre'].' '.$value['apellido'];
        $foto = $value['foto_detalle'];
        $correo = $value['correo'];
        $celular = $value['celular'];
        $web = $value['web'];
        $curso = $value['curso'];
        $hobbies = $value['hobbies'];
        $experiencia = $value['experiencia'];
        $profesion = $value['profesion'];
        $descripcion = $value['descripcion'];
  }
  
 ?>
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">	
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>Docente / Detalles</h2> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Banner Area End -->
<!-- Teacher Start -->
<div class="teacher-details-area pt-150 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="teacher-details-img">
                    <img src="img/teacher/teacher-details.jpg" alt="teacher">  
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="teacher-details-content ml-50">
                    <h2><?=$nombres?></h2>
                    <h5>Docente Asociado</h5>
                    <h4>Sobre mí</h4>
                    <p><?=$descripcion?></p>
                    <ul>
                        <li><span>Profesión: </span><?=$profesion?></li>
                        <li><span>Experiencia: </span><?=$experiencia?></li>
                        <li><span>Hobbies: </span><?=$hobbies?></li>
                        <li><span>Curso: </span><?=$curso?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="teacher-contact">
                    <h4>Información de contacto</h4>
                    <p><span>Correo : </span><?=$correo?></p>
                    <p><span>Celular : </span>(+51) <?=$celular?></p>
                    <p><span>Web : </span> <?=$web?></p>
                    <ul>
                        <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                        <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="skill-area">
                    <h4>Habilidades</h4>
                </div>  
                <div class="skill-wrapper">     
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Lenguaje</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Jefe de Equipo</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 90%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Desarrollo</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Diseño</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Innovación</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span>Comunicación</span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <span class="text-top">95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>     
            </div>
        </div>
    </div>
</div>
<!-- Teacher End -->