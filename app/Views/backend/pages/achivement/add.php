<?php

$academic_year = [
    [
        "label" => "2025-26",
        "value" => "2025-26"
    ],
    [
        "label" => "2024-25",
        "value" => "2024-25"
    ],
    [
        "label" => "2023-24",
        "value" => "2023-24"
    ],
    [
        "label" => "2023-23",
        "value" => "2022-23"
    ],
    [
        "label" => "2021-22",
        "value" => "2021-22"
    ],
    [
        "label" => "2020-21",
        "value" => "2020-21"
    ],
]
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
                    <h3 class="mb-0">Achivement</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Achivement</a></li>
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
                                    <div class="card-title">Add Achivement</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form action="<?= base_url('admin/achivement/add/new') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="id" value="<?= isset($achivements['id']) && $achivements['id'] != '' ? $achivements['id'] : '' ?>" hidden />
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">

                                            <label for="exampleInputEmail1" class="form-label">Department</label>
                                            <select class="form-select" name="dept_id" aria-label="Default select example">

                                                <option selected>Select Department</option>
                                                <?php foreach ($departments as $department): ?>
                                                    <option value="<?= $department['id'] ?>" <?= isset($achivements['dept_id']) && $achivements['dept_id'] == $department['id'] ? 'selected' : '' ?>><?= $department['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Acadamic Year</label>

                                            <select class="form-select" name="academic_year" aria-label="Default select example">
                                                <option selected>Select Acadamic year</option>
                                                <?php foreach ($academic_year as $row): ?>
                                                    <option value="<?= $row['value']; ?>" <?= isset($achivements['academic_year']) && $achivements['academic_year'] == $row['value'] ? 'selected' : '' ?>><?= $row['label']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Class</label>
                                            <input type="text" name="class" class="form-control" id="exampleInputEmail1" value="<?= isset($achivements['class']) && $achivements['class'] != '' ? $achivements['class'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($achivements['name']) && $achivements['name'] != '' ? $achivements['name'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Percentage(%)</label>
                                            <input type="text" name="percentage" class="form-control" id="exampleInputEmail1" value="<?= isset($achivements['percentage']) && $achivements['percentage'] != '' ? $achivements['percentage'] : '' ?>" />

                                        </div>
                                       
                                       

                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><?= isset($achivements['id']) && $achivements['id'] != '' ? 'Update' : 'Submit' ?></button>
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