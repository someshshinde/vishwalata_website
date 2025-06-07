<?php

namespace App\Controllers;

use App\Models\Frontend\DepartmentModel;
use App\Models\Backend\ConfigModel;
class NaacController extends BaseController
{
    public function acadamic_calender(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/academic_calendar') .
            view('frontend/shared/footer',$data);
    }

    public function mou(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/mou') .
            view('frontend/shared/footer',$data);
    }
    public function certifications(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/certifications') .
            view('frontend/shared/footer',$data);
    }
    public function iiqa(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/iiqa') .
            view('frontend/shared/footer',$data);
    }
    public function iqac(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/iqac') .
            view('frontend/shared/footer',$data);
    }
    public function ssr(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/ssr') .
            view('frontend/shared/footer',$data);
    }
    public function ssr_documents(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/ssr_documents') .
            view('frontend/shared/footer',$data);
    }
    public function dvv_clarification(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/dvv_clarification') .
            view('frontend/shared/footer',$data);
    }
    public function first_cycle_accreditation_details(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/first_cycle_accreditation_details') .
            view('frontend/shared/footer',$data);
    }
    function annual_quality_assurance_report(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/annual_quality_assurance_report') .
            view('frontend/shared/footer',$data);
    }
    function vacs_academic_calender(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/vacs/academic_calender') .
            view('frontend/shared/footer',$data);
    }

    function vacs_startup_and_innovation_cell(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/vacs/startup_and_innovation_cell') .
            view('frontend/shared/footer',$data);
    }

    function vacs_year_wise_report(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/vacs/year_wise_report') .
            view('frontend/shared/footer',$data);
    }

    function vacs_year_wise_event_and_program(): string
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getAllDepartments();
        $configModel = new ConfigModel();
    $data['config'] = $configModel->getConfig();
        return view('frontend/shared/header', $data) .
            view('frontend/pages/naac/vacs/year_wise_event_and_program') .
            view('frontend/shared/footer',$data);
    }
}
