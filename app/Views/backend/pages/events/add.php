<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Events</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Events</a></li>
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
                                    <div class="card-title">Add Event</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form action="<?= base_url('admin/events/add/new') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="id" value="<?= isset($events['id']) && $events['id'] != '' ? $events['id'] : '' ?>" hidden />
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($events['name']) && $events['name'] != '' ? $events['name'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Date</label>
                                            <input type="text" name="date"  id="datepicker" class="form-control" id="exampleInputEmail1" value="<?= isset($events['date']) && $events['date'] != '' ? $events['date'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Description</label>
                                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="<?= isset($events['description']) && $events['description'] != '' ? $events['description'] : '' ?>" />

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Organiser</label>
                                            <input type="text" name="organiser" class="form-control" id="exampleInputEmail1" value="<?= isset($events['organiser']) && $events['organiser'] != '' ? $events['organiser'] : '' ?>" />

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Venue</label>
                                            <input type="text" name="venue" class="form-control" id="exampleInputEmail1" value="<?= isset($events['venue']) && $events['venue'] != '' ? $events['venue'] : '' ?>" />

                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="file" name="img" class="form-control" id="inputGroupFile02" value="<?= isset($events['img']) && $events['img'] != '' ? $events['img'] : '' ?>" />
                                            <label class="input-group-text" name="img" for="inputGroupFile02">Upload</label>
                                        </div>


                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><?= isset($events['id']) && $events['id'] != '' ? 'Update' : 'Submit' ?></button>
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