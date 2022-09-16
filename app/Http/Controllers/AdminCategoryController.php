<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Service\ImageValidation;
use App\Service\ProductsSearch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminCategoryController extends Controller
{
    public function listCategory(Request $request, ProductsSearch $categorySearch) : Application|View|Factory
    {
        $categories = $categorySearch->searchCategory($request);

        return view('admin.category.categoryList',compact('categories'));
    }

    public function createCategory() : Application|View|Factory
    {
        return view('admin.category.addCategory');
    }

    public function storeCategory( CategoryStoreRequest $request)
    {
        $newCategory = $request->validated();
        Category::create($newCategory);

        return Redirect::route('list');
    }
    public function editCategory(Category $category) : Application|View|Factory
    {
        return view('admin.category.editCategory', ['category' => $category]);
    }

    public function updateCategory(
        Category              $category,
        CategoryStoreRequest $categoryStoreRequest,
        ImageValidation      $imageValidation)
    {

        $newCategory = $categoryStoreRequest->validated();
        $imageValidation->validation($newCategory);

        $category->fill($newCategory);
        $category->saveOrFail();

        return Redirect::route('listCategory');
    }
}
