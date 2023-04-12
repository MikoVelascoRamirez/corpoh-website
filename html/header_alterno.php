<!-- Cabecera/Menú -->
<div class="w3-top" id="navbar">
    <div class="w3-large w3-bar" style="background-color: #0097e6; color: white;">
        <div class="w3-left" id="start">
            <button class="w3-button w3-hover-black w3-xlarge" style="display: none;">☰</button>
            <a href="start-page.php" class="w3-button w3-block w3-hover-black w3-xlarge">
                <img src="../resources/imgs/mini-logo.png" class="w3-round w3-image w3-margin-right" alt="corpoh">CORPOH</a>
        </div>
        <div class="w3-right">
            <a>Nuestros Servicios</a>
            <button class="w3-button w3-hover-black w3-xxlarge" onclick="gestionBoton_2()" id="buttonSlide">
                <i class="fas fa-bars" id="icon"></i>
            </button>
        </div>
    </div>
    <!--Menú lateral-->
    <div class="w3-sidebar w3-bar-block w3-animate-left" style="width:200px; display: none;" id="mySidebar0">
        <a href="start-page.php" class="w3-bar-item w3-button w3-hover-blue">Inicio</a>
        <a href="start-page.php#about" class="w3-bar-item w3-button w3-hover-blue">Nosotros</a>
        <a href="start-page.php#services" class="w3-bar-item w3-button w3-hover-blue">Servicios</a>
        <a href="start-page.php#contact" class="w3-bar-item w3-button w3-hover-blue">Contacto</a>
        <a href="start-page.php#roomss" class="w3-bar-item w3-button w3-hover-blue">Arrendamiento físico/virtual</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    function gestionBoton_2() {

        if (document.getElementById("icon")) {
            document.getElementById("icon").classList.remove("fa-bars");
            document.getElementById("icon").classList.add("fa-times");
            document.getElementById("mySidebar0").style.width = "25%";
            document.getElementById("mySidebar0").style.display = "block";
            document.getElementById("mySidebar0").style.backgroundColor = "rgba(45, 52, 54,0.8)";
            document.getElementById("icon").id = "icon2";
        } else if (document.getElementById("icon2")) {
            document.getElementById("icon2").classList.remove("fa-times");
            document.getElementById("icon2").classList.add("fa-bars");
            document.getElementById("mySidebar0").style.width = "0%";
            document.getElementById("mySidebar0").style.display = "none";
            document.getElementById("icon2").id = "icon";
        }
    }
</script>