
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Gallery</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="card info-card sales-card">
              <form action="<?php echo e(route('Front.Web.Page.Gallery')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">WebSite Gallery</h5>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Add Image</h6>
                  <div class="">
                    <input type="file" class="form-control" name="gallery" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <div class="mt-4 pt-2">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
        <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 mt-3">
            <div><a href="<?php echo e(route('Front.Cms.Gallery.Delete',['id'=>$info->id])); ?>" class="btn btn-danger delete-confirm" style="position:absolute;border-radius: 50%;right: 9px;"><i class="fa fa-trash"></i></a></div>
            <img src="<?php echo e(url('public/uploads/gallery/'.$info->gallery)); ?>" class="w-100" style="height: 220px" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="float-right mt-3">
            <?php echo e($show->links("pagination::bootstrap-5")); ?>

        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/front-cms/gallery/index.blade.php ENDPATH**/ ?>