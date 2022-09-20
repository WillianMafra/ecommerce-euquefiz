<?php

namespace App\Service;

class ProductValidation
{
    public function validation(array $newProduct)
    {
        if (!empty($newProduct['image']) && $newProduct['image']->isValid()) {
            $image = $newProduct['image'];
            $imagepath = $image->store('product');
            $newProduct['image'] = $imagepath;
        }
            return $newProduct['image'];
    }
    public function categoryImageValidation(array $newCategory)
    {
        if (!empty($newCategory['image']) && $newCategory['image']->isValid()) {
            $image = $newCategory['image'];
            $imagepath = $image->store('category');
            $newCategory['image'] = $imagepath;
        }
        return $newCategory['image'];
    }
}
