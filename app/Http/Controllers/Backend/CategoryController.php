<?php namespace App\Http\Controllers\Backend;

use App\Exceptions\BaseException;
use App\Helpers\ViewHelper;
use App\Http\LogicService\CategoryService;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Request;

class CategoryController extends BackendController
{

    public function __construct()
    {
        parent::__construct();
        $this->tips['商品管理'] = null;
        $this->tips['商品分类'] = route('category.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryService::getInstance()->getCategorySelectTree();
        $category = ViewHelper::getInstance()->categoryTreeSelect($category);
        $this->viewData('category', $category);
        $this->tips['列表'] = null;
        $this->viewData('tips', $this->tips);
        return $this->view('category.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryService::getInstance()->getCategorySelectTree();
        $category = ViewHelper::getInstance()->categoryTreeSelect($category);
        $this->viewData('category', $category);
        $this->tips['添加'] = null;
        $this->viewData('tips', $this->tips);
        return $this->view('category.form', $this->viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try{
            $category = Category::create($request->all());
            return $request->request->get('continue') ?  $this->redirectBackWithMessage('操作成功')
                : redirect()->route('category.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
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
        $category = CategoryService::getInstance()->getCategorySelectTree();
        $category = ViewHelper::getInstance()->categoryTreeSelect($category);
        $this->viewData('category', $category);
        $info = Category::find($id);
        $info = is_null($info) ? [] : $info->toArray();
        $this->viewData('info', $info);
        $this->tips['修改'] = null;
        $this->viewData('tips', $this->tips);
        return $this->view('category.edit', $this->viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try{
            $cat = Category::find($id);
            $cat->update($request->all());
            return $this->redirectBackWithMessage('操作成功');
        }catch (BaseException $e)
        {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
