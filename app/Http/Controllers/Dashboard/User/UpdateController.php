<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
use File;

class UpdateController extends Controller
{
    public function index(Request $request, $id)
    {
        $params = $request->all();
        $user = User::find($id);
        if (isset($request->image)) {

            $image_path = "uploads/".$user->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $image_name = str_replace(" ","_",pathinfo($request->file('image')->getClientOriginalName(),PATHINFO_FILENAME));
            $filename = time()."_".getFileName($image_name,$request->file('image'));
            $params["image"] = date("Y").'/'.date("m").'/'.$filename;
            $uploadfolder = base_path() . '/public/uploads/';
            $path = $uploadfolder.date("Y").'/'.date("m");
            $path = str_replace($uploadfolder, '', $path.'/');
            $request->file('image')->move(
                base_path() . '/public/uploads/'.$path,
                $filename
            );
        }

        $user->update($params);

        return Redirect::route('users')->withSuccess('User successfuly updated');
    }

    public function delete($id)
    {
    	$user = User::find(base64_decode($id))->delete();

    	return response()->json([
			'message' => 'User account deleted successfully'
		]);
    }
}
