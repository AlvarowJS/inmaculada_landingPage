<?php 
 include_once 'recursos/docentes.php';
 $ojbDocente = new Datos();
 ?>
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">	
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>Nuestros Docentes</h2> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Banner Area End -->
<!-- Teacher Start -->
<div class="teacher-area pt-150 pb-105">
    <div class="container">
        <div class="row">
        <!-- Inicia la lista de docentes -->
          <?php 
             $docentes = $ojbDocente->docentes();
            // $jsonDoc = json_decode($docentes);
             foreach ($docentes as $k => $value) {
                ?>
                <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <a href="?view=doc_detalles&id_doc=<?=$value['id']?>"><img src="<?=$value['foto']?>" alt="teacher"></a>  
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2><a href="?view=doc_detalles&id_doc=<?=$value['id']?>"><?=$value['nombre']?></a></h2>
                        <h4>Docente Asociado</h4>
                        <ul>
                            <li><a href="<?=$value['facebook']?>"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="<?=$value['pinterest']?>"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="<?=$value['vimeo']?>"><i class="zmdi zmdi-vimeo"></i></a></li>
                            <li><a href="<?=$value['twitter']?>"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php 
             }
           ?>
 
            <!-- Fin de la lista de docentes -->
        </div>
    </div>
</div>
<!-- Teacher End -->