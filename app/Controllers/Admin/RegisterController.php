<?php

namespace App\Controllers\Admin;

use App\Models\RegisterModel;
use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        $registerModel = new RegisterModel();
        
        $registers = $registerModel->findAll();

        foreach ($registers as &$register) {
            $register['getSchedule'] = $registerModel->getSchedule($register['schedule_id']);
        }

        $data['registers'] = $registers;

        return view('admin/register/index', $data);
    }
}
