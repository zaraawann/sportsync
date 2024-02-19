<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <h1>Edit Activity</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('activities.update', $activity->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="sport" class="form-label">Sport</label>
            <input type="text" name="sport" class="form-control" id="sport" value="<?php echo e($activity->sport); ?>" required>
        </div>
        <div class="mb-3">
            <label for="availability" class="form-label">Availability</label>
            <textarea name="availability" class="form-control" id="availability" required><?php echo e($activity->availability); ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Activity</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH C:\Users\awana\sport_sync\resources\views/activities/edit.blade.php ENDPATH**/ ?>