<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\Card;
use Illuminate\Http\Request;



class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $decks=deck::all()
        ->paginate(10);        
        return view('home',$decks);
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
        $createdeck=Deck::create($request->all());
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
        $createcard=Card::create([
            'deck_id'=>$createdeck->id,

        ]
        );

       return view('jogar',$createcard);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    
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

   
    public function jogar(){
       
        $deck=Deck::where('id', $id)->first();
         return view('jogar',$deck);
       }
}
