<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Achivements</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Achivements</a></li>
            <li class="breadcrumb-item active" aria-current="page">View</li>
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
      <!--begin::Col-->


      <!--end::Col-->
      <!-- Timelime example  -->
      <div class="row g-4">

         <!--begin::Col-->
          <?php if (session()->getFlashdata('success')): ?>
              <div class="col-12">
                <div class="callout callout-info">
                  
                  <p><?= session()->getFlashdata('success') ?></p>
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
                  <div class="card-title">View Achivements</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form>
                  <!--begin::Body-->

                  <div class="card-body">
                    <table id="example" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Acadamic Year</th>
                          <th>Department</th>
                          <th>Class</th>
                          <th>Percentage(%)</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($achivements as $row): ?>
                          <tr>
                            
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['academic_year'] ?></td>
                            <td><?= $row['dept_name'] ?></td>
                            <td><?= $row['class'] ?></td>
                            <td><?= $row['percentage'] ?></td>
                           
                            <td>
                              <a href="<?= base_url('admin/achivement/edit/' . $row['id']) ?>" class="btn btn-primary">Edit</a>
                              <!-- <a href="<?= base_url('admin/achivement/delete/' . $row['id']) ?>" class="btn btn-danger">Delete</a>-->
                            </td> 
                          </tr>
                        <?php endforeach; ?>
                       
                      </tbody>
                    </table>
                  </div>
                  <!--end::Body-->
                  <!--begin::Footer-->


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