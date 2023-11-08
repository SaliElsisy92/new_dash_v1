<?php

namespace Modules\FrontendModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Solution;
use App\Models\Service;
use App\Models\Management;
use App\Models\ManPowerService;
use App\Models\seo;
class FrontendModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $solutions = Solution::with('sub_title','titleLangAll')->get();
        $services  = Service::with('sub_title','titleLangAll')->get();
        $management_services = Management::with('sub_title','titleLangAll')->get();
        $manpower_services   = ManPowerService::with('sub_title','titleLangAll')->get();
        $seo_info = seo::where('id',1)->first();
      //  dd($management_services);
        return view('frontendmodule::frontend.front')->with([
            'solutions'=> $solutions,
            'services'=> $services,
            'management_services'=> $management_services,
            'manpower_services'=> $manpower_services,
            'seo_info'=>$seo_info
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('frontendmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('frontendmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('frontendmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}