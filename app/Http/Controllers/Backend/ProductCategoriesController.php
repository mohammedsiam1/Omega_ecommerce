<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Backend\ProductCategoryRerquest;
use Illuminate\Support\Facades\File;
class ProductCategoriesController extends Controller
{
    public function index()
    {
    $categories=ProductCategory::withCount('products')->
    when(\request()->keyword !=null,function($query){
        $query->search(\request()->keyword);
    })->
    when(\request()->status !=null,function($query){
        $query->whereStatus(\request()->status);    
    })->
    orderBy(\request()->sort_by ?? 'id',\request()->order_by ??'desc')
    ->paginate(\request()->limit_by ?? 10);
    return view('backend.prodect_categries.index',compact('categories'));
    }
    public function create()
    {
        $main_categories=ProductCategory::whereNull('parent_id')->get(['id','name']);
        return view('backend.prodect_categries.create',compact('main_categories'));
    }
    public function store(ProductCategoryRerquest $request)
    {
        $input['name'] = $request->name;
        $input['status'] = $request->status;
        $input['parent_id'] = $request->parent_id;
        if ($image = $request->file('cover')) {
            $file_name = Str::slug($request->name).".".$image->getClientOriginalExtension();
            $path = public_path('/assets/product_categories/' . $file_name);

            Image::make($image->getRealPath())->resize(500, null, function ($constraint) { //display 500 and auto Height
                $constraint->aspectRatio();  
            })->save($path, 100);   //the quality
            $input['cover'] = $file_name;
        }

        ProductCategory::create($input);
        return redirect()->route('admin.product_categories.index')->with([
            'message' => 'Created successfully',
            'alert-type' => 'success'
        ]);

}



    public function show($id)
    {
        return view('backend.prodect_categries.show');
    }
    public function edit(ProductCategory $productCategory)
    {
        if (!auth()->user()->ability('admin', 'update_product_categories')) {
            return redirect('admin/index')->with([
                'message' => 'You are not allowed to edit',
                'alert-type' => 'danger'
            ]);
        }
        $main_categories = ProductCategory::whereNull('parent_id')->get(['id', 'name']);
        return view('backend.prodect_categries.edit', compact('main_categories', 'productCategory'));
    }

    public function update(ProductCategoryRerquest $request, ProductCategory $productCategory)
    {
        if (!auth()->user()->ability('admin', 'update_product_categories')) {
            return redirect('admin/index');
        }

        $input['name'] = $request->name;
        $input['slug'] = null;
        $input['status'] = $request->status;
        $input['parent_id'] = $request->parent_id;

        if ($image = $request->file('cover')) {
            if ($productCategory->cover != null && File::exists('assets/product_categories/'. $productCategory->cover)){
                unlink('assets/product_categories/'. $productCategory->cover);
            }
            $file_name = Str::slug($request->name).".".$image->getClientOriginalExtension();
            $path = public_path('/assets/product_categories/' . $file_name);
            Image::make($image->getRealPath())->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path, 100);
            $input['cover'] = $file_name;
        }

        $productCategory->update($input);

        return redirect()->route('admin.product_categories.index')->with([
            'message' => 'Updated successfully',
            'alert-type' => 'success'
        ]);
    }

    public function destroy(ProductCategory $productCategory)
    {
        if (!auth()->user()->ability('admin', 'delete_product_categories')) {
            return redirect('admin/index');
        }
      if($productCategory->cover){

        if (File::exists('assets/product_categories/'. $productCategory->cover)){
            unlink('assets/product_categories/'. $productCategory->cover);
        }
    }
        $productCategory->delete();

        return redirect()->route('admin.product_categories.index')->with([
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        ]);
    }

    public function remove_image(Request $request)
    {
       

        if (!auth()->user()->ability('admin', 'delete_product_categories')) {
            return redirect('admin/index');
        }
        $category = ProductCategory::findOrFail($request->product_category_id);
        if (File::exists('assets/product_categories/'. $category->cover)){
            unlink('assets/product_categories/'. $category->cover);
            $category->cover = null;
            $category->save();
        }
        return true;
    }

}
