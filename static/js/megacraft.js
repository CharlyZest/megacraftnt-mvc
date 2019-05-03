
    (function (d, w) {
        let ipServidor = "play.megacraft.mx";

        let tiempoActualizar = 1000;

        w.onload = function () {

            String.prototype.info = function (a, tiempo) {
                
                var objetivo = this;
                
                return objetivo.split(a).join(tiempo);

            };

            //var cambiar = d.body.innerHTML;

            function infoServidor(ip) {
                
                let solicitud = new XMLHttpRequest();

                solicitud.onreadystatechange = function () {
                    
                    if (solicitud.status == 200 && solicitud.readyState == 4) {
                        
                        let datos = JSON.parse(solicitud.responseText);

                        let getDatos = {
                        
                            jugadores: 0,
                            max: 0,
                            estado: ""
                        
                        };
                        
                        if (datos.status == true) {
                            getDatos.estado = "En linea";
                            getDatos.jugadores = datos.players.online;
                            getDatos.max = datos.players.max;
                        } else {
                            getDatos.estado = "Fuera de linea";
                        }
                        mostrarPagina(getDatos);
                    }
                }

                solicitud.open("GET", "https://mcapi.ca/query/" + ip + "/players", true);
                solicitud.send();
            }
            
            function mostrarPagina(datos) {
                    $('#jugadores').html(datos.jugadores);
                    $('#max').html(datos.max);
            }
            
            infoServidor(ipServidor);

            setInterval(
                function () {
                    infoServidor(ipServidor);
                }, tiempoActualizar
            );
        }
    })(document, window);

    function copiar() {
        //document.execCommand("text", true, "play.megacraft.mx");
        prompt("IP:", "play.megacraft.mx")
        
    }