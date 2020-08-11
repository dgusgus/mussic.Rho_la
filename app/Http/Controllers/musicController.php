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
        $Music = Music::all();
        return view('music.indexsong', [
            'items' => $Music
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
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

            $type1 = $file1->getClientOriginalExtension();
            $type2 = $file2->getClientOriginalExtension();

            if($type1 === 'jpg' || $type1 === 'JPG' && $type2 === 'mp3' || $type2 === 'MP3'){
                $file1->move(public_path()."/images/avatarSongs/", $url1);
                $file2->move(public_path()."/images/songs/", $url2);
            }
            else{
                return redirect()->back();
            }
            $Music = Music::create([
                'muscic_name' => $muscic_name,
                'avatar' => $url1,
                'song' => $url2
            ]);
            $Music->save();
            return redirect(route('music.index'));

        }
        catch(\Exception $ex){
            return redirect()->back();
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
     * @return \Illuminate\Http\ 
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
        $Musics = Music::findOrFail($id);
        if(empty($id)){
            return redirect()->back();
        }
        $Musics->delete();
        return redirect(route('music.indexsong'));
    }
    public function getDownload()
    {
        $File = public_path()."/download/info.pdf";
        $headers = array(
                'Content-Type:application/pdf',
        );
        return \Response::download($File,'filename.pdf',$headers);
/* 
        $myFile = public_path("dummy.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'nicesnippets-pdf-file-'.time().'.pdf';
        return response()->download($myFile, $newName, $headers);
 */
    }
}
