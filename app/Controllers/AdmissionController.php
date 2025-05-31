<?php

namespace App\Controllers;

use App\Models\Frontend\DepartmentModel;
use App\Models\Frontend\CourseModel;

class AdmissionController extends BaseController
{
    public function eligibility()
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $model = model(CourseModel::class);
        $data['courses'] = $model->getAllCourses();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/admission/eligibility',$data) .
            view('frontend/shared/footer');
    }
     public function scholership()
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
       
        return view('frontend/shared/header', $data) .
            view('frontend/pages/admission/scholership') .
            view('frontend/shared/footer');
    }
     public function prospectus()
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
       
        return view('frontend/shared/header', $data) .
            view('frontend/pages/admission/prospectus') .
            view('frontend/shared/footer');
    }
}
?>