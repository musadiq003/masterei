<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mpic;
use App\master;
class MpicController extends Controller
{
     public function admin_mpic()
    {

    	$mpic = mpic::all();
        return view('admin/mpic/mpic',['mpic'=>$mpic]);
    }

  

   
	public function admin_add_mpic($id){
		
		return view('admin/mpic/add_mpic',['id'=>$id]);
	}


    public function add_mpic(Request $request)
    {
        $file = $request->file('img');

        if ($file) 
        {
            $name = $file->getClientOriginalName();
            
            $file->move('images', $name);
            $inputs = $request->all();
            $inputs['path'] = $name;


            $mpic = new mpic;
            $mpic->img = $name;
            $mpic->text1 = $request->input('text1');
            $mpic->text2= $request->input('text2');
            $mpic->am = $request->input('am');
            $mpic->master_id =$request->input('master_id');
            $mpic->save();


        
    }
    return redirect()->back();
}




 	public function admin_update_mpic($id){
		$mpic = mpic::find($id);
		return view('admin/mpic/update_mpic',['mpic'=>$mpic]);
	}


	public function update_mpic(Request $request,$id){

		$file = $request->file('img');
		
		if($file)
		{
			$name = $file->getClientOriginalName();
			$file->move('images' , $name);
			$inputs = $request->all();
			$inputs['path'] = $name;

			$data = array(

				'img'=>$name);	

			mpic::where('id',$id)->update($data);
		}
		

			$data = array(
				'text1'=>$request->input('text1'),
				'text2'=>$request->input('text2'),
				'am'=>$request->input('am'),
			);

		mpic::where('id',$id)->update($data);


		return redirect()->back();
	}

	public function delete_mpic($id){
		
		$mpic = mpic::find($id)->delete();
		return redirect()->back();
	}

	 public function product_mpic($id)
    {

    	$mpic = mpic::get()->where('master_id',$id);
        return view('admin/mpic/mpic',['mpic'=>$mpic]);
    }

    public function productt_mpic($id)
    {

    	$master = mpic::get()->where('master_id',$id);
        $sidebar = master::all();
        $seo = master::all();
        return view('front_page/p_detail',['master'=>$master,'sidebar'=>$sidebar,'seo'=>$seo]);
    }

}