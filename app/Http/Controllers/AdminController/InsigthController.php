<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\ReportsServiceInterface;
use Illuminate\Http\Request;
use App\Traits\YearRange;
class InsigthController extends Controller
{

    use YearRange;

    public function __construct(
        protected ReportsServiceInterface $reportsServiceInterface,
    ){}

    public function analytics(Request $request)
    {
        $year = $request->year?? now()->year;
        $course = $request->course?? 'All';

        $availableYears = $this->yearRange();

    }
}