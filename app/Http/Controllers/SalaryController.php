<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Salary;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class SalaryController extends Controller
{
   /*-----Salary Index Show Called GET This Function-----*/
    public function index()
    {
        //
        $salaries=Salary::orderBy('id','ASC')->get();
        return view('admin.salary.add_salary',['salaries'=>$salaries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /*-----Salary Data Store Called This POST Function-----*/
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'salary_amount' => 'required|unique:salaries|min:4'
        ]);
        $salary=Salary::create($request->only('salary_amount'));
        // return redirect('/admin-salary')->with('salary', 'Salary Added Successfully');
      $salary_alert= Alert::success('Success', 'Salary Added Successfully');

        //     if($salary->save()){
        //         $notification = array(
        //             'message' => 'Post created successfully!',
        //             'alert-type' => 'success'
        //         );
        //         return redirect('/admin-salary')->with($notification);
        //     }
        //     else{
        //         return redirect()->back();
        Session::flash('success', 'Category Has Been Created :D');
     
        return redirect('/admin-salary')->with('success','Your Post as been submited!');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /*-----Salary Data Update Called This POST Function-----*/
    public function update(Request $request)
    {
        //
         $this->validate($request,[
            'salary_amount' => 'required|unique:salaries|min:4'
        ]);
        $id=$request->get('salary_id');
        $salaries=Salary::find($id);
        $salaries->salary_amount=$request->input('salary_amount');
        $salaries->save();
        Alert::success('Success', 'Salary Update Successfully');
        return redirect('/admin-salary')->with('Success', 'Salary Update Successfully');
    }

    /*-----Salary Data Delete Called This POST Function-----*/
    public function destroy(Request $request)
    {
        $id=$request->get('salary_id');
        $salaries=Salary::find($id);
        $salaries->delete();
        Alert::success('Success', 'Salary Deleted Successfully');
        return redirect('/admin-salary')->with('salary','Salary Deleted Successfully');
    }
}
