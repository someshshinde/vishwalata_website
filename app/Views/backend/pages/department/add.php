<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Department</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Department</a></li>
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
                  <div class="card-title">Add Department</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="<?= base_url('admin/department/add/new') ?>" method="POST" enctype="multipart/form-data">
                  <input type="text" name="id" value="<?= isset($department['id']) && $department['id'] != '' ? $department['id'] : '' ?>" hidden />
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($department['name']) && $department['name'] != '' ? $department['name'] : '' ?>" />

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">About Department</label>
                      <input type="text" name="about" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= isset($department['about']) && $department['about'] != '' ? $department['about'] : '' ?>" />
                    </div>
                    <!-- <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" />
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div> -->
                    <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Department Head</label>
                      <select class="form-select" name="head_id" aria-label="Default select example">
                        <option selected>Select Department Head</option>
                        <?php foreach ($facultys as $row): ?>
                          <option value="<?= $row['id'] ?>" <?= isset($department['hod']) && $department['hod'] == $row['id'] ? 'selected' : '' ?>><?= $row['name'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                    <input type="file" name="img" class="form-control" id="inputGroupFile02" value="<?= isset($courses['img']) && $courses['img'] != '' ? $courses['img'] : '' ?>" />
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