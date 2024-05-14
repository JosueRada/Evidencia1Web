<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Registro de Mascotas</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="raza" class="form-label">Raza de la mascota</label>
                            <input type="text" class="form-control" id="raza" aria-describedby="razaHelp" placeholder="Ej: Labrador Retriever">
                            <div id="razaHelp" class="form-text">Ingresa la raza de la mascota.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fer/Desktop/tareas-laravel/resources/views/todos/index.blade.php ENDPATH**/ ?>