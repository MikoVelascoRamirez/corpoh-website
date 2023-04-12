<?php
  include './php/banxico.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" href="../resources/imgs/logo-corpoh.ico">
  <link rel="stylesheet" href="../css/estilo-corpoh.css">
  <title>CORPOH Servicios Contables, Fiscales y Administrativos</title>
</head>

<body>
  <?php
  include_once('./html/header.php');
  ?>

  <!-- Content -->
  <div class="w3-content" id="inicio">
    <div class="w3-row">

      <div class="w3-col w3-container w3-panel" style="width:20%" id="logo">
        <img src="../resources/imgs/logo-corpoh.png" class="w3-round w3-image" alt="corpoh" style="width:200px">
      </div>

      <div class="w3-rest w3-container w3-panel">
        <h1><b>CORPOH EMPRESARIAL</b></h1>
        <p>Servicios Contables, Fiscales, Administrativos y Arrendamiento</p>
      </div>
    </div>

    <!-- Slideshow -->
    <div class="w3-container" id="gallery">

      <div class="w3-display-container mySlides fade">
        <img src="../resources/imgs/administracion_lema.jpg" style="width:100%" class="w3-opacity-min">
        <div class="w3-display-middle w3-container w3-center w3-col">
          <h1><span class="w3-blue w3-padding-large">CORPOH</span></h1>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col" id="info">
          <span class="w3-text-white w3-padding-large">
            <h3>"Que la tecnología contable no sea un problema".</h3><br>
          </span>
        </div>
      </div>

      <div class="w3-display-container mySlides fade">
        <img src="../resources/imgs/administracion_1.jpg" style="width:100%" class="w3-opacity-min">
        <div class="w3-display-middle w3-container w3-center w3-col">
          <h1><span class="w3-blue w3-padding-large">Servicios Contables</span></h1>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col" id="info">
          <span class="w3-text-white w3-padding-large">
            <h3>Nuestra experiencia y eficiencia nos respaldan, lleva tu contabilidad al día con los múltiples
              servicios que tenemos.</h3><br>
          </span>
        </div>
      </div>

      <div class="w3-display-container mySlides fade">
        <img src="../resources/imgs/contabilidad.jpg" style="width:100%" class="w3-opacity-min">
        <div class="w3-display-middle w3-container w3-center w3-col">
          <h1><span class="w3-blue w3-padding-large ">Servicios Fiscales</span></h1>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col" id="info">
          <span class="w3-text-white w3-padding-large">
            <h3>Evítate problemas al momento de declarar.<br>Con CORPOH, podrás ponerte al día en materia fiscal de
              manera responsable y autónoma.
            </h3><br>
          </span>
        </div>
      </div>

      <div class="w3-display-container mySlides fade">
        <img src="../resources/imgs/fiscales.jpg" style="width:100%" class="w3-opacity-min">
        <div class="w3-display-middle w3-container w3-center w3-col">
          <h1><span class="w3-blue w3-padding-large">Servicios Administrativos</span></h1>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col" id="info">
          <span class="w3-text-white w3-padding-large ">
            <h3>En CORPOH, te brindamos asesoría de calidad para que puedas iniciar tu empresa de manera óptima.
              Todo lo que necesitas para gestionarla con creces.</h3><br>
          </span>
        </div>
      </div>

      <div class="w3-display-container mySlides fade">
        <img src="../resources/imgs/arrendamiento.jpg" style="width:100%" class="w3-opacity-min">
        <div class="w3-display-middle w3-container w3-center w3-col" id="question">
          <span class="w3-text-white w3-padding-large">
            <h3>¿buscas una alternativa para</h3><br>
          </span>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col">
          <h1><span class="w3-blue w3-padding-large">adquirir oficinas para trabajar?</span></h1>
        </div>
        <div class="w3-display-middle w3-container w3-center w3-col" id="info">
          <span class="w3-text-white w3-padding-large">
            <h3>Contamos con excelentes servicios de arrendamiento, trabaja y administra tu tiempo como todo un
              profesional dentro de nuestras instalaciones</h3><br>
          </span>
        </div>
      </div>

      <!-- Slideshow botones -->
      <div class="w3-container w3-black w3-padding w3-xlarge">
        <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
        <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>

        <div class="w3-center">
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
          <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
        </div>
      </div>

      <!-- Values card -->
      <div class="w3-col m3 w3-panel w3-display-topright" id="values">
        <ul class="w3-ul w3-card-2 w3-indigo">
          <li class="w3-display-container">
            <div class="w3-row">
              <div class="w3-col" style="width:50%;">Dólar compra: <?php echo $val1?></div>
              <div class="w3-col" style="width:50%;">Dólar venta: <?php echo $val2?></div>
            </div>
          </li>
          <li class="w3-display-container">UMA: $84.49</li>
          <li class="w3-display-container">ISR<a href="https://www.sat.gob.mx/cs/Satellite?blobcol=urldata&blobkey=id&blobtable=MungoBlobs&blobwhere=1461173526473&ssbinary=true" target="_blank" style="text-decoration: none;"><span class="w3-button w3-display-right w3-hover-white"><i class="fas fa-arrow-circle-right"></i></span></a></li>
          <li class="w3-display-container">INPC<a href="https://www.banxico.org.mx/SieInternet/consultarDirectorioInternetAction.do?accion=consultarCuadro&idCuadro=CP154&locale=es" target="_blank" style="text-decoration: none;"><span class="w3-button w3-display-right w3-hover-white"><i class="fas fa-arrow-circle-right"></i></span></a></li>
          <li class="w3-display-container">Salario mínimo: $207.44<span class="w3-button w3-display-right w3-hover-white" onclick="disList('lista');"><i class="fas fa-arrow-circle-down"></i></span></li>
        </ul>
        <div id="lista" class="w3-card w3-white w3-hide w3-animate-zoom">
          <a href="https://www.gob.mx/cms/uploads/attachment/file/426395/2019_Salarios_Minimos.pdf" target="_blank" class="w3-button w3-block w3-left-align w3-hover-black">Precio por zona</a>
          <a href="https://www.gob.mx/cms/uploads/attachment/file/426395/2019_Salarios_Minimos.pdf" target="_blank" class="w3-button w3-block w3-left-align w3-hover-black">Precio por oficio</a>
        </div>
      </div>

    </div>

    <!-- Acerca de nosotros-->
    <div class="w3-row w3-container" id="about">
      <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-blue w3-hover-border-dark-grey w3-padding-16 w3-animate-top">Acerca de
          nosotros</span>
      </div>

      <div class="w3-col l6 m6 w3-container w3-padding-16 w3-hover-shadow w3-center w3-text-white" style="height: 200px; background-color: #0652DD;" id="mision">
        <h3>Misión</h3>
        <p>Ser un corporativo donde nuestros clientes encuentren la solución al momento que la requieren, satisfaciendo
          sus necesidades
          contables, fiscales o administrativos de forma virtual o física cumpliendo con los requerimientos y
          disposiciones fiscales vigentes.
        </p>
      </div>

      <div class="w3-col l6 m6 w3-black w3-container w3-padding-16 w3-hover-shadow w3-center" id="vision" style="height: 200px;">
        <h3>Visión</h3>
        <p>Desarrollar una plataforma que puedan utilizar nuestros clientes, como herramienta para facilitarles el
          control de su
          información fiscal y/o contables con mayor eficiencia con la calidad que nos distingue.
        </p>
      </div>
    </div>

    <!-- Services-->
    <div class="w3-row-padding" id="services">
      <div class="w3-center w3-padding-64 w3-animate-bottom">
        <h3>Nuestros servicios</h3>
        <p>Con nosotros, la contabilidad ya no será un problema.</p>
      </div>

      <div class="w3-quarter w3-margin-bottom" id="contable">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Contables</li>
          <li class="w3-padding-24 w3-hover-blue" onclick="carrusel('fac')">Facturación Electrónica</li>
          <div id="fac" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Facturación por medio del portal del SAT o sistemas e-Facture, SAC.</p>
          </div>
          <li class="w3-padding-24 w3-hover-blue" onclick="carrusel('fac1')">Nóminas en Sistema y Manuales</li>
          <div id="fac1" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Gestionamos el control, asistencia, incidencias de su nómina, su cálculo a través del sistema
              NOI, así como su timbrado.
            </p>
          </div>
          <li class="w3-padding-24 w3-hover-blue" onclick="carrusel('fac2')">Liquidaciones y Finiquitos</li>
          <div id="fac2" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Cálculo de la liquidación o el finiquito de un trabajador (ver diferencias)
            </p>
          </div>
          <li class="w3-padding-24 w3-hover-blue" onclick="carrusel('fac3')">Contabilidad portal y en Sistema</li>
          <div id="fac3" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>A través de nuestro sistema, administramos su negocio para que usted no se preocupe por la contabilidad.
            </p>
          </div>
          <li class="w3-padding-24 w3-hover-blue" onclick="carrusel('fac4')">Estados Financieros</li>
          <div id="fac4" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Te ayudamos a llevar el manejo financiero en tu empresa de forma puntual para que puedas tomar decisiones
              asertivas.
            </p>
          </div>
        </ul>
      </div>

      <div class="w3-quarter w3-margin-bottom" id="fiscal">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="w3-xlarge w3-padding-32 w3-text-white" style="background-color: #0652DD;">Fiscales</li>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc')">Registro ante el SAT</li>
          <div id="fisc" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Alta a personas físicas, morales, RIF, sueldos y salarios, arrendamiento.</p>
          </div>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc1')">Declaraciones provisionales</li>
          <div id="fisc1" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Cumple con tus obligaciones fiscales (ISR, IVA, IEPS) a través de la presentación de declaraciones,
              integrando ingresos y deducciones.</p>
          </div>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc2')">Declaraciones Anuales</li>
          <div id="fisc2" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Recuerda que las personas físicas y morales tienen la obligación de presentarlo.
            </p>
          </div>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc3')">Declaraciones informativas</li>
          <div id="fisc3" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Informa las operaciones con proveedores relacionados con el impuesto al valor agregado (IVA)</p>
          </div>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc4')">Dictamenes IMSS y SAT</li>
          <div id="fisc4" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Opinión de cumplimiento</p>
          </div>
          <li class="w3-padding-16 w3-hover-black" onclick="carrusel('fisc5')">Impuestos locales, estatales y federales</li>
          <div id="fisc5" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*Impuesto sobre nóminas</p>
            <p>*IEPS</p>
          </div>
        </ul>
      </div>

      <div class="w3-quarter w3-margin-bottom" id="admin">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Administrativos</li>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin11')">Movimientos afiliatorios al IMSS</li>
          <div id="admin11" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Cumple con tus obligaciones ante el IMSS</p>
            <p>*Altas</p>
            <p>*Reingresos</p>
            <p>*Bajas</p>
            <p>*Modificación de salarios</p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin1')">Contratación de personal</li>
          <div id="admin1" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Le apoyamos en la búsqueda, aplicación de pruebas y filtrados de su candidato idóneo.</p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin2')">Elaboración de contratos</li>
          <div id="admin2" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Asegúrese de que su empleado es consciente de sus obligaciones y proteja su clientela y la propiedad
              intelectual de su negocio.
            </p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin3')">Estudios socioeconómicos</li>
          <div id="admin3" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*Investigación y validación de referencias</p>
            <p>*Visitas domicilarias</p>
            <p>*Entrevista</p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin4')">Capacitación para empresas y personales</li>
          <div id="admin4" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*A través de estos cursos harás que tus colaboradores sean mas eficientes, desarrollen sus conocimientos
              y habilidades para especializarlos en las necesidades de su organización.<br><br>
              *Ventas<br>
              *Liderazgo
            </p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin5')">Asesorías y distribución en sistema de ASPEL</li>
          <div id="admin5" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Venta, instalación, capacitación de uso de los programas de:<br><br>
              <a href="#pie" target="_blank" style="text-decoration: none;">*SAE<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*Facture<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*COI<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*NOI<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*Prod<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*Banco<br></a>
              <a href="#pie" target="_blank" style="text-decoration: none;">*Seguimiento post-venta<br></a>
            </p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin6')">Asesorías en página de dependencias gubernamentales</li>
          <div id="admin6" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*Obtención de actas de nacimiento</p>
            <p>*Buró de crédito</p>
            <p>*CURP</p>
          </div>
          <li class="w3-padding-small w3-hover-blue" onclick="carrusel('admin7')">Distribución y venta de lectores para aceptación de pagos con
            tarjeta</li>
          <div id="admin7" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*Venta, distribución y capacitación del dispositivo iZettle.</p>
            <p>*Seguimiento post-venta.</p>
          </div>
        </ul>
      </div>

      <div class="w3-quarter w3-margin-bottom" id="ots">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="w3-xlarge w3-padding-32 w3-text-white" style="background-color: #0652DD;">Outsourcing</li>
          <li class="w3-padding-32 w3-hover-black" onclick="carrusel('out')">Contratación de personal</li>
          <div id="out" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>*Publicación de sus vacantes.</p>
            <p>*Entrevista.</p>
            <p>*Aplicación de evaluaciones.</p>
          </div>
          <li class="w3-padding-32 w3-hover-black" onclick="carrusel('out1')">Estudios socioeconómicos</li>
          <div id="out1" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Fortalecemos los procesos de contratación y selección del personal para conocer los aspectos
              importantes sobre los empleos anteriores del candidato y evitar la contratación de personal conflictivo o
              con malos antecedentes laborales.
            </p>
          </div>
          <li class="w3-padding-32 w3-hover-black" onclick="carrusel('out2')">Servicio de nóminas</li>
          <div id="out2" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Liberamos tu carga administraiva y económica al optimizar los procesos de pago de tus trabajadores y a su
              vez, cumplas con las obligaciones que las autoridades legales y fiscales soliciten.
            </p>
          </div>
          <li class="w3-padding-32 w3-hover-black" onclick="carrusel('out3')">Domicilio fiscal</li>
          <div id="out3" class="w3-hide w3-container w3-animate-zoom" style="background-color: #2c3e50; color:white">
            <p>Espacios físicos o virtuales para que puedas recibir a tus clientes, proveedores, documentación, autoridades
              fiscales, etc.
            </p>
          </div>
        </ul>
      </div>

    </div>

    <!--Arrendamiento-->
    <div class="w3-row-padding" style="margin: 16px 0" id="roomss">
      <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-blue w3-hover-border-dark-grey w3-padding-16 w3-animate-top">Nuestras
          oficinas</span>
      </div>

      <div class="w3-half w3-padding-16" id="gallery">
        <div class="w3-container">
          <div class="w3-display-container mySlides1">
            <img src="../resources/imgs/room24.jpeg" style="width:100%;">
            <div class="w3-display-bottomleft w3-container w3-black" style="margin-bottom: 5px;">
              <p>Oficina indivdual</p>
            </div>
          </div>
          <div class="w3-display-container mySlides1">
            <img src="../resources/imgs/room26.jpeg" style="width:100%;">
            <div class="w3-display-bottomleft w3-container w3-black" style="margin-bottom: 5px;">
              <p>Sala de juntas</p>
            </div>
          </div>
          <div class="w3-display-container mySlides1">
            <img src="../resources/imgs/room27.jpeg" style="width:100%;">
            <div class="w3-display-bottomleft w3-container w3-black" style="margin-bottom: 5px;">
              <p>Exterior</p>
            </div>
          </div>
          <div class="w3-display-container mySlides1">
            <img src="../resources/imgs/room30.jpeg" style="width:100%;">
            <div class="w3-display-bottomleft w3-container w3-black" style="margin-bottom: 5px;">
              <p>Recepción</p>
            </div>
          </div>
        </div>

        <div class="w3-row-padding w3-section">
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="../resources/imgs/room24.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv1(1)" title="Oficina indivdual">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="../resources/imgs/room26.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv1(2)" title="Sala de juntas">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="../resources/imgs/room27.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv1(3)" title="Oficina indivdual">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="../resources/imgs/room30.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv1(4)" title="Sala de juntas">
          </div>
        </div>
      </div>

      <div class="w3-half">
        <div class="w3-col w3-dark-grey w3-container w3-padding-large w3-center" style="height: 50%;" id="details">
          <h4><strong>Características</strong></h4>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-male w3-margin-right"></i> Capacidad total: 15</p>
            <p><i class="fa fa-fw fa-bath w3-margin-right"></i> Baños: 1</p>
            <p><i class="fas fa-building w3-margin-right"></i></i> Oficinas: 3</p>
          </div>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-clock-o w3-margin-right"></i> Hora inicio: 8 AM</p>
            <p><i class="fa fa-fw fa-clock-o w3-margin-right"></i> Hora final: 8 PM</p>
          </div>
        </div>

        <div class="w3-col w3-container w3-padding-large w3-center" style="height: 50%; background-color: #0097e6; color: white;" id="details">
          <h4><strong>Servicios</strong></h4>
          <div class="w3-col s6">
            <p><i class="fas fa-mug-hot w3-margin-right"></i> Coffee break</p>
            <p><i class="fas fa-print w3-margin-right"></i> Impresiones</p>
            <p><i class="fas fa-hands-helping w3-margin-right"></i> Asistente personal</p>
          </div>
          <div class="w3-col s6">
            <p><i class="fa fa-fw fa-wifi w3-margin-right"></i>Internet</p>
            <p><i class="fas fa-phone w3-margin-right"></i>Teléfono</p>
          </div>
        </div>

        <div class="w3-col w3-padding-large w3-center w3-margin-top" id="big_button">
          <a href="./html/offices.php" style="text-decoration: none;"><button class="w3-button w3-round w3-xlarge w3-block w3-red">Reservar oficina</button></a>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="w3-center w3-padding-32" id="contact">
      <span class="w3-xlarge w3-bottombar w3-border-blue w3-hover-border-dark-grey w3-padding-16 w3-animate-bottom">Contacto</span>
    </div>

    <div class="w3-row w3-padding">

      <div class="w3-container w3-twothird">
        <form class="w3-container" action="./php/action_page.php" method="post">
          <div class="w3-section sect">
            <label>Nombre</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
          </div>
          <div class="w3-section sect">
            <label>Correo electrónico</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="email" name="Email" required>
          </div>
          <div class="w3-section sect">
            <label>Teléfono</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="phone" required>
          </div>
          <div class="w3-section sect">
            <label>Asunto</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
          </div>
          <div class="w3-section sect">
            <label>Mensaje</label>
            <textarea class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required></textarea>
          </div>
          <button type="submit" class="w3-button w3-block sect" style="background-color: #0097e6; color: white">Enviar
            correo</button>
          <div class="w3-section sect">
            <h6 class="w3-center">Antes de proporcionar sus datos, lea nuestro <a class="w3-hover-text-blue" onclick="document.getElementById('id01').style.display='block'"><b>AVISO DE PRIVACIDAD.</b></a></h6>
          </div>
        </form>
      </div>

      <!--Modal-->

    <!--Define container para modal-->
    <div id="id01" class="w3-modal">
        <!--Define el contenido del modal-->
        <div class="w3-modal-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-blue">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-blue
                w3-xlarge w3-display-topright w3-hover-red">&times;</span>
                <h2>Aviso de Privacidad</h2>
            </header>
            <div class="w3-bar w3-border-bottom">
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'uno')">Acerca de CORPOH</button>
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'dos')">Uso de datos</button>
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'tres')">Aviso de Privacidad Integral</button>
            </div>

            <div id="uno" class="w3-container number">
                <h3>¿Quiénes somos?</h3>
                <p>RICARDO NOE HERNANDEZ LOPEZ, mejor conocido como CORPOH
                    EMPRESARIAL, con domicilio en calle MIGUEL HIDALGO 107 INT 25, colonia
                    CENTRO, ciudad TULANCINGO, municipio o delegación TULANCINGO, c.p.
                    43600, en la entidad de HIDALGO, país MEXICO, y portal de internet
                    corpohdez@corpoh.com, es el responsable del uso y protección de sus datos
                    personales.</p>
            </div>

            <div id="dos" class="w3-container number" style="display: none;">
                <h3>¿Para qué fines utilizaremos
                    sus datos personales?</h3>
                <p>Los datos personales que recabamos de usted, los utilizaremos para las siguientes
                    finalidades que son necesarias para el servicio que solicita:
                    <ul>
                        <li>Medio de contacto para ofrecer los servicios</li>
                        <li>Propsección comercial</li>
                    </ul>
                </p>
            </div>

            <div id="tres" class="w3-container number" style="display: none;">
                <h3>¿Dónde puedo consultar el
                    aviso de privacidad integral?</h3>
                <p>Para conocer mayor información sobre los términos y condiciones en que serán
                    tratados sus datos personales, como los terceros con quienes compartimos su
                    información personal y la forma en que podrá ejercer sus derechos ARCO, puede
                    consultar el aviso de privacidad integral a través del vinculo en la página de internet.</p>
            </div>

            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border w3-hover-black" onclick="document.getElementById('id01').style.display='none'">
                    Estoy de acuerdo
                </button>
            </div>
        </div>
    </div>

      <div class="w3-third w3-hover-shadow" style="margin-top: 24px;">
        <ul class="w3-ul w3-center">
          <li class="w3-black w3-xlarge w3-padding-24">Contacto</li>
          <li class="w3-padding-16 w3-hover-blue"><i class="fas fa-map-marker-alt w3-margin-right"></i>Calle Miguel
            Hidalgo No. 107, Int No. 25 (dentro de Plaza Karima), Tulancingo, Hidalgo, México</li>
          <li class="w3-padding-16 w3-hover-blue"><i class="fas fa-mobile-alt w3-margin-right"></i>7757547518</li>
          <li class="w3-padding-16 w3-hover-blue"><i class="fab fa-whatsapp w3-margin-right"></i>7751664713</li>
          <li class="w3-padding-16 w3-hover-blue"><i class="fas fa-envelope w3-margin-right"></i>corpohdez@corpoh.com
          </li>
          <li class="w3-padding-16 w3-hover-blue"><i class="fab fa-facebook-square w3-margin-right"></i>
            <a href="https://www.facebook.com/corpohsecofia/" title="CORPOH" target="_blank" style="text-decoration: none;">CORPOHSECOFIA</a>
          </li>
        </ul>
      </div>

    </div>

    <!-- Map -->
    <div class="w3-row w3-padding" id="about" style="margin: 32px 0 ">
      <div class="w3-hover-shadow">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.2444298628607!2d-98.37261325000965!3d20.082066624730455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d056f5c9c78179%3A0x2d18d4f48391ed41!2sMiguel+Hidalgo+107%2C+Centro%2C+43600+Tulancingo+de+Bravo%2C+Hgo.!5e0!3m2!1ses-419!2smx!4v1554999642446!5m2!1ses-419!2smx" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

  </div>

  <!-- Cinta de pagos-->
  <div class="w3-center w3-padding-small w3-text-white" style="background-color: #30336b;" id="main_sprite">
    <h5>Aceptamos pagos con tarjeta</h5>
  </div>

  <div class="spriting w3-center w3-padding-small" style="background-color: #30336b; display: none;" id="sprite_banks">
    <div class="w3-center w3-padding-small" id="sprite-one">
      <div id="bbva" class="sprite_one"></div>
      <div id="banamex" class="sprite_two"></div>
      <div id="santander" class="sprite_three"></div>
      <div id="scotiabank" class="sprite_four"></div>
      <div id="inbursa" class="sprite_five"></div>
      <div id="si_vale" class="sprite_six"></div>
      <div id="amex" class="sprite_seven"></div>
      <div id="azteca" class="sprite_eight"></div>
    </div>
    <div class="w3-center w3-padding-small" id="sprite-two">
      <div id="hsbc" class="sprite_nine"></div>
      <div id="bajio" class="sprite_ten"></div>
      <div id="banorte" class="sprite_eleven"></div>
    </div>
  </div>

  <?php
  include_once('./html/footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    // Slideshow carrusel principal
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demodots");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      };
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " w3-white";
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demodots");
      for (i = 0; i < slides.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " w3-white";
      setTimeout(showSlides, 7000);
    }

    //Mostrar y ocultar banner bancos
    $("#main_sprite").hover(
      function(e) {
        $("#sprite_banks").slideDown();
        e.preventDefault();
      },
      function(e) {
        $("#sprite_banks").slideUp();
        e.preventDefault();
      }
    );

    //Funciones para abrir y cerrar menú lateral

    function gestionBoton() {
      var sidebar = document.getElementById("buttonSlide");

      if (sidebar.textContent == "☰") {
        sidebar.textContent = "|||";
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("mySidebar").style.backgroundColor = "rgba(45, 52, 54,0.8)";
      } else if (sidebar.textContent == "|||") {
        sidebar.textContent = "☰";
        $("#mySidebar").hide(
          "drop", {
            direction: "left"
          },
          "medium");
      }
    }

    //Comportamiento responsive

    $(document).ready(function() {

      var linkHome = $('#start').children('a');
      var buttonSide = $('#start').children('button');
      var linkRooms = $('#serv').children('a');

      if ($(window).width() < 584) {
        $(linkRooms).text('CORPOH');
        $('#buttonSlide').attr({
          style: "display: block"
        });
        $('#serv').removeClass("w3-col");
        $('#serv').removeClass("w3-dropdown-hover");
        $('#serv').removeClass("w3-hover-black");
        $('#values').removeClass("w3-panel w3-display-topright");
        $('#values').removeAttr("style");
        $('#serv').removeAttr("style");
        $('#serv').addClass("w3-rest");
        $('#serv').addClass("w3-xlarge");
      } else {
        $(linkRooms).text('Servicios');
        $('#buttonSlide').attr({
          style: "display: none"
        });
        $('#serv').removeClass("w3-rest");
        $('#serv').removeClass("w3-xlarge");
        $('#serv').addClass("w3-col");
        $('#serv').addClass("w3-dropdown-hover");
        $('#serv').addClass("w3-hover-black");
        $('#values').addClass("w3-panel w3-display-topright");
        $('#values').attr({
          style: 'margin-top: 4%'
        });
        $('#serv').attr({
          style: "width:20%"
        });
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("buttonSlide").textContent = "☰";
      }

      $(window).resize(function() {
        if ($(document).width() < 584) {
          $(linkRooms).text('CORPOH');
          $('#buttonSlide').attr({
            style: "display: block"
          });
          $('#serv').removeClass("w3-col");
          $('#serv').removeClass("w3-dropdown-hover");
          $('#serv').removeClass("w3-hover-black");
          $('#values').removeClass("w3-panel w3-display-topright");
          $('#values').removeAttr("style");
          $('#serv').removeAttr("style");
          $('#serv').addClass("w3-rest");
          $('#serv').addClass("w3-xlarge");
        } else {
          $(linkRooms).text('Servicios');
          $('#buttonSlide').attr({
            style: "display: none"
          });
          $('#serv').removeClass("w3-rest");
          $('#serv').removeClass("w3-xlarge");
          $('#serv').addClass("w3-col");
          $('#serv').addClass("w3-dropdown-hover");
          $('#serv').addClass("w3-hover-black");
          $('#values').addClass("w3-panel w3-display-topright");
          $('#serv').attr({
            style: "width:20%"
          });
          $('#values').attr({
            style: 'margin-top: 4%'
          });
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("buttonSlide").textContent = "☰";
        }
      });

      //Comportamiento pop up
      $('#cerrar').click(function() {
        $('#myModal').css({
          display: 'none'
        });
      });

      $(document).keyup(function(e) {
        if (e.which == 27) {
          $('#myModal').css({
            display: 'none'
          });
        }
      });

    });

    // Slideshow Apartment Images
    var slideIndex1 = 1;
    showDivs1(slideIndex1);

    function plusDivs1(n) {
      showDivs1(slideIndex1 += n);
    }

    function currentDiv1(n) {
      showDivs1(slideIndex1 = n);
    }

    function showDivs1(n) {
      var i;
      var x = document.getElementsByClassName("mySlides1");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex1 = 1
      }
      if (n < 1) {
        slideIndex1 = x.length
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
      }
      x[slideIndex1 - 1].style.display = "block";
      dots[slideIndex1 - 1].className += " w3-opacity-off";
    }

    function disList(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    //ScrollReveal (Transiciones CSS)
    window.sr = ScrollReveal();
    sr.reveal('#navbar', {
      duration: 2000,
      origin: 'bottom'
    });
    sr.reveal('#logo', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    });
    sr.reveal('.w3-rest', {
      duration: 2000,
      origin: 'right',
      distance: '300px'
    });
    sr.reveal('#gallery', {
      duration: 2000,
      origin: 'center'
    });
    sr.reveal('#mision', {
      duration: 2000,
      origin: 'left',
      distance: '300px'
    });
    sr.reveal('#vision', {
      duration: 2000,
      origin: 'right',
      distance: '300px'
    });
    sr.reveal('#contable', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px',
      viewfactor: '0.2'
    });
    sr.reveal('#fiscal', {
      duration: 2000,
      origin: 'top',
      distance: '300px',
      viewfactor: '0.2'
    });
    sr.reveal('#admin', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px',
      viewfactor: '0.2'
    });
    sr.reveal('#ots', {
      duration: 2000,
      origin: 'top',
      distance: '300px',
      viewfactor: '0.2'
    });
    sr.reveal('.s3, .sect, .w3-third, .w3-twothird', {
      duration: 2000
    });
    sr.reveal('.s3, .sect, .w3-third, .w3-twothird', {
      interval: 200
    });
    sr.reveal('#details', {
      duration: 2000,
      origin: 'center'
    });
    sr.reveal('#big_button',{
      duration: 2000,
      origin: 'center'
    }); /** EDICIÓN **/

    sr.reveal('#values', {
      duration: 2000,
      origin: 'right',
      distance: '300px',
      delay: 3000
    });

    //Smooth Scrolling (librería para deslizamiento)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    })

    function carrusel(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    //Modal
    document.getElementsByClassName("tablink")[0].click();

        function openTab(evt, subject) {
            var i, x, tablinks;
            x = document.getElementsByClassName("number");
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(subject).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }


  </script>

</body>

</html>