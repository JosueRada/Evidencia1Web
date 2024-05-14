<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Mascotas Disponibles</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Buscar mascotas..." aria-label="Buscar mascotas" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">
                            <img src="https://cdn-icons-png.flaticon.com/512/2015/2015046.png" alt="Buscar" style="width: 24px;">
                        </button>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ejemplo</td>
                                    <td>5 años</td>
                                    <td><i class="fas fa-dog"></i> Perro</td>
                                </tr>
                                <!-- Puedes agregar más filas según sea necesario -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fer/Desktop/tareas-laravel/resources/views/todos/mascotas.blade.php ENDPATH**/ ?>