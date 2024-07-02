<?php

namespace App\Exports;

use App\Models\EqProductCategory;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EqProductCategoryExport implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('equipment.eq_product_category.export',['data'=>EqProductCategory::all()]);
    }
}
