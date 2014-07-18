<?php
namespace App\Controllers;
use App\Controllers;
use App\Controllers\BaseController;
use View;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Jnefer
 */
class IndexController extends BaseController{
    //put your code here
    public function index() {
        return View::make('index');
    }
}
