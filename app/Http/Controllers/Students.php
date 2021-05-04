<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Student;
use App\Models\User;


class Students extends Controller
{
   private $objUser;
   private $objStudent;

    public function __construct() {
      $this->objUser  = new User();
      $this->objStudent = new Student();

    }

    public function index() {


    }

    public function show() {
      return $this->objStudent->all(); 

    }
}
