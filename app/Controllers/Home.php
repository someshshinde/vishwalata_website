<?php

namespace App\Controllers;

use App\Models\Frontend\AchivementModel;
use App\Models\Frontend\CourseModel;
use App\Models\Frontend\DepartmentModel;
use App\Models\Frontend\EventsModel;
use App\Models\Frontend\FacultyModel;
use App\Models\Frontend\NewsModel;


class Home extends BaseController
{
  public function index(): string
  {
    $model = model(CourseModel::class);
    $data['course_data'] = $model->getAllCourses();

    $model = model(EventsModel::class);
    $data['events'] = $model->getAllEvents(3);

    $model= model(NewsModel::class);
    $data['news']=$model->getAllNews(4);

    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();

    helper('date');


    return view('frontend/shared/header', $data) .
      view('frontend/pages/home', $data) .
      view('frontend/shared/footer');
  }
  public function contact(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/contact') .
      view('frontend/shared/footer');
  }

  public function about(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();

    $model = model(CourseModel::class);
    $data['course_data'] = $model->getAllCourses();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/about') .
      view('frontend/shared/footer');
  }
  public function director_message(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/director_message') .
      view('frontend/shared/footer');
  }
  public function secretary_desk(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/secretary_desk') .
      view('frontend/shared/footer');
  }
  public function principal_desk(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/principal_desk') .
      view('frontend/shared/footer');
  }
  public function management_body(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/management_body') .
      view('frontend/shared/footer');
  }
  public function administration_department(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/administration_department') .
      view('frontend/shared/footer');
  }
  public function vision_mission(): string
  {
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/vision_mission') .
      view('frontend/shared/footer');
  }

  public function course($param): string
  {
    $condition = ['short_name' => $param];
    $model = model(CourseModel::class); // correct model helper usage
    $data['course'] = $model->getCourse($condition); // use proper method and casing
    $data['course_data'] = $model->getAllCourses();
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/course_details', $data) .
      view('frontend/shared/footer');
  }
  public function events($param): string
  {

    helper('date');
    $model = model(EventsModel::class);
    $data['events'] = $model->getAllEvents(base64_decode($param));
    $data['event_count'] = $model->getAllEvents();
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/events', $data) .
      view('frontend/shared/footer');
  }
  // public function event_details():string 
  // {
  //     $model=model(EventsModel::class);
  //     $data['events'] = $model->getAllEvents();
  //     return view('frontend/shared/header') . 
  //            view('frontend/pages/event_details',$data).
  //            view('frontend/shared/footer');
  // }
  public function event($param): string
  {
    helper('date');
    $model = model(EventsModel::class);
    $condition = ['id' => base64_decode($param)];
    $data['event'] = $model->getEvent($condition);
    $data['event_count'] = $model->getAllEvents();
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/event_details', $data) .
      view('frontend/shared/footer');
  }
  public function newses($param): string
  {

    helper('date');
    $model = model(NewsModel::class);
    $data['newses'] = $model->getAllNews(base64_decode($param));
    $data['news_count'] = $model->getAllNews();
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/news', $data) .
      view('frontend/shared/footer');
  }
  public function news($param): string
  {
    helper('date');
    $model = model(NewsModel::class);
    $condition = ['id' => base64_decode($param)];
    $data['news'] = $model->getNews($condition);
    $data['news_count'] = $model->getAllNews();
    $departmentModel = new DepartmentModel();
    $data['departments'] = $departmentModel->getAllDepartments();
    return view('frontend/shared/header', $data) .
      view('frontend/pages/news_details', $data) .
      view('frontend/shared/footer');
  }
  public function department_details($param): string
  {
    $condition = ['name' => $param];
    $model = model(DepartmentModel::class); // correct model helper usage
    $data['department'] = $model->getDepartment($condition); // use proper method and casing
    $data['departments'] = $model->getAllDepartments();

    $model = model(CourseModel::class);
    $data['courses'] = $model->getAllCourses();

    $model = model(FacultyModel::class);
    $data['faculty'] = $model->getAllFaculty();

    $model = model(AchivementModel::class);
    $data['achivements'] = $model->getAllAchivement();
    return  view('frontend/shared/header', $data) .
      view('frontend/pages/department_details', $data) .
      view('frontend/shared/footer');
  }
  public function error500(): string
  {
    return view('frontend/pages/500');
  }
  public function error403(): string
  {
    return view('frontend/pages/403');
  }
  public function error404(): string
  {

    return view('frontend/pages/404');
  }
}
