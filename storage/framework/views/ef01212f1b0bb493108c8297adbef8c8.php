<?php $__env->startSection('content'); ?>
    <h1 class="mb-4 text-center">Produk Unggulan Rexus</h1>

    <style>
        .card-img-top {
            transition: transform 0.3s ease;
        }
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
    </style>

    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/7074f84a7522c1a7f5425e29054630ea.jpeg')); ?>" class="card-img-top" alt="VX9">
                <div class="card-body">
                    <h5 class="card-title">Mouse Gaming VX9</h5>
                    <p class="card-text">Desain ergonomis dan performa tinggi untuk gamer profesional.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/3e3aa11c49d25514c2839cdc5cb6274d_tn.jpeg')); ?>" class="card-img-top" alt="HX10">
                <div class="card-body">
                    <h5 class="card-title">Headset HX10</h5>
                    <p class="card-text">Suara surround berkualitas tinggi untuk pengalaman gaming imersif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/67294240_2476043149294617_6789651617600160537_n.jpg')); ?>" class="card-img-top" alt="Keyboard K9SE">
                <div class="card-body">
                    <h5 class="card-title">Keyboard K9SE</h5>
                    <p class="card-text">Keyboard mekanik dengan lampu RGB dan build quality solid.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/id-11134207-7qul4-lgq28ygzyleza2.jpeg')); ?>" class="card-img-top" alt="Gaming Chair RGC103">
                <div class="card-body">
                    <h5 class="card-title">Gaming Chair RGC103</h5>
                    <p class="card-text">Kursi gaming ergonomis dan nyaman untuk sesi bermain panjang.</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\llravel\PSAT\resources\views/produk.blade.php ENDPATH**/ ?>