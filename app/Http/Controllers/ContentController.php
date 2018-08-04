<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

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
        return view(config('controller.prefix_view') . config('controller.folder') . $this->model->route . '.index', [
            'data_table' =>   $this->model->paginate(10),
            'model'      =>   $this->model->route,
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
            'model'      =>   $this->model->route,
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
        // DATE
        $date = date('Y-m-d',strtotime($request->content_date));
        $request->merge([
            'img'           => '',
            'alias'         => '',
            'user_id'       => 1,
            'content_date'  => $date,
            'sub_category_id'       => 1,
        ]);
        // END-DATE
        
        // IMG
        //Kiểm tra file
        if($request->hasFile('sp_hinh')){
            $file = $request->sp_hinh;
            $request->merge('img', $file->getClientOriginalName());
            $file->move('/upload/' . $request->alias, $file);
        }
        // END-IMG
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
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
        //
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
        return redirect()->back();
    }
}
