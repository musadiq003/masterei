<?php

namespace App\Http\Controllers;
use App\master;
use App\mpic;
use Illuminate\Http\Request;

class MasterController extends Controller
{
      public function admin_master()
    {

    	$master = master::all();
        return view('admin/master/product',['master'=>$master]);
    }

     


    public function admin_add_master()
    {
        return view('admin/master/add_master');
    }


    public function add_master(Request $request)
    {

        $file = $request->file('img');

        if ($file) 
        {
            $name = $file->getClientOriginalName();
            
            $file->move('images', $name);
            $inputs = $request->all();
            $inputs['path'] = $name;


            $master = new master;
            $master->img = $name;
            $master->text1 = $request->input('text1');
            $master->text2 = $request->input('text2');
            $master->save();


        
    }
    return redirect()->back();
}




 	public function admin_update_master($id){
		$master = master::find($id);
		return view('admin/master/update_master',['master'=>$master]);
	}


	public function update_master(Request $request,$id){

		$file = $request->file('img');
		
		if($file)
		{
			$name = $file->getClientOriginalName();
			$file->move('images' , $name);
			$inputs = $request->all();
			$inputs['path'] = $name;

			$data = array(

				'img'=>$name);	

			master::where('id',$id)->update($data);
		}
		

			$data = array(
				'text1'=>$request->input('text1'),
				'text2'=>$request->input('text2'),
			);

		master::where('id',$id)->update($data);


		return redirect()->back();
	}

	public function delete_master($id){
		
		$master = master::where('id',$id)->delete();
		mpic::where('master_id',$id)->delete();
		return redirect()->back();
	}

}
