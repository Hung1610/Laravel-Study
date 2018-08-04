<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Auth;
use App\SubContentCategory;

class ContentController extends Controller
{
    public function __construct(Content $model)
    {
        $this->model    = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(config('controller.prefix_view') . config('controller.folder') . $this->model->route);
        return view(config('controller.prefix_view') . config('controller.folder') . $this->model->route . '.index', [
            'data_table' =>   $this->model->paginate(10),
            'model'      =>   $this->model->route,
            'indexcontent' => true
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.content.create',[
            'sub'        => SubContentCategory::all(),
            'model'      => $this->model->route,
            'addcontent' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CURRENT-USER
        if (Auth::check()) {
            $user = Auth::user();

        // END CURRENT-USER

            // DATE
            $date = date('Y-m-d',strtotime($request->content_date));
            $request->merge([
                'user_id'       => $user->id,
                'content_date'  => $date,
            ]);
            // END-DATE
        }

        // IMG
        //Kiểm tra file
        if($request->hasFile('thumbnail')){
            $file = $request->thumbnail;
            $filename = $file->getClientOriginalName();
            $request->merge([
                'img' => 'thumbnail/' . $request->alias. '/' . $filename
                ]);
            $file->move('thumbnail/' . $request->alias, $filename);
        }
        // END-IMG
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        session()->flash('alert-class', 'alert-success');
        return redirect()->route($this->model->route .'.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(config('controller.prefix_view') . config('controller.folder') . $this->model->route . '.edit',[
            'sub'        => SubContentCategory::all(),
            'data'   => $this->model->find($id),
            'model'  => $this->model->route,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        // DATE
        $date = date('Y-m-d',strtotime($request->content_date));
        $request->merge([
            'user_id'       => 1,
            'content_date'  => $date,
            'sub_category_id'       => 1,
        ]);
        // END-DATE

        // IMG
        //Kiểm tra file
        if($request->hasFile('thumbnail')){
            $file = $request->thumbnail;
            $filename = $file->getClientOriginalName();
            $request->merge([
                'img' => 'thumbnail/' . $request->alias. '/' . $filename
                ]);
            $file->move('thumbnail/' . $request->alias, $filename);
        }
        // END-IMG

        // CREAT MODEL
        $this->model->update($request->all());
        session()->flash('flash_message', 'Cap nhat dữ liệu thành công');
        session()->flash('alert-class', 'alert-success');
        // END CREAT-MODEL
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);
        session()->flash('flash_message', 'Xoa thanh cong');
        session()->flash('alert-class', 'alert-danger');
        return redirect()->back();
    }
}
