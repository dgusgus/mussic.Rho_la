<?php

namespace App\Http\Controllers;
use App\http\requests\ValidatorMusicRequest;
use App\http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class musicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'index de musica comtroller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.createsong'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $muscic_name = $request->muscic_name;
        try{
    
            $file1 = $request->file('avatar');
            $file2 = $request->file('song');
            
            $url1 = time().$file1->getClientOriginalName();
            $url2 = time().$file2->getClientOriginalName();
            
            $file1->move(public_path()."/images/avatarSongs/", $url1);
            $file2->move(public_path()."/images/songs/", $url2);
            $Music = Music::create([
                'muscic_name' => $muscic_name,
                'avatar' => $url1,
                'song' => $url2
            ]);
            $Music->save();

        }
        catch(\Exception $ex){
            return 'se sale';/* redirect()->back() */;
        }
        /* dd($request->file('avatar')); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        /* dd($request->file('avatar')->) */ echo 'esto es update';
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
