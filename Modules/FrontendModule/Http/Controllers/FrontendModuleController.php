<?php

namespace Modules\FrontendModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Solution;
use App\Models\Service;
use App\Models\Management;
use App\Models\ManPowerService;
use App\Models\About;
use App\Models\website_data;
use App\Models\seo;
use App\Models\slider;

class FrontendModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $solutions = Solution::with([
        'sub_title' =>fn($q) => $q->with('files'),
        'titleLangAll'])->get();

        $services  = Service::with('sub_title','titleLangAll')->get();
        $management_services = Management::with('sub_title','titleLangAll')->get();
        $manpower_services   = ManPowerService::with('sub_title','titleLangAll')->get();
        $abouts  = About::with('sub_title','titleLangAll')->get();
        $webData = website_data::select("*")->first();
        $slider = slider::select('*')->get();

        $seo_info = seo::where('id',1)->first();
      // dd($solutions);
        return view('frontendmodule::frontend.front2')->with([
            'solutions'=> $solutions,
            'services'=> $services,
            'management_services'=> $management_services,
            'manpower_services'=> $manpower_services,
            'abouts'=> $abouts,
            'seo_info'=>$seo_info,
            'webdata' => $webData,
            "slider" => $slider
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