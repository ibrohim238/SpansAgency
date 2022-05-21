<?php

namespace App\Http\Controllers;

use App\Filters\MonthCreatedAtFilter;
use App\Http\Resources\WebinarCollection;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class WebinarController extends Controller
{
    public function index(Request $request)
    {
        $webinars = QueryBuilder::for(Webinar::class)
            ->with('theme')
            ->allowedFilters([
                'name',
                AllowedFilter::exact('theme', 'theme.name'),
                AllowedFilter::custom('month', new MonthCreatedAtFilter())
            ])->paginate($request->get('count'));

        return new WebinarCollection($webinars);
    }
}
