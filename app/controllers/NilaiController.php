<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use View;
use App\Models\Nilai;
use App\Models\Camaba;
use App\Models\Soal;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Paginator;
use Input;

/**
 * Description of NilaiController
 *
 * @author Jnefer
 */
class NilaiController extends BaseController{
    //put your code here
    public function view() {
        $table['nilai']=Nilai::all();       
        return View::make('nilai.view',$table);
    }
    
    public function add() {
        $data['camaba']=  Camaba::all();
        $data['soal']= Soal::all();
        return View::make('nilai.add',$data);
        
    }
    
    public function addProses() {
        $rules = [
            'camaba_id' => 'required',
            'soal_id' => 'required',
            'nilai' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/nilai/add')->withErrors($validator);
        } else {
        
        $in=Input::all();
        $nilai=new Nilai;
        $nilai->camaba_id=$in['camaba_id'];
        $nilai->soal_id=$in['soal_id'];
        $nilai->nilai=$in['nilai'];
        
        if($in['nilai']>=70){
            $ket='Lulus';
        }else{
            $ket='Tidak Lulus';
        }
        
        $nilai->ket=$ket;
        $nilai->save();
        
         /*
             * redirect ke index bands
             */
            Session::flash('message', 'Tambah Data Berhasil !');
            return Redirect::to('/nilai/view');
        }
    }
    
    public function edit($id) {
       $camaba=  Camaba::all();
       $soal=  Soal::all();
       $nilai=  Nilai::find($id);
       $data=[
           'camaba'=>$camaba,
           'soal'=>$soal,
           'nilai'=>$nilai,
       ];
        return View::make('nilai.edit',$data);
        
    }
    
    public function editProses($id) {
        $rules = [
            'camaba_id' => 'required',
            'soal_id' => 'required',
            'nilai' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/nilai/edit/'.$id)->withErrors($validator);
        } else {
        
        $in=Input::all();
        $nilai=  Nilai::find($id);
        $nilai->camaba_id=$in['camaba_id'];
        $nilai->soal_id=$in['soal_id'];
        $nilai->nilai=$in['nilai'];
        
        if($in['nilai']>=70){
            $ket='Lulus';
        }else{
            $ket='Tidak Lulus';
        }
//        
        $nilai->ket=$ket;
        $nilai->update();
        
         /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('/nilai/view');
        }
        
    }
    
    public function deleteProses($id) {
        $nilai=  Nilai::find($id);
        $nilai->delete();
        
        Session::flash('message', 'Hapus Data Berhasil!');
        return Redirect::to('/nilai/view');
        
    }
}
