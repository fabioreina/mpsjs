<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Json;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function fileupload(Request $request)
    {
        $fileName = time().'.'.$request->btnfile->extension();
        $file = Storage::disk('public')->path('uploads/' . $fileName);
        $request->btnfile->move(public_path('uploads'), $fileName);
        $places = json_decode(file_get_contents($file), true);

        foreach ($places as $value => $value1) {

                Places::create(array(
                'name' => $value1['name'],
                'latitude' => $value1['latitude'],
                'longitude' => $value1['latitude'],
            ));

        }
        return back()
            ->with('success', 'Seu arquivo foi importado com sucesso..')
            ->with('file', $fileName);
    }

    public function modelo1(Request $request)
    {
        $places = Places::orderBy('id')->get();
        return view('elements.result', compact('places'));
    }

    public function modelo2(Request $request)
    {
        $places = Places::orderBy('id')->get();
        return view('elements.result2', compact('places'));
    }
}
