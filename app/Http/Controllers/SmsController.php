<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSmsRequest;
use App\Http\Requests\UpdateSmsRequest;
use App\Repositories\SmsRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Sms;
use App\User;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SmsController extends InfyOmBaseController
{
    /** @var  SmsRepository */
    private $smsRepository;

    public function __construct(SmsRepository $smsRepo)
    {
        $this->smsRepository = $smsRepo;
    }

    /**
     * Display a listing of the Sms.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->smsRepository->pushCriteria(new RequestCriteria($request));
//        $sms = $this->smsRepository->all();
//        return view('admin.sms.index')
//            ->with('sms', $sms);
        $users = User::all();
        return view('admin.sms.create', compact('users'));
    }

    /**
     * Show the form for creating a new Sms.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all();

        return view('admin.sms.create', compact('users'));
    }

    /**
     * Store a newly created Sms in storage.
     *
     * @param CreateSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateSmsRequest $request)
    {
        $input = $request->all();

//        $sms = $this->smsRepository->create($input);


//        $data = $request->all();
        $mobile = '03316657849';
//        $mobile = $request->cell_no;
        $message = "Hello";
//        $message = $request->message;
        
	$url = (str_replace(' ','%20',"http://119.160.92.2:7700/sendsms_url.html?Username=03043963406&Password=Beacon@2017&From=Beacon&To=".$mobile."&Message=".$message));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec ($ch);

        curl_close ($ch);

        return $response;
    }

    /**
     * Display the specified Sms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('admin.sms.show')->with('sms', $sms);
    }

    /**
     * Show the form for editing the specified Sms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('admin.sms.edit')->with('sms', $sms);
    }

    /**
     * Update the specified Sms in storage.
     *
     * @param  int              $id
     * @param UpdateSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSmsRequest $request)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        $sms = $this->smsRepository->update($request->all(), $id);

        Flash::success('Sms updated successfully.');

        return redirect(route('admin.sms.index'));
    }

    /**
     * Remove the specified Sms from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.sms.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Sms::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.sms.index'))->with('success', Lang::get('message.success.delete'));

       }

}
