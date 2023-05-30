<!doctype>
<title>web sit</title>
<link rel="stylesheet" href="/app.css" >
<body>


<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <article
        <?php if($loop->odd): ?>
            style="background-color: #4a5568"

        <?php endif; ?>
    >
        <?php echo $post; ?>

        $loop->even
    </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


sdfdasd








</body>
<?php /**PATH C:\xampp\htdocs\liba\example-app\resources\views/posts.blade.php ENDPATH**/ ?>