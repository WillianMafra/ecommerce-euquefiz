<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Service\ProductValidation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminCategoriesController extends Controller
{

    public function categoriesList()
    {
        $categories = Category::all();
        return view('admin.management.categories.categoriesList', compact('categories'));
    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('admin.management.categories.addCategory', compact('categories'));
    }

    public function storeCategory(CategoryStoreRequest $request, ProductValidation $productValidation)
    {
        $newCategory = $request->validated();
        $newCategory['image'] = $productValidation->categoryImageValidation($newCategory);
        Category::create($newCategory);
        return Redirect::route('categoriesList');

    }

    public function destroyCategory(Category $category)
    {
        $category->delete();
        Storage::delete($category->image ?? '');
        return Redirect::route('categoriesList');
    }
}
