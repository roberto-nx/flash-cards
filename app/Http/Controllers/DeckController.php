<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;



class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $decks=Deck::all();
        return view('home',['decks'=>$decks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {  
        $yourApiKey = getenv('YOUR_API_KEY');
        $client = OpenAI::client($yourApiKey);
        $create_card_ia = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'crie um baralho de flashcard com $request->amount cartas',
        ]);
        $result=$create_card_ia['choices'][0]['text'];
        explode("-", $result);
        $savecard=['deck_id=>$createdeck->id'];
        for ($i=0; $i < $request->amount; $i++) {
            array($arrayamouts,i);
        }
        foreach($arrayamouts as $arrayamout ){
            array($savecard,'card$arrayamout=>$result[]');
            array_shift($result);
        }
        $createcard=Deck::create([
            'deck_id'=>$request->title,
            'description'=>$request->desription,
            $result
        ]
        );

       return view('jogar',$createcard);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    
    }

    public function jogar($id){
        $deck=Deck::findorfail($id);
        return view('jogar',compact('deck'));
       }
    /**
     * Display the specified resource.
     */
    public function show(deck $deck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(deck $deck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, deck $deck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Task::where('id', $id)->delete();
        return redirect('home');

    }

   
    
}
