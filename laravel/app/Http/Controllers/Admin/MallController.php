<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Announcement;
use App\Models\HomeRotator;

class MallController extends Controller
{
    public function product()
    {
        $data['query'] = SystemSetting::first();
        $data['products'] = Product::orderBy('id', 'DESC')->get()->toArray();
        $data['categories'] = ProductCategory::all()->toArray();
        return view('admin.productList', $data);
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'productName' => 'required',
            'productPrice' => 'required|numeric',
            'productCategory' => 'required',
        ]);

        $imagePath = '';
        if ($request->hasFile('productImage')) {
            $file = $request->file('productImage');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploads/img'), $imagePath);
        }

        Product::create([
            'productName' => $request->input('productName'),
            'productPrice' => $request->input('productPrice'),
            'productImage' => $imagePath ? url('assets/uploads/img/' . $imagePath) : '',
            'productCategory' => $request->input('productCategory'),
            'productDescription' => $request->input('productDescription', ''),
            'status' => 1,
        ]);

        return redirect('/admin/mall/product')->with('success', 'Product Added');
    }

    public function getProductData($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function updateProduct(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);

        if ($request->hasFile('productImage')) {
            $file = $request->file('productImage');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploads/img'), $imagePath);
            $data['productImage'] = url('assets/uploads/img/' . $imagePath);
        } else {
            unset($data['productImage']);
        }

        Product::where('id', $id)->update($data);
        return response()->json(['status' => 'success', 'message' => 'Product updated successfully']);
    }

    public function deleteProduct(Request $request)
    {
        $productId = $request->input('productId');
        Product::where('id', $productId)->delete();
        return response('Product deleted successfully');
    }

    public function category()
    {
        $data['query'] = SystemSetting::first();
        $data['categories'] = ProductCategory::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.productCategory', $data);
    }

    public function addCategory(Request $request)
    {
        $request->validate(['categoryName' => 'required']);
        ProductCategory::create([
            'categoryName' => $request->input('categoryName'),
            'status' => 1,
        ]);
        return redirect('/admin/mall/category')->with('success', 'Category Added');
    }

    public function getCategoryData($id)
    {
        $category = ProductCategory::find($id);
        return response()->json($category);
    }

    public function updateCategory(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        ProductCategory::where('id', $id)->update($data);
        return response()->json(['status' => 'success', 'message' => 'Category updated successfully']);
    }

    public function deleteCategory(Request $request)
    {
        $categoryId = $request->input('categoryId');
        ProductCategory::where('id', $categoryId)->delete();
        return response('Category deleted successfully');
    }

    public function bulletin()
    {
        $data['query'] = SystemSetting::first();
        $data['announcements'] = Announcement::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.bulletin', $data);
    }

    public function addBulletin(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        Announcement::create([
            'title' => $request->input('title'),
            'message' => $request->input('message'),
            'status' => 1,
        ]);
        return redirect('/admin/mall/bulletin')->with('success', 'Bulletin Added');
    }

    public function getBulletinData($id)
    {
        $bulletin = Announcement::find($id);
        return response()->json($bulletin);
    }

    public function updateBulletin(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        Announcement::where('id', $id)->update($data);
        return response()->json(['status' => 'success', 'message' => 'Bulletin updated successfully']);
    }

    public function deleteBulletin(Request $request)
    {
        $bulletinId = $request->input('bulletinId');
        Announcement::where('id', $bulletinId)->delete();
        return response('Bulletin deleted successfully');
    }

    public function carousel()
    {
        $data['query'] = SystemSetting::first();
        $data['rotators'] = HomeRotator::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.homePageCarousel', $data);
    }

    public function addCarousel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $file = $request->file('image');
        $imagePath = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/uploads/img'), $imagePath);

        HomeRotator::create([
            'title' => $request->input('title'),
            'image' => url('assets/uploads/img/' . $imagePath),
            'addTime' => time(),
        ]);

        return redirect('/admin/mall/carousel')->with('success', 'Carousel Added');
    }

    public function updateCarousel(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploads/img'), $imagePath);
            HomeRotator::where('id', $id)->update([
                'title' => $title,
                'image' => url('assets/uploads/img/' . $imagePath),
            ]);
        } else {
            HomeRotator::where('id', $id)->update(['title' => $title]);
        }

        return response()->json(['status' => 'success']);
    }

    public function deleteCarousel(Request $request)
    {
        $id = $request->input('id');
        HomeRotator::where('id', $id)->delete();
        return response('Deleted successfully');
    }
}
