<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Requests\StoreFormRequest;

class ListController extends Controller
{
    private function getData(){
        return [
            ['id' => '1', 'name' => 'Goth Store', 'type' => 'colthes'],
            ['id' => '2', 'name' => 'Bluemoon', 'type' => 'colthes'],
            ['id' => '3', 'name' => 'Dukram', 'type' => 'Shoes'],
            ['id' => '4', 'name' => 'Relojes Golden', 'type' => 'accessories'],
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Lists.index',[
            'stores' => Store::all(),
            'userInput' => "<script>alert('hello world')</script>"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {   
        $data = $request->validated();

        Store::create($data);
        return redirect()->route('Lists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Store $List)
    {   
        return view('Lists.show', [
            'List' => $List
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $List)
    {
        return view('Lists.edit', [
            'List' => $List
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFormRequest $request, Store $store)
    {
        $data = $request->validated();

        $store->update($data);
        $List = $store;

        return redirect()->route('Lists.show',$List->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
