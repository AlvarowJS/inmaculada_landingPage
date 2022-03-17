<?php 
/*
  ==========  Diseñado y elaborado: Elias Raymundo Torres  ==========
*/
echo '<!doctype html>';
echo '<html class="no-js" lang="es">';
/*
  archivos de head para la pagina
  <head>
  ***********************************
*/
  //recibir datos GET
if(isset($_GET['view'])){
  $view=$_GET['view'];
} else {
    $view='inicio';
}
include_once ('info/head.php'); 
/***************************************/
   echo '<body>';

               /*********************************/ 
               include_once ('info/header.php'); 
               /*********************************/ 
                /* 
                  Se mostrará todo el contenido de la página
                */  
                if($view=='inicio'){
                     include_once ('files/inicio.php');
                  }
                elseif ($view=='docentes') {
                     include_once ('files/docentes.php');
                }
                elseif ($view=='doc_detalles') {
                   if (isset($_GET['id_doc'])) {
                        include_once ('files/doc_detalles.php');
                      }
                } elseif ($view=='historia') {
                  include_once ('files/historia.php');
                } elseif ($view=='vision') {
                  include_once ('files/vision.php');
                } elseif ($view=='mision') {
                  include_once ('files/mision.php');
                } elseif ($view=='servicios') {
                  include_once ('files/servicios.php');
                } elseif ($view=='carpinteria') {
                  include_once ('files/servicios/carpinteria.php');
                } elseif ($view=='cocina') {
                  include_once ('files/servicios/cocina.php');
                } elseif ($view=='computacion') {
                  include_once ('files/servicios/computacion.php');
                } elseif ($view=='confeccion') {
                  include_once ('files/servicios/confeccion.php');
                } elseif ($view=='contabilidad') {
                  include_once ('files/servicios/contabilidad.php');
                } elseif ($view=='panaderia') {
                  include_once ('files/servicios/panaderia.php');
                } elseif ($view=='peluqueria') {
                  include_once ('files/servicios/peluqueria.php');
                } elseif ($view=='secretariado') {
                  include_once ('files/servicios/secretariado.php');
                } elseif ($view=='tejido') {
                  include_once ('files/servicios/tejido.php');
                } elseif ($view=='contactos') {
                  include_once ('files/contactos.php');
                }
    
               /* ************************************* */
               include_once ('info/footer.php');
               /**************************************/
               
               include_once ('info/javascript.php');
               /************************************/
        

    echo '</body>';
/**************************************/
echo '</html>';

echo '<div id="WABoton"></div>';
