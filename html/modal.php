<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Modal</title>
</head>

<body>

    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-display-middle">
        Open Modal
    </button>

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
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'uno')"><b>Acerca de CORPOH</b></button>
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'dos')"><b>Uso de datos</b></button>
                <button class="tablink w3-bar-item w3-button" onclick="openTab(event, 'tres')"><b>Aviso de Privacidad Integral</b></button>
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

    <script>
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