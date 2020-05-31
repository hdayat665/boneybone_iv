<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Biodata;
use App\Company;
use App\User;
use DB;
class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = DB::table('biodatas')
            ->leftJoin('companies', 'biodatas.company', '=', 'companies.id')
            ->leftJoin('job', 'biodatas.position', '=', 'job.id')
            ->get();
        return view('biodata.index', compact('biodatas'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         // $value = $request->session()->all();
         $value = $request->session()->has('user');

         $id = request()->segment(2);

        if ($value) {
            $com = DB::table('biodatas')
            ->leftJoin('companies', 'biodatas.company', '=', 'companies.id')
            ->leftJoin('job', 'biodatas.position', '=', 'job.id')
            ->where('job.id', $id)
            ->get();

        // print_r($company);
         // exit();
            return view('biodata.create', compact('com'));
        }else{
            return redirect()->route('login');
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        Biodata::create($request->all());
        return redirect()->route('biodata.index')
                        ->with('success', 'new application submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.detail', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = User::find($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
      $biodata = User::find($id);
      $biodata->name = $request->get('name');
      $biodata->email = $request->get('email');
      $biodata->save();
      return redirect()->route('biodata.index')
                      ->with('success', 'Biodata updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')
                        ->with('success', 'Application deleted successfully');
    }
}