<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center mb-5">¡Adopta una mascota!</h1>
    </div>

    <main>
        <section class="container mt-4 bg-light p-5 rounded shadow">
            <h2 class="text-center mb-4">¡Encuentra a tu nuevo mejor amigo!</h2>
            <p class="lead">En nuestro refugio, tenemos una amplia variedad de mascotas esperando encontrar un hogar lleno de amor. Desde perros y gatos hasta conejos y pájaros, tenemos el compañero perfecto para cada familia.</p>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Ver mascotas disponibles</a>
            </div>
        </section>

        <section class="container mt-4 bg-primary text-white p-5 rounded shadow">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">¿Cómo adoptar?</h2>
                    <ol>
                        <li>Visita nuestro refugio y conoce a nuestras mascotas.</li>
                        <li>Completa una solicitud de adopción.</li>
                        <li>Espera a que nuestro equipo revise tu solicitud.</li>
                        <li>¡Lleva a tu nueva mascota a casa!</li>
                    </ol>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://media.istockphoto.com/id/1303863329/es/vector/hombre-perro-de-alta-fidelidad.jpg?s=612x612&w=0&k=20&c=171DXpVWCKvi6Drvj5JPG6JEHL3pViLmbePkVemOATU=" class="img-fluid" alt="Hombre con perro">
                </div>
            </div>
        </section>

        <section class="container mt-4 bg-light p-5 rounded shadow">
            <h2 class="text-center mb-4">Contáctanos</h2>
            <p class="lead text-center">Si tienes alguna pregunta o deseas obtener más información sobre nuestras mascotas, no dudes en ponerte en contacto con nosotros.</p>
            <ul class="list-unstyled text-center">
                <li><i class="fas fa-phone"></i> Teléfono: 555-123-4567</li>
                <li><i class="fas fa-envelope"></i> Correo electrónico: info@adoptaunamascota.org</li>
                <li><i class="fas fa-map-marker-alt"></i> Dirección: 123 Calle Principal, Ciudad</li>
            </ul>
        </section>
    </main>

    <footer class="container mt-4">
        <p class="text-center">© 2023 Adopta una mascota. Todos los derechos reservados.</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fer/Desktop/tareas-laravel/resources/views/todos/menu.blade.php ENDPATH**/ ?>