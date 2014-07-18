<?php
namespace App\Controllers;
use App\Controllers;
use App\Controllers\BaseController;
use View;
use Input;
use App\Models\Camaba;
use App\Models\Nilai;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Paginator;

class CamabaController extends BaseController {
    
    public function view() {
        $table['camaba']=  Camaba::all();
        return View::make('camaba.view',$table);
    }
    
    public function add() {
        return View::make('camaba.add');
        
    }
    
    public function add_proses() {
        $rules = [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/camaba/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            $camaba = new Camaba;
            $camaba->nama =$in['nama'];
            $camaba->gender = $in['gender'];
            $camaba->alamat = $in['alamat'];
            $camaba->telp = $in['telp'];
            $camaba->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('/camaba/view');
        }
        
    }
    
    public function edit($id) {
        $camaba=  Camaba::find($id);
        $data=[
            'isi'=>$camaba
            ];
            return View::make('camaba.edit',$data);     
    }
    
    public function edit_proses($id) {
        $rules = [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/camaba/edit'.$id)->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            
            $camaba = Camaba::find($id);
            $camaba->nama =$in['nama'];
            $camaba->gender = $in['gender'];
            $camaba->alamat = $in['alamat'];
            $camaba->telp = $in['telp'];
            $camaba->update();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully Update Data !');
            return Redirect::to('/camaba/view');
        
    }
    }
    
    public function delete_proses($id) {
        $camaba = Camaba::find($id);
        $camaba->delete();
        Session::flash('message', 'Successfully deleted the Users!');
        return Redirect::to('/camaba/view');
        
    }
    
    
}
