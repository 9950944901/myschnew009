
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Setting</li>
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
              <form action="<?php echo e(route('Front.Web.Page.Setting')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">Web Page Setting</h5>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">School Name</h6>
                  <div class="">
                    <input type="text" required class="form-control" name="school_name"  value="<?php echo e($info->school_name); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">School Code</h6>
                  <div class="">
                    <input type="text" class="form-control" name="school_code"  value="<?php echo e($info->school_code); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Phone</h6>
                  <div class="">
                    <input type="text" class="form-control" required pattern="[0-9]*" minlength="10" maxlength="10" name="school_phone" value="<?php echo e($info->school_phone); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Email</h6>
                  <div class="">
                    <input type="email" class="form-control" required name="school_email" value="<?php echo e($info->school_email); ?>">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 sol-sm-12 mb-3">
                  <h6 class="p-2" style="font-size: 14px;">Address</h6>
                  <div class="">
                    <input type="text" class="form-control" name="school_address" value="<?php echo e($info->school_address); ?>">
                  </div>
                </div>
                <hr>

                
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Opening Start Time</h6>
                  <div class="mb-3">
                    <input type="time" class="form-control" name="open_start_time" value="<?php echo e($info->open_start_time); ?>">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Opening End Time</h6>
                  <div class="mb-3">
                    <input type="time" class="form-control" name="open_end_time" value="<?php echo e($info->open_end_time); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Website Logo</h6>
                  <div class="mb-3">
                    <input type="file"  class="form-control" name="web_logo" accept="image/jpg, image/jpeg, image/png" >
                    <img src="<?php echo e(url('public/uploads/site-logo/'.$info->web_logo)); ?>" alt="">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Facebook Url</h6>
                  <div class="mb-3">
                    <input type="url" class="form-control" name="facebook" value="<?php echo e($info->facebook); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Instagram Url</h6>
                  <div class="mb-3">
                    <input type="url" class="form-control" name="instagram" value="<?php echo e($info->instagram); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Skype</h6>
                  <div class="mb-3">
                    <input type="url" class="form-control" name="skype" value="<?php echo e($info->skype); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Google Url</h6>
                  <div class="mb-3">
                    <input type="url" class="form-control" name="google" value="<?php echo e($info->google); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">© Designed By</h6>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="copy_by" value="<?php echo e($info->copy_by); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">© Designed By Url</h6>
                  <div class="mb-3">
                    <input type="url" class="form-control" name="copy_by_url" value="<?php echo e($info->copy_by_url); ?>">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">About</h6>
                  <div class="mb-3">
                    <textarea type="text" class="form-control" name="about" rows="5"><?php echo e($info->about); ?></textarea>
                  </div>
                </div>
                <div class="text-right p-1">
                  <button type="submit" class="btn btn-info">Save</button>
                </div>

              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/front-cms/setting/index.blade.php ENDPATH**/ ?>