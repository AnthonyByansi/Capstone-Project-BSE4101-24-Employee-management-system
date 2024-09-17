<?php

namespace App\Http\Controllers;
use App\Models\add_emp;
use App\Models\salary_scale;
use App\Models\leave;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Match_;

class employeeController extends Controller
{   

    public function setpass(Request $request){
        if(Auth::user()->role=="1"){
        $request->validate([
            'current_password' =>['required',new MatchOldPassword],
            'new_password'=> ['required'],
            'new_password_confirmation'=>['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=>Hash::make($request->new_password)]);
        return redirect ("/profile-settings")->with('message','password set Successfully');
    }
    else{
        $request->validate([
            'current_password' =>['required',new MatchOldPassword],
            'new_password'=> ['required'],
            'new_password_confirmation'=>['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=>Hash::make($request->new_password)]);
        return redirect ("/emp-profile-settings")->with('message','password set Successfully');
    }
    }

public function profileset(){
    if(Auth::user()->role =="1"){
        return view("profile-settings");
    }
    else{
        return redirect("/emp-profile-settings");
    }
    }
   
    public function detail(){
        if(Auth::user()->role == "1"){
        $user = User::all()->where('name',Auth::user()->name);
        return view('profile-detail',['user'=>$user]);
        }
        else{
            return redirect("/emp-profile-detail");
        }

    }
    public function empdetail(){
        $user = User::all()->where('name',Auth::user()->name);
        return view('emp-profile-detail',['user'=>$user]);

    }
    public function approve($id){
        $leave = leave::find($id);
        $leave -> status ="approved";
        $leave->update();
        return redirect ("/leave");
    }
    public function admin($id){
        $user = User::find($id);
        $user->role ="1";
        $user -> update();
        return redirect("/index");
    }
    public function index(){
        if(Auth::user()->role =="1"){
        $sal = add_emp::sum('salary');
        $num = add_emp::count();
        $leaves = leave::count();
        $salary = salary_scale::all();
        $users = User::all()->where('role','0');
        return view('index',['num'=>$num,'sal'=>$sal,'leaves'=>$leaves,'salary'=>$salary,'users'=>$users]);
        }
        else{
            return redirect ("/employeeDashboard");
        }

    }
    public function employeeDash(){
        $num = leave::all()->where('user',Auth::user()->name)->count();
        $up = leave::all()->where('user', Auth::user()->name);
        $team = add_emp::all()->where('email', Auth::user()->email);
        
        return view('employeeDashboard',['num'=>$num,'up'=>$up,'team'=>$team]);
    }
    
    public function addEmp(){
        return view('addEmployee');
    }


    public function employee(){
        $num = add_emp::count();
        $employees = add_emp::all();
        return view('employee',['employees'=>$employees,'num'=> $num]);
    }
    public function leave(){
        if(Auth::user()->role =="1"){
        $numl = leave::count();
        $pend = leave::where('status','pending')->count();
        $app = leave::where('status','approved')->count();
        $leaves = leave::all();
        $num = add_emp::count();
        return view('leave',['numl'=>$numl,'num'=>$num,'pend'=>$pend,'app'=>$app,'leaves'=>$leaves]);
        }
        else{
            return redirect ("/emp-leave");
        }
    }
    public function empleave(){
        $pend = leave::where('user',Auth::user()->name)->where('status','pending')->count();
        $app = leave::where('user',Auth::user()->name)->where('status','approved')->count();
        $leaves = leave::all();
        $num = leave::where('user',Auth::user()->name)->count();
        return view('employee-leave',['num'=>$num,'pend'=>$pend,'app'=>$app,'leaves'=>$leaves]);
    }

    public function store(){
        try{
        $employee = new add_emp();

        $employee -> first_name = request('fname');
        $employee -> last_name = request('lname');
        $employee -> email = request('email');
        $employee -> country = request('country');
        $employee -> working_start_date = request('wsd');
        $employee -> job_title = request('jobtitle');
        $employee -> job_type = request('jobtype');
        $employee -> currency = request('currency');
        $employee -> frequency = request('frequency');
        $employee -> payment_start_date = request('psd');
        $employee -> team= request('team');
        $employee -> office = request('office');
        $employee -> salary = request('salary');


        $employee -> save();

       return redirect('/employee');
        }
        catch(Exception $e){
            return redirect('/addEmployee')->with('message','Please fill all fields correctly'); 
        }

    }
    public function delete($id){
        $employee = add_emp::findorFail($id)->delete();
        return redirect ("/employee");
    }
    public function deleteuser($id){
        $user = User::findorFail($id)->delete();
        return redirect("/index");
    }
    public function deleteleave($id){
        $leave = leave::findorFail($id)->delete();
        if(Auth::user()->role="1"){
            return redirect ("/leave");
        }
        else{
        return redirect ("/emp-leave");
        }
    }
    public function edit($id){
        $employee = add_emp::find($id);
        return view ("/edit-form",['employee'=> $employee]);
      
    }
    public function update($id){
        $employee = add_emp::find($id);

        $employee -> first_name = request('fname');
        $employee -> last_name = request('lname');
        $employee -> email = request('email');
        $employee -> country = request('country');
        $employee -> working_start_date = request('wsd');
        $employee -> job_title = request('jobtitle');
        $employee -> job_type = request('jobtype');
        $employee -> currency = request('currency');
        $employee -> frequency = request('frequency');
        $employee -> payment_start_date = request('psd');
        $employee -> team= request('team');
        $employee -> office = request('office');

        $employee -> update();
        return redirect ("/employee");

    }
    function team(){
        $ios = add_emp::all()->where('team','IOS');
        $php = add_emp::all()->where('team','PHP');
        $des = add_emp::all()->where('team','Designing');
        $bus = add_emp::all()->where('team','Business');
        $tes = add_emp::all()->where('team','Testing');
        $and = add_emp::all()->where('team','Android');
        
        return view("/employee-team",['ios'=> $ios,'php'=>$php,'des'=>$des,'bus'=>$bus,'tes'=>$tes,'and'=>$and]);
    }
    public function leaveStore(){
        try{
        $leave = new leave();

        $leave -> leave_type = request("leave-type");
        $leave -> l_from = request("from");
        $leave -> l_to = request("to");
        $leave -> reason = request("reason");
        $leave  -> name = request("name");
        $leave  -> user = request("user");

        $leave-> save();
        return redirect ("/emp-leave")->with('msg','Leave successfully submitted');
        }
        catch(Exception $e){
            return redirect ("/emp-leave")->with('message','Please fill all leave fields correctly'); 
        }
    }
}
