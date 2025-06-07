<?php

// print_r($config);
// echo $config[0]['id'];
// die();

?>

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Configuration</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Configuration</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Timelime example  -->
            <div class="row g-4">
                <!--begin::Col-->
                <?php if ($errors = session()->getFlashdata('error')): ?>
                    <div class="col-12">
                        <div class="alert alert-danger">

                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                                <?= session()->getFlashdata('success'); ?>
                            </ul>

                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-12">
                    <!-- The icons -->
                    <div class="col-12">
                        <div class="col-md-12">
                            <!--begin::Quick Example-->
                            <div class="card card-primary card-outline mb-4">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Update Configuration</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form action="<?= base_url('/admin/config/update') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="id" value="<?= isset($config['id']) && $config['id'] != '' ? $config['id'] : '' ?>" hidden />
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($config['name']) && $config['name'] != '' ? $config['name'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['email']) && $config['email'] != '' ? $config['email'] : '' ?>" />
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['phone']) && $config['phone'] != '' ? $config['phone'] : '' ?>" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['address']) && $config['address'] != '' ? $config['address'] : '' ?>" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Facebook Link</label>
                                            <input type="text" name="facebook" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['facebook']) && $config['facebook'] != '' ? $config['facebook'] : '' ?>" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Instagram Link</label>
                                            <input type="text" name="instagram" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['instagram']) && $config['instagram'] != '' ? $config['instagram'] : '' ?>" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Youtube Link</label>
                                            <input type="text" name="youtube" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($config['youtube']) && $config['youtube'] != '' ? $config['youtube'] : '' ?>" />
                                        </div>
                                        <div class="mb-3">
                                           <img src="<?= isset($config['logo']) && $config['logo'] != '' ? base_url('frontend/img/logo/' . $config['logo']) : base_url('frontend/img/logo.png') ?>" alt="Logo" class="img-thumbnail mb-3" style="width: 150px; height: 150px;">
                                            <label for="inputGroupFile02" class="form-label">Logo</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="img" class="form-control" id="inputGroupFile02" value="<?= isset($courses['logo']) && $courses['logo'] != '' ? $courses['logo'] : '' ?>" />
                                            <label class="input-group-text" name="img" for="inputGroupFile02">Upload</label>
                                        </div>
                                    </div>

                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><?= isset($department['id']) && $department['id'] != '' ? 'Update' : 'Submit' ?></button>
                                    </div>
                                    <!--end::Footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Quick Example-->


                        </div>
                    </div>
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->