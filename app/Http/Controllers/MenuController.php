<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$establishment_id = \Auth::user()->establishment_id;
			$menus = Menu::where('establishment_id', $establishment_id)->get();

			return view('menus.index', ['menus'=> $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(MenuRequest $request)
    {
			$data = $request->validated();
	
			$data['establishment_id'] = \Auth::user()->establishment_id;
			
			$menu = Menu::create($data);

			if ($request->hasfile('image')) {
				$imageFile = $request->file('image');

				$image_path = $imageFile->storeAs(
					"imgs/menus/",
					'image.jpg',
					'public',
				);
			
			$menu->update(['image_path' => $image_path]);
			}

			return redirect()->route('menu.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show(Menu $menu)
    {
			$addableProducts = Product::where('establishment_id', $menu->establishment_id)
            ->whereDoesntHave('menus', function($query) use ($menu) {
                $query->where('menus.id', $menu->id);
            })    
            ->get();

			return view('menus.show', ['menu' => $menu, 'addableProducts' => $addableProducts]);

    }

    public function showPublic()
    {
        return view('menus.showPublic');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Menu $menu)
    {
			return view('menus.edit', ['menu'=> $menu]);


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }

    public function update(MenuRequest $request, Menu $menu)
    {
			$data = $request->validated();

			$menu->update($data);

			return redirect()->route('menu.show', $menu->id);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function destroy(Menu $menu)
    {
			$menu->delete();

			return redirect()->route('menu.index');
    }
}
