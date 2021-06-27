<?php

namespace App\Http\Controllers;

use App\Models\BasicDetails;
use App\Models\EducationDetails;
use App\Models\Preference;
use App\Models\ReferanceDetails;
use App\Models\TechnicalExperiances;
use App\Models\User;
use App\Models\WorkExperiances;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Request $request) {
        $user = new User();
        $basic = new BasicDetails();
        $education = new EducationDetails();
        $work  = new WorkExperiances();
        $ref = new ReferanceDetails();
        $pref = new Preference();
        $technogic = new TechnicalExperiances();

        //user table entry
        $user->name = $request->basic['firstName'].' '.$request->basic['lastName'];
        $user->email = $request->basic['email'];
        $user->password = '***';
        $user->is_admin = 0;
        $user->save();

        //basic detail
        $basic->designation = $request->basic['designation'];
        $basic->user_id = $user->id;
        $basic->address = $request->basic['address1'].' '.$request->basic['address2'];
        $basic->phone_number = $request->basic['phonenumber'];
        $basic->city = $request->basic['city'];
        $basic->state = $request->basic['state'];
        $basic->gender = $request->basic['gender'];
        $basic->date_of_birth = $request->basic['dob'];
        $basic->status = $request->basic['status'];
        $basic->save();

        // education detail
        $education->ssc = json_encode($request->education['ssc']);
        $education->hsc = json_encode($request->education['ssc']);
        $education->bechelor_degree = json_encode($request->education['bechelor']);
        $education->master_degree = json_encode($request->education['master']);
        $education->user_id = $user->id;
        $education->save();

        //work
        $work->user_id = $user->id;
        $work->company_detail = json_encode($request->company);
        $work->save();

        //technogic
        $technogic->user_id = $user->id;
        $technogic->language_name =json_encode($request->techno);
        $technogic->Save();

        //ref
        $ref->user_id = $user->id;
        $ref->contact_detail = json_encode($request->ref);
        $ref->save();

        //location
        $pref->user_id = $user->id;
        $pref->location  = json_encode($request->pref['location']);
        $pref->notice_period = $request->pref['notice'];
        $pref->ectc = $request->pref['esalary'];
        $pref->cctc = $request->pref['csalary'];
        $pref->department_name = $request->pref['department'];
        $pref->save();
        return response(['message'=>'sucessfully inserted'],201);

    }
    public function editData(Request $request) {
        $user = User::with('basic','education','work','technical','ref','pref')->where('id',$request->id)->first()->toArray();
        if($user) {
            return response(['data'=>$user,'message'=>'get data succesfully'],201);
        }
        return response(['message'=>'data not found'],401);

    }
    public function update(Request $request) {
        //user
        $user = User::where('id',$request->basic['id'])->first();
        $user->name = $request->basic['firstName'].' '.$request->basic['lastName'];
        $user->email = $request->basic['email'];
        $user->password = '***';
        $user->is_admin = 0;
        $user->save();

        //basic details
        $basic = BasicDetails::where('user_id',$request->basic['id'])->first();
        $basic->designation = $request->basic['designation'];
        $basic->user_id = $user->id;
        $basic->address = $request->basic['address1'].' '.$request->basic['address2'];
        $basic->phone_number = $request->basic['phonenumber'];
        $basic->city = $request->basic['city'];
        $basic->state = $request->basic['state'];
        $basic->gender = $request->basic['gender'];
        $basic->date_of_birth = $request->basic['dob'];
        $basic->status = $request->basic['status'];
        $basic->save();

        // education detail
        $education = EducationDetails::where('user_id',$request->basic['id'])->first();
        $education->ssc = json_encode($request->education['ssc']);
        $education->hsc = json_encode($request->education['ssc']);
        $education->bechelor_degree = json_encode($request->education['bechelor']);
        $education->master_degree = json_encode($request->education['master']);
        $education->user_id = $user->id;
        $education->save();

        //work
        $work = WorkExperiances::where('user_id',$request->basic['id'])->first();
        $work->user_id = $user->id;
        $work->company_detail = json_encode($request->company);
        $work->save();

        //technogic
        $technogic = TechnicalExperiances::where('user_id',$request->basic['id'])->first();
        $technogic->user_id = $user->id;
        $technogic->language_name =json_encode($request->techno);
        $technogic->Save();

        //ref
        $ref = ReferanceDetails::where('user_id',$request->basic['id'])->first();
        $ref->user_id = $user->id;
        $ref->contact_detail = json_encode($request->ref);
        $ref->save();

        //location
        $pref = Preference::where('user_id',$request->basic['id'])->first();
        $pref->user_id = $user->id;
        $pref->location  = json_encode($request->pref['location']);
        $pref->notice_period = $request->pref['notice'];
        $pref->ectc = $request->pref['esalary'];
        $pref->cctc = $request->pref['csalary'];
        $pref->department_name = $request->pref['department'];
        $pref->save();
        return response(['message'=>'updated succesfully'],201);
    }

    public function deleteData(Request $request) {
        $user = User::with('basic','education','work','technical','ref','pref')->where('')->delete();
        if($user) {
            return response(['message'=>'employee deleted sucesfully'],201);
        }
        return response(['message'=>'something went wrong'],401);
    }
}
