<?php

namespace App\Http\Controllers\admin;

use App\Model\AdminSetting;
use App\Model\Subscriber;
use App\Model\Testimonial;
use App\Repository\LandingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function __construct()
    {
        $this->landingRepo = new LandingRepository();
    }
    // admin landing setting
    public function landingSettings(Request $request)
    {
        $data['tab']='home';
        if(isset($_GET['tab'])){
            $data['tab']=$_GET['tab'];
        }
        $data['title'] = __('Landing Settings');
        $data['settings'] = allsetting();
        $data['pexer_features'] = AdminSetting::where('slug', 'LIKE', 'pexer_feature|%')->get();

        return view('admin.settings.landing', $data);
    }

    // admin settings save process
    public function updateLandingSettings(Request $request)
    {
        $rules=[];
//        $messages=[];
        if(!empty($request->landing_banner_img)){
            $rules['landing_banner_img']='image|mimes:jpg,jpeg,png|max:3000';
        }
        if(!empty($request->about_section_img)){
            $rules['about_section_img']='image|mimes:jpg,jpeg,png|max:3000';
        }
        if(!empty($request->feature_section_img)){
            $rules['feature_section_img']='image|mimes:jpg,jpeg,png|max:3000';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = [];
            $e = $validator->errors()->all();
            foreach ($e as $error) {
                $errors[] = $error;
            }
            $data['message'] = $errors;

            return redirect()->route('landingSettings', ['tab' => $request->tab])->with(['dismiss' => $errors[0]]);
        }

        try {
            if ($request->post()) {
                $response = $this->landingRepo->saveLandingSetting($request);
                if ($response['success'] == true) {
                    return redirect()->route('landingSettings', ['tab' =>  $request->tab])->with('success', $response['message']);
                } else {
                    return redirect()->route('landingSettings', ['tab' =>  $request->tab])->withInput()->with('success', $response['message']);
                }
            }
        } catch(\Exception $e) {
            return redirect()->back()->with(['dismiss' => $e->getMessage()]);
        }

    }


    // update landing pexer feature
    public function updatePexerFeature(Request $request)
    {
        try {
            $response = $this->landingRepo->updatePexerFeature($request);
            if ($response['success'] == true) {
                return redirect()->route('landingSettings', ['tab' =>  $request->tab])->with('success', $response['message']);
            } else {
                return redirect()->route('landingSettings', ['tab' =>  $request->tab])->withInput()->with('success', $response['message']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['dismiss' => $e->getMessage()]);
        }
    }

    // delete pexer feature
    public function pexerFeatureDelete(Request $request)
    {
        try {
            AdminSetting::where('id',$request->feature_id)->delete();

            return response()->json(['success'=>true, 'message' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'message' => 'failed']);
        }

    }

    // subscribers List
    public function subscribers(Request $request)
    {
        $data['title'] = __('Subscribers');
        if ($request->ajax()) {
            $data['items'] = Subscriber::orderBy('id', 'desc');
            return datatables()->of($data['items'])
                ->make(true);
        }

        return view('admin.settings.subscriber_list', $data);
    }

    // adminTestimonialList List
    public function adminTestimonialList(Request $request)
    {
        $data['title'] = __('Testimonial');
        if ($request->ajax()) {
            $data['items'] = Testimonial::orderBy('id', 'desc');
            return datatables()->of($data['items'])
                ->addColumn('image', function ($item) {
                    return '<img src="'.$item->image.'" width="50">';
                })
                ->addColumn('status', function ($item) {
                    return status($item->status);
                })
                ->addColumn('actions', function ($item) {
                    return '<ul class="d-flex activity-menu">
                        <li class="viewuser"><a href="' . route('adminTestimonialEdit', $item->unique_code) . '"><i class="fa fa-pencil"></i></a> </li>
                        <li class="deleteuser"><a href="' . route('adminTestimonialDelete', $item->id) . '"><i class="fa fa-trash"></i></a></li>
                        </ul>';
                })
                ->rawColumns(['actions','image'])
                ->make(true);
        }

        return view('admin.settings.testimonial.list', $data);
    }

    // View Add new faq page
    public function adminTestimonialAdd(){
        $data['title']=__('Add Testimonial');
        return view('admin.settings.testimonial.addEdit',$data);
    }

    // Create New faq
    public function adminTestimonialSave(Request $request){
        $rules = [
            'name'=>'required',
            'designation'=>'required',
            'company_name'=>'required',
            'messages'=>'required',
            'status'=>'required',
        ];
        if(!empty($request->landing_banner_img)){
            $rules['image']='image|mimes:jpg,jpeg,png|max:3000';
        }
        $messages = [];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errors = [];
            $e = $validator->errors()->all();
            foreach ($e as $error) {
                $errors[] = $error;
            }
            return redirect()->back()->withInput()->with(['dismiss' => $errors[0]]);
        }
        try {
            $data=[
                'designation'=>$request->designation
                ,'name'=>$request->name
                ,'company_name'=>$request->company_name
                ,'messages'=>$request->messages
                ,'status'=>$request->status
            ];
            if(empty($request->edit_id)) {
                $data['unique_code'] = uniqid().date('').time();
            }
            if(!empty($request->edit_id)) {
                $testimonial = Testimonial::where(['id' => $request->edit_id])->first();
            }
            $old_img = '';
            if(isset($request->image)) {
                if(isset($testimonial) && (!empty($testimonial->image))) {
                    $old_img = ($testimonial->image);
                }

                $data['image'] = uploadFile($request->image,path_image(),$old_img);
            }

            if(!empty($request->edit_id)){
                Testimonial::where(['id'=>$request->edit_id])->update($data);
                return redirect()->route('adminTestimonialList')->with(['success'=>__('Testimonial Updated Successfully!')]);
            }else{
                Testimonial::create($data);
                return redirect()->route('adminTestimonialList')->with(['success'=>__('Testimonial Added Successfully!')]);
            }
        } catch (\Exception $e) {
            return redirect()->route('adminTestimonialList')->with(['false'=>__('Something went wrong')]);

        }

    }

    // Edit Faqs
    public function adminTestimonialEdit($id){
        $data['title']=__('Update Testimonial');
        $data['item']=Testimonial::where('unique_code', $id)->first();

        return view('admin.settings.testimonial.addEdit',$data);
    }

    // Delete Faqs
    public function adminTestimonialDelete($id){

        if(isset($id)){
            $item = Testimonial::where(['id'=>$id])->first();
            if (!empty($item->image)) {
                $img = get_image_name($item->image);
                removeImage(path_image(),$img);
            }
            Testimonial::where(['id'=>$id])->delete();
        }

        return redirect()->back()->with(['success'=>__('Deleted Successfully!')]);
    }

}
