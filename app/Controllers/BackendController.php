<?php

namespace App\Controllers;

use App\Models\Backend\AuthModel;
use App\Models\Backend\DepartmentModel;
use App\Models\Backend\CoursesModel;
use App\Models\Backend\EventsModel;
use App\Models\Backend\FacultyModel;
use App\Models\Backend\NewsModel;
use App\Models\Backend\AchivementModel;

class BackendController extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index(): string
    {
        return view('backend/pages/auth/shared/header') .
            view('backend/pages/auth/login') .
            view('backend/pages/auth/shared/footer');
    }

    public function login()
    {
        $authModel = new AuthModel();
        $session = session();
        if ($this->request->getMethod() == 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');


            $user = $authModel->getUser(['username' => $username, 'password' => $password]);
            if ($user) {
                $session->set('isLoggedIn', true);
                $session->set('admin_name', $user['name']);
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('admin')->with('error', 'Invalid username or password');
            }
        }
    }
    public function dashboard()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "dashboard";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/dashboard') .
            view('backend/pages/shared/footer');
    }
    public function department_add()
    {
        //data insert
        $departmentModel = new DepartmentModel();
        $facultyModel = new FacultyModel();
        if ($this->request->getMethod() == 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'about' => $this->request->getPost('about'),
                'hod' => $this->request->getPost('head_id')
            ];

            $image = $this->request->getFile('img');

            if ($image != "") {

                if ($image->isValid() && !$image->hasMoved()) {

                    // Validate image only in JPEG or JPG format
                    $ext = $image->getClientExtension();
                    if ($ext != 'jpeg' && $ext != 'jpg') {
                        $result['errors'] = ['Image upload failed! Only JPEG format allowed'];
                        return redirect()->to('/admin/department/add')->with('error', $result['errors']);
                    }

                    // Define the upload path
                    $uploadPath = 'frontend/img/departments/' . $this->request->getPost('name');

                    // Create the directory if it doesn't exist
                    if (!is_dir($uploadPath)) {
                        mkdir($uploadPath, 0755, true); // 0755 is the permission; true allows recursive creation
                    }

                    $newName = $image->getRandomName();
                    $image->move($uploadPath, $newName);
                    $data['img'] = $newName;
                } else {
                    $result['errors'] = ['Image upload failed'];
                    return redirect()->to('/admin/department/add')->with('error', $result['errors']);
                }
            }

            if ($this->request->getPost('id') != "") {
                $data['id'] = $this->request->getPost('id');
                $result = $departmentModel->updateDepartment($data);
                $message = "Department Updated Successfully";
            } else {
                $result = $departmentModel->addDepartment($data);
                $message = "Department Added Successfully";
            }


            if ($result['status'] != "") {
                return redirect()->to('/admin/department/view')->with('success', $message);
            } else {
                return redirect()->to('/admin/department/add')->with('error', $result['errors']);
            }
        }


        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "department";
        $data['facultys'] = $facultyModel->getFaculty();
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/department/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function department_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $departmentModel = new DepartmentModel();
        $data['department'] = $departmentModel->getDepartment();
        // $db = \Config\Database::connect();
        // echo $db->getLastQuery();
        //die();
        $data['is_active'] = "department";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/department/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function department_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $departmentModel = new DepartmentModel();
        $data['department'] = $departmentModel->getDepartment($id);
        $data['is_active'] = "department";
        $facultyModel = new FacultyModel();
        $data['facultys'] = $facultyModel->getFaculty();
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/department/add', $data) .
            view('backend/pages/shared/footer');
    }

    public function courses_add()
    {
        //data insert
        $CoursesModel = new CoursesModel();
        if ($this->request->getMethod() == 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'short_name' => strtoupper($this->request->getPost('short_name')),
                'eligibility' => $this->request->getPost('eligibility'),
                'intake' => $this->request->getPost('intake'),
                'fee' => $this->request->getPost('fee'),
                'description' => $this->request->getPost('description'),
                'dept_id' => $this->request->getPost('dept_id')

            ];

            //image upload
            $image = $this->request->getFile('img');

            if ($image != "") {

                if ($image->isValid() && !$image->hasMoved()) {

                    //validation image only jpeg format
                    $ext = $image->getClientExtension();
                    if ($ext != 'jpeg' && $ext != 'jpg') {
                        $result['errors'] = ['Image upload failed ! Only jpeg format allowed'];
                        return redirect()->to('/admin/faculty/add')->with('error', $result['errors']);
                    }
                    $newName = $image->getRandomName();
                    $image->move('frontend/img/courses', $newName);
                    $data['img'] = $newName;
                } else {
                    $result['errors'] = ['Image upload failed'];
                    return redirect()->to('/admin/courses/add')->with('error', $result['errors']);
                }
            }

            if ($this->request->getPost('id') != "") {
                $data['id'] = $this->request->getPost('id');

                //print_r($data); die();
                $result = $CoursesModel->updateCourses($data);
                $message = "Courses Updated Successfully";
            } else {
                $result = $CoursesModel->addCourses($data);
                $message = "Courses Added Successfully";
            }


            if ($result['status'] != "") {
                return redirect()->to('/admin/courses/view')->with('success', $message);
            } else {
                return redirect()->to('/admin/courses/add')->with('error', $result['errors']);
            }
        }


        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "courses";
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getDepartment();
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/courses/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function courses_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $coursesModel = new CoursesModel();
        $data['courses'] = $coursesModel->getCourses();
        $data['is_active'] = "courses";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/courses/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function courses_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $coursesModel = new CoursesModel();
        $data['courses'] = $coursesModel->getCourses($id);
        $data['is_active'] = "courses";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/courses/add', $data) .
            view('backend/pages/shared/footer');
    }

    public function faculty_add()
    {
        //data insert
        $FacultyModel = new FacultyModel();
        $departmentModel = new DepartmentModel();
        if ($this->request->getMethod() == 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'dept_id' => strtoupper($this->request->getPost('dept_id')),
                'designation' => $this->request->getPost('designation'),
                'email' => $this->request->getPost('email'),
                'mobile' => $this->request->getPost('mobile'),
                'education' => ucfirst($this->request->getPost('education')),


            ];

            //image upload
            $image = $this->request->getFile('img');

            if ($image != "") {

                if ($image->isValid() && !$image->hasMoved()) {
                    //validation image only jpeg format
                    $ext = $image->getClientExtension();
                    if ($ext != 'jpeg' && $ext != 'jpg') {
                        $result['errors'] = ['Image upload failed ! Only jpeg format allowed'];
                        return redirect()->to('/admin/faculty/add')->with('error', $result['errors']);
                    }

                    $newName = $image->getRandomName();
                    $image->move('frontend/img/faculty', $newName);
                    $data['img'] = $newName;
                } else {
                    $result['errors'] = ['Image upload failed'];
                    return redirect()->to('/admin/faculty/add')->with('error', $result['errors']);
                }
            }

            if ($this->request->getPost('id') != "") {
                $data['id'] = $this->request->getPost('id');

                //print_r($data); die();
                $result = $FacultyModel->updateFaculty($data);
                $message = "Faculty Updated Successfully";
            } else {
                $result = $FacultyModel->addFaculty($data);
                $message = "Faculty Added Successfully";
            }


            if ($result['status'] != "") {
                return redirect()->to('/admin/faculty/view')->with('success', $message);
            } else {
                return redirect()->to('/admin/faculty/add')->with('error', $result['errors']);
            }
        }


        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "faculty";
        $data['departments'] = $departmentModel->getDepartment();
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/faculty/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function faculty_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $FacultyModel = new FacultyModel();
        $data['faculty'] = $FacultyModel->getFaculty();
        $data['is_active'] = "faculty";

        return view('backend/pages/shared/header', $data) .
            view('backend/pages/faculty/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function faculty_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $FacultyModel = new FacultyModel();
        $data['faculty'] = $FacultyModel->getFaculty($id);
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getDepartment();
        $data['is_active'] = "faculty";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/faculty/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function events_add()
    {
        //data insert
        $EventModel = new EventsModel();
        if ($this->request->getMethod() == 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'date' => strtoupper($this->request->getPost('date')),
                'description' => $this->request->getPost('description'),
                'organiser' => $this->request->getPost('organiser'),
                'venue' => $this->request->getPost('venue'),



            ];

            //image upload
            $image = $this->request->getFile('img');

            if ($image != "") {

                if ($image->isValid() && !$image->hasMoved()) {
                    //validation image only jpeg format
                    $ext = $image->getClientExtension();
                    if ($ext != 'jpeg' && $ext != 'jpg') {
                        $result['errors'] = ['Image upload failed ! Only jpeg format allowed'];
                        return redirect()->to('/admin/events/add')->with('error', $result['errors']);
                    }

                    $newName = $image->getRandomName();
                    $image->move('frontend/img/events', $newName);
                    $data['img'] = $newName;
                } else {
                    $result['errors'] = ['Image upload failed'];
                    return redirect()->to('/admin/events/add')->with('error', $result['errors']);
                }
            }

            if ($this->request->getPost('id') != "") {
                $data['id'] = $this->request->getPost('id');

                //print_r($data); die();
                $result = $EventModel->updateEvent($data);
                $message = "Event Updated Successfully";
            } else {
                $result = $EventModel->addEvent($data);
                $message = "Event Added Successfully";
            }


            if ($result['status'] != "") {
                return redirect()->to('/admin/events/view')->with('success', $message);
            } else {
                return redirect()->to('/admin/events/add')->with('error', $result['errors']);
            }
        }


        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "events";

        return view('backend/pages/shared/header', $data) .
            view('backend/pages/events/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function events_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $EventModel = new EventsModel();
        $data['events'] = $EventModel->getEvent();
        $data['is_active'] = "events";

        return view('backend/pages/shared/header', $data) .
            view('backend/pages/events/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function events_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $EventModel = new EventsModel();
        $data['events'] = $EventModel->getEvent($id);

        $data['is_active'] = "events";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/events/add', $data) .
            view('backend/pages/shared/footer');
    }

    public function news_add()
    {
        //data insert
        $NewsModel = new NewsModel();
        if ($this->request->getMethod() == 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'date' => strtoupper($this->request->getPost('date')),
                'description' => $this->request->getPost('description'),
                'organiser' => $this->request->getPost('organiser'),
                'venue' => $this->request->getPost('venue'),



            ];

            //image upload
            $image = $this->request->getFile('img');

            if ($image != "") {

                if ($image->isValid() && !$image->hasMoved()) {
                    //validation image only jpeg format
                    $ext = $image->getClientExtension();
                    if ($ext != 'jpeg' && $ext != 'jpg') {
                        $result['errors'] = ['Image upload failed ! Only jpeg format allowed'];
                        return redirect()->to('/admin/news/add')->with('error', $result['errors']);
                    }

                    $newName = $image->getRandomName();
                    $image->move('frontend/img/news', $newName);
                    $data['img'] = $newName;
                } else {
                    $result['errors'] = ['Image upload failed'];
                    return redirect()->to('/admin/news/add')->with('error', $result['errors']);
                }
            }

            if ($this->request->getPost('id') != "") {
                $data['id'] = $this->request->getPost('id');

                //print_r($data); die();
                $result = $NewsModel->updateNews($data);
                $message = "News Updated Successfully";
            } else {
                $result = $NewsModel->addNews($data);
                $message = "News Added Successfully";
            }


            if ($result['status'] != "") {
                return redirect()->to('/admin/news/view')->with('success', $message);
            } else {
                return redirect()->to('/admin/news/add')->with('error', $result['errors']);
            }
        }


        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $data['is_active'] = "news";

        return view('backend/pages/shared/header', $data) .
            view('backend/pages/news/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function news_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $NewsModel = new NewsModel();
        $data['news'] = $NewsModel->getNews();
        $data['is_active'] = "news";

        return view('backend/pages/shared/header', $data) .
            view('backend/pages/news/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function news_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $NewsModel = new NewsModel();
        $data['news'] = $NewsModel->getNews($id);

        $data['is_active'] = "news";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/news/add', $data) .
            view('backend/pages/shared/footer');
    }

    public function achivement_add()
    {
        try {
            $AchivementModel = new AchivementModel();
            $session = session();
            if (!$session->get('isLoggedIn')) {
                return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
            }
            if ($this->request->getMethod() == 'POST') {
                $data = [
                    'name' => strtoupper($this->request->getPost('name')),
                    'percentage' => $this->request->getPost('percentage'),
                    'class' => strtoupper($this->request->getPost('class')),
                    'academic_year' => $this->request->getPost('academic_year'),
                    'dept_id' => $this->request->getPost('dept_id')

                ];


                if ($this->request->getPost('id') != "") {
                    $data['id'] = $this->request->getPost('id');

                    //print_r($data); die();
                    $result = $AchivementModel->updateAchivement($data);
                    $message = "Achivement Updated Successfully";
                } else {
                    $result = $AchivementModel->addAchivement($data);
                    $message = "Achivement Added Successfully";
                }


                if ($result['status'] != "") {
                    return redirect()->to('/admin/achivement/view')->with('success', $message);
                } else {
                    return redirect()->to('/admin/achivement/add')->with('error', $result['errors']);
                }
            }
            $data['is_active'] = "achivement";
            $departmentModel = new DepartmentModel();
            $data['departments'] = $departmentModel->getDepartment();
            return view('backend/pages/shared/header', $data) .
                view('backend/pages/achivement/add', $data) .
                view('backend/pages/shared/footer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function achivement_view()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $AchivementModel = new AchivementModel();
        $data['achivements'] = $AchivementModel->getAchivements();
        $data['is_active'] = "achivement";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/achivement/view', $data) .
            view('backend/pages/shared/footer');
    }
    public function achivement_edit($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/admin')->with('error', 'Session Timeout please Login Again');
        }
        $AchivementModel = new AchivementModel();
        $data['achivements'] = $AchivementModel->getAchivements($id);
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->getDepartment();
        $data['is_active'] = "achivement";
        return view('backend/pages/shared/header', $data) .
            view('backend/pages/achivement/add', $data) .
            view('backend/pages/shared/footer');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin')->with('success', 'Logout Successfully');
    }
}
