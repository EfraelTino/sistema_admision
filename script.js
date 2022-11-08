const tieneSoporteUserMedia = () =>
    !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
const _getUserMedia = (...arguments) =>
    (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);

const mostrarStream = idDeDispositivo => {
    _getUserMedia({
            video: {
                // Justo aquí indicamos cuál dispositivo usar
                deviceId: idDeDispositivo,
            }
        },
        (streamObtenido) => {
            // Aquí ya tenemos permisos, ahora sí llenamos el select,
            // pues si no, no nos daría el nombre de los dispositivos
            llenarSelectConDispositivosDisponibles();

            // Escuchar cuando seleccionen otra opción y entonces llamar a esta función
            $listaDeDispositivos.onchange = () => {
                // Detener el stream
                if (stream) {
                    stream.getTracks().forEach(function(track) {
                        track.stop();
                    });
                }
                // Mostrar el nuevo stream con el dispositivo seleccionado
                mostrarStream($listaDeDispositivos.value);
            }

            // Simple asignación
            stream = streamObtenido;

            // Mandamos el stream de la cámara al elemento de vídeo
            $video.srcObject = stream;
            $video.play();

            
        }, (error) => {
            console.log("Permiso denegado o error: ", error);
            $estado.innerHTML = "No se puede acceder a la cámara, o no diste permiso.";
        });
}