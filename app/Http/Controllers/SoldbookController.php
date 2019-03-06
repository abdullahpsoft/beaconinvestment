<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSoldbookRequest;
use App\Http\Requests\UpdateSoldbookRequest;
use App\Repositories\SoldbookRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Soldbook;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Models\Booking;

class SoldbookController extends InfyOmBaseController
{
    /** @var  SoldbookRepository */
    private $soldbookRepository;

    public function __construct(SoldbookRepository $soldbookRepo)
    {
        $this->soldbookRepository = $soldbookRepo;
    }

    /**
     * Display a listing of the Soldbook.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->soldbookRepository->pushCriteria(new RequestCriteria($request));
        $soldbooks = $this->soldbookRepository->all();
        return view('admin.soldbooks.index')->with('soldbooks', $soldbooks);
    }

    /**
     * Show the form for creating a new Soldbook.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $users = User::all();
        $bookings = Booking::all();
//        $seller_id = $request->seller_id;
//        $bookings = Booking::Where ( 'user_id', '=' , $seller_id)->get();
//        $bookings = $seller_id->booking;
        return view('admin.soldbooks.create',compact('users','bookings'));
    }

    /**
     * Store a newly created Soldbook in storage.
     *
     * @param CreateSoldbookRequest $request
     *
     * @return Response
     */
    public function store(CreateSoldbookRequest $request)
    {
        $input = $request->all();

        $soldbook = $this->soldbookRepository->create($input);

        /*get booking id*/
        $bookings_id = $request->bookings_id;
        /*get buyer id*/
        $buyer_id = $request->buyer_id;
        /*get Form No*/
        $form_No = $request->form_No;
        //fetch an existing booking
        $getBook= Booking::find($bookings_id);
        //Clone a attribute of existing row into a new copy
        $repBook = $getBook->replicate();
        //Change the user_id of the copied booking
        $repBook->user_id = $buyer_id;
        //Change the user_id of the copied booking
        $repBook->form_no = $form_No;
        //Now create a duplicate Booking
        $repBook->save();


        /*Update the status from active to sold*/
        /*0 if the status is sold*/
        Booking::where('id', $bookings_id)->update(array('status' => 0));
        

        Flash::success('Soldbook saved successfully.');

        return redirect(route('admin.soldbooks.index'));
    }

    /**
     * Display the specified Soldbook.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soldbook = $this->soldbookRepository->findWithoutFail($id);

        if (empty($soldbook)) {
            Flash::error('Soldbook not found');

            return redirect(route('soldbooks.index'));
        }

        return view('admin.soldbooks.show')->with('soldbook', $soldbook);
    }

    /**
     * Show the form for editing the specified Soldbook.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soldbook = $this->soldbookRepository->findWithoutFail($id);

        if (empty($soldbook)) {
            Flash::error('Soldbook not found');

            return redirect(route('soldbooks.index'));
        }
        $users = User::all();
        $bookings = Booking::all();
        return view('admin.soldbooks.edit',compact('soldbook','users','bookings'));
//        )->with('soldbook', $soldbook);
    }

    /**
     * Update the specified Soldbook in storage.
     *
     * @param  int              $id
     * @param UpdateSoldbookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSoldbookRequest $request)
    {
        $soldbook = $this->soldbookRepository->findWithoutFail($id);

        

        if (empty($soldbook)) {
            Flash::error('Soldbook not found');

            return redirect(route('soldbooks.index'));
        }

        $soldbook = $this->soldbookRepository->update($request->all(), $id);

        Flash::success('Soldbook updated successfully.');

        return redirect(route('admin.soldbooks.index'));
    }

    /**
     * Remove the specified Soldbook from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.soldbooks.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Soldbook::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.soldbooks.index'))->with('success', Lang::get('message.success.delete'));

       }

}
