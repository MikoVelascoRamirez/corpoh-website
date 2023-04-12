<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="../resources/imgs/logo-corpoh.ico">
    <link rel="stylesheet" href="../css/estilo-corpoh.css">
    <title>CORPOH Servicios Contables, Fiscales y Administrativos | Renta de Oficinas</title>
</head>

<body>
    <!-- Cabecera/Menú -->
    <div class="w3-top" id="navbar">
        <div class="w3-row w3-large" style="background-color: #0097e6; color: white;">
            <div class="w3-col" style="width:25%" id="start">
                <button class="w3-button w3-hover-black w3-xlarge" onclick="gestionBoton()" id="buttonSlide" style="display: none;">☰</button>
                <a href="../index.php#inicio" class="w3-button w3-block w3-hover-black">Inicio</a>
            </div>
            <div class="w3-col" style="width:25%" id="aboutUs">
                <a href="../index.php#about" class="w3-button w3-block w3-hover-black">Nosotros</a>
            </div>
            <div class="w3-col w3-dropdown-hover w3-hover-black" style="width:25%" id="serv">
                <a class="w3-btn w3-block">Servicios</a>
                <div class="w3-dropdown-content w3-bar-block">
                    <a href="../index.php#contable" class="w3-bar-item w3-button w3-hover-black">Contables</a>
                    <a href="../index.php#fiscal" class="w3-bar-item w3-button w3-hover-black">Fiscales</a>
                    <a href="../index.php#admin" class="w3-bar-item w3-button w3-hover-black">Administrativos</a>
                    <a href="../index.php#ots" class="w3-bar-item w3-button w3-hover-black">Outsourcing</a>
                </div>
            </div>
            <div class="w3-col" style="width:25%" id="cont">
                <a href="../index.php#contact" class="w3-button w3-block w3-hover-black">Contacto</a>
            </div>
        </div>
        <!--Menú lateral-->
        <div class="w3-sidebar w3-bar-block w3-animate-left" style="width:200px; display: none;" id="mySidebar">
            <a href="#inicio" class="w3-bar-item w3-button w3-hover-blue">Inicio</a>
            <a href="#about" class="w3-bar-item w3-button w3-hover-blue">Nosotros</a>
            <a href="#services" class="w3-bar-item w3-button w3-hover-blue">Servicios</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hover-blue">Contacto</a>
            <a href="#roomss" class="w3-bar-item w3-button w3-hover-blue">Arrendamiento físico/virtual</a>
        </div>

    </div>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


    <div class="w3-content" id="sidebar">
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-light-grey w3-collapse" style="width:260px;">
            <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
                <h3>Rentas</h3>
                <h3>desde $50</h3>
                <h6>la hora</h6>
                <hr>
                <form action="/action_page.php" target="_blank">
                    <p><label><i class="fa fa-calendar-check-o"></i> Verifique disponibilidad</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
                    <p><label><i class="fa fa-male"></i> Número de personas</label></p>
                    <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
                    <p><label><i class="fa fa-child"></i> Oficina o sala</label></p>
                    <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
                    <p><button class="w3-button w3-block w3-green w3-left-align" type="submit"><i class="fa fa-search w3-margin-right"></i>Verificar disponibilidad</button></p>
                </form>
            </div>
            <div class="w3-bar-block">
                <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i> Apartment</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display='block'"><i class="fa fa-rss"></i> Subscribe</a>
                <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i> Contact</a>
            </div>
        </nav>
    </div>

</body>

</html>