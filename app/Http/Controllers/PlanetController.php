<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);
    }
    public function planet($id)
    {
        $planet = Planet::find($id);
        return view('planets.show',['planet' => $planet]);
    }

    public function create()
    {
        return view('planets.create');
    }
    public function store(Request $request)
    {
         // インスタンスの作成
        $planet = new Planet;

         // 値の用意
        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_en;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

         // インスタンスに値を設定して保存
        $planet->save();

         // 登録したらindexに戻る
        return redirect('/planet');
    }

    public function show($id)
    {
        $planet = planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function edit($id) 
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(Request $request, $id) 
    {
         // ここはidで探して持ってくる以外はstoreと同じ
        $planet = Planet::find($id);

         // 値の用意
        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_en;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

         // 保存
        $planet->save();

         // 登録したらindexに戻る
        return redirect('/planets');
    }
        public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
