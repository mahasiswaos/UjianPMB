<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use View;
use App\Models\Soal;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Paginator;
use Input;

class SoalController extends BaseController{
    //put your code here
    public function view() {
        $table['soal']=Soal::all();
        return View::make('soal.view',$table);
    }
    
     public function add() {
        return View::make('soal.add');
        
    }
    
    public function add_proses() {
        $rules = [
            'bid_study' => 'required',
           
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/soal/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            $soal = new Soal;
            $soal->bid_study =$in['bid_study'];
            $soal->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully Add Data!');
            return Redirect::to('/soal/view');
        }
        
    }
    
    public function edit($id) {
        $soal= Soal::find($id);
        $data=[
            'isi'=>$soal
            ];
            return View::make('soal.edit',$data);     
    }
    
    public function edit_proses($id) {
        $rules = [
            'bid_study' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/soal/edit'.$id)->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            
            $soal = Soal::find($id);
            $soal->bid_study =$in['bid_study'];
            $soal->update();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully Update Data !');
            return Redirect::to('/soal/view');
        
    }
    }
    
    public function delete_proses($id) {
        $soal = Soal::find($id);
        $soal->delete();
        Session::flash('message', 'Successfully deleted the Users!');
        return Redirect::to('/soal/view');
        
    }
    
}
