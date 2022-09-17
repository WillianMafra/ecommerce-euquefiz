<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Service\ProductValidation;
use Illuminate\Support\Facades\Redirect;

class AdminCategoryController extends Controller
{

    public function categoriesList()
    {
        $categories = Category::all();
        return view('admin.management.categoriesList', compact('categories'));
    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('admin.management.addCategory', compact('categories'));
    }

    public function storeCategory(CategoryStoreRequest $request, ProductValidation $productValidation)
    {
        $newCategory = $request->validated();
        $productValidation->validation($newCategory);
        Category::create($newCategory);
        return Redirect::route('categoriesList');

    }

    public function destroyCategory(Category $category)
    {
        $category->delete();
        return Redirect::route('categoriesList');
    }
}
