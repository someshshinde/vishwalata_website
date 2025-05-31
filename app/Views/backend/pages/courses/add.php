<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Courses</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                                    <div class="card-title">Add Courses</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form action="<?= base_url('admin/courses/add/new') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="id" value="<?= isset($courses['id']) && $courses['id'] != '' ? $courses['id'] : '' ?>" hidden />
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            
                                            <label for="exampleInputEmail1" class="form-label">Department</label>
                                            <select class="form-select" name="dept_id" aria-label="Default select example">
                                                
                                                <option selected>Select Department</option>
                                                <?php foreach ($departments as $department): ?>
                                                    <option value="<?= $department['id'] ?>" <?= isset($courses['dept_id']) && $courses['dept_id'] == $department['id'] ? 'selected' : '' ?>><?= $department['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($courses['name']) && $courses['name'] != '' ? $courses['name'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Short Name</label>
                                            <input type="text" name="short_name" class="form-control" id="exampleInputEmail1" value="<?= isset($courses['short_name']) && $courses['short_name'] != '' ? $courses['short_name'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Eligibility</label>
                                            <input type="text" name="eligibility" class="form-control" id="exampleInputEmail1" value="<?= isset($courses['eligibility']) && $courses['eligibility'] != '' ? $courses['eligibility'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Intake</label>
                                            <input type="text" name="intake" class="form-control" id="exampleInputEmail1" value="<?= isset($courses['intake']) && $courses['intake'] != '' ? $courses['intake'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fee</label>
                                            <input type="text" name="fee" class="form-control" id="exampleInputEmail1" value="<?= isset($courses['fee']) && $courses['fee'] != '' ? $courses['fee'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                            <input type="text" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($courses['description']) && $courses['description'] != '' ? $courses['description'] : '' ?>" />
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="img" class="form-control" id="inputGroupFile02" value="<?= isset($courses['img']) && $courses['img'] != '' ? $courses['img'] : '' ?>" />
                                            <label class="input-group-text" name="img" for="inputGroupFile02">Upload</label>
                                        </div>


                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><?= isset($courses['id']) && $courses['id'] != '' ? 'Update' : 'Submit' ?></button>
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