<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
class AdminController extends Controller
{
      public function admin_banner()
    {

    	$banner = banner::all();
        return view('admin/banner',['banner'=>$banner]);
    }

     public function admin_header()
    {
        return view('admin/header');
    }


    public function admin_add_banner()
    {
        return view('admin/banner/add_banner');
    }


    public function add_banner(Request $request)
    {
        $file = $request->file('img');

        if ($file) 
        {
            $name = $file->getClientOriginalName();
            
            $file->move('images', $name);
            $inputs = $request->all();
            $inputs['path'] = $name;


            $banner = new banner;
            $banner->img = $name;
            $banner->text = $request->input('img_text');
            $banner->save();


        
    }
    return redirect()->back();
}




 	public function admin_update_banner($id){
		$banner = banner::find($id);
		return view('admin/banner/update_banner',['banner'=>$banner]);
	}


	public function update_banner(Request $request,$id){

		$file = $request->file('img');
		
		if($file)
		{
			$name = $file->getClientOriginalName();
			$file->move('images' , $name);
			$inputs = $request->all();
			$inputs['path'] = $name;

			$data = array(

				'img'=>$name);	

			banner::where('id',$id)->update($data);
		}
		

			$data = array(
				'text'=>$request->input('text'),
			);

		banner::where('id',$id)->update($data);


		return redirect()->back();
	}

	public function delete_banner($id){
		
		$banner = banner::find($id)->delete();
		return redirect()->back();
	}

}
