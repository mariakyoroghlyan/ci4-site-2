<?php

namespace App\Controllers;

class Admin extends BaseController

{

    public function index(): string
    {
        return view('admin/login');
    }

    public function dashboard(): string
    {
        $this->isLogged();

        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/dashboard', $data);
    }

    public function gallery(): string
    {
        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/gallery_new', $data);
    }

    public function projects_lists(): string
    {
        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/projects_lists_new', $data);
    }

    public function awards_lists(): string
    {
        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/awards_lists_new', $data);
    }

    public function add_project(): string
    {
        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/add_project_new', $data);
    }

    public function add_award(): string
    {
        $data = [];
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('admin/add_award', $data);
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == 'admin') {
            $this->session->set('logged_in', true);
            header('Location: /admin/dashboard');
            exit;
        } else {
            $this->session->setFlashdata('error', 'Invalid username or password');
            header('Location: /admin');
            exit;
        }
    }


    public function isLogged()
    {
        if (empty($this->session->get('logged_in')) || $this->session->get('logged_in') == false) {
            header('Location: /admin');
            exit;
        }
    }

    public function logout()
    {
        $this->session->destroy();
        header('Location: /admin');
        exit;
    }

    public function header($data): string
    {
        return view('admin/header_new', $data);
    }


    public function footer($data): string
    {
        return view('admin/footer_new', $data);
    }


    public function addProjects()
    {
        $postData = $this->request->getPost();

        $response = [
            'status' => 'error',
            'message' => 'An error occurred',
        ];

        $imagePathForDB = '';
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            if (in_array($image->getClientMimeType(), ['image/jpeg', 'image/png', 'image/jpg'])) {
                $uploadPath = FCPATH . 'gallery/';
                $imageName = pathinfo($image->getName(), PATHINFO_FILENAME) . '_' . uniqid() . '.' . $image->getClientExtension();
                $imagePathForDB = 'gallery/' . $imageName;

                if (!$image->move($uploadPath, $imageName)) {
                    $response['message'] = 'Failed to move file';
                    return $this->response->setJSON($response);
                }
            } else {
                $response['message'] = 'Invalid image type';
                return $this->response->setJSON($response);
            }
        }

        // Encode fields that are arrays to JSON
        $teamDataJson = !empty($postData['team']) ? json_encode($postData['team'], JSON_PRETTY_PRINT) : json_encode([]);
        $materialDataJson = !empty($postData['material']) ? json_encode($postData['material'], JSON_PRETTY_PRINT) : json_encode([]);
        $publicationDataJson = !empty($postData['publication']) ? json_encode($postData['publication'], JSON_PRETTY_PRINT) : json_encode([]);


        // Prepare data for insert
        $data = [
            'title' => !empty($postData['title']) ? $postData['title'] : '',
            'date' => !empty($postData['date']) ? $postData['date'] : '',
            'square' => !empty($postData['square']) ? $postData['square'] : '',
            'location' => !empty($postData['location']) ? $postData['location'] : '',
            'information' => !empty($postData['information']) ? $postData['information'] : '',
            'category' => !empty($postData['category']) ? $postData['category'] : '',
            'show' => isset($postData['show']) && $postData['show'] === 'on' ? 1 : 0,
            'image' => $imagePathForDB,
            'team' => $teamDataJson,
            'material' => $materialDataJson,
            'publication' => $publicationDataJson,
        ];



        // Check that at least one of the required fields is filled
        $requiredFields = ['title', 'date', 'square', 'location', 'information', 'category'];
        $atLeastOneFilled = false;

        foreach ($requiredFields as $field) {
            if (!empty($data[$field])) {
                $atLeastOneFilled = true;
                break;
            }
        }

        if (!$atLeastOneFilled) {
            $response['message'] = 'At least one field (title, date, square, location, information, category) must be filled.';
            return $this->response->setJSON($response);
        }

        // Insert into database
        $builder = $this->db->table('add_projects');
        if ($builder->insert($data)) {
            $response['status'] = 'success';
            $response['message'] = 'Row added successfully';
        } else {
            $response['message'] = 'Failed to add row to the database';
        }

        return $this->response->setJSON($response);
    }

}


