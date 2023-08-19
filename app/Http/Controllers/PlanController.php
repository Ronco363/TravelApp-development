<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{   
    public function index()
    {
        $plans= Plan::all();
        return view('plans', compact('plans'));
        
    }

    public function cart()
    {
        return view('cart');
    }
    
    public function addToCart($id)
    {
        $plan = Plan::findOrFail($id);

        /*
            stai ottendendo l'array del carrello dalla sessione utilizzando (pezzo di codice)
        */
        $cart = session()->get('cart',[]); // stai ottenendo l'array del carrello dalla sessioe
        
        //fornisce l'array del carrello esistente o un array vuoto se il carrello non esiste ancora nella sessione
        if(isset($cart[$id])){ //se esiste l'array
            $cart[$id]['quantity']++; //caso in cui id del piano esista già nell'array del carrello
        }else{ 
            /*
            altrimenti, stai creando un nuovo elemento 
            nell'array con tutte le informazioni del piano e 
            impostando la chiave quantità a 1
            */
            $cart[$id] = [
                'nome' => $plan->nome,
                'tipologia' => $plan->tipologia,
                'immagine'=>$plan->immagine,
                'prezzo' =>$plan->prezzo, 
                'descrizione'=>$plan->descrizione,
                'durata'=>$plan->durata,
                'distanza'=>$plan->distanza,
                'altitudine'=>$plan->altitudine,
                'valuta'=>$plan->valuta,
                'quantity' => 1
            ];
            
        }
        session()->put('cart', $cart); //salvo l'array del carrello aggiornato nella sessione e
        //e reindirizzando l'utente alla pagina precedente con un messaggio di successo
        
        return redirect()->back()->with('success','Il pacchetto viaggio è stato aggiunto al carrello con successo!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart= session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart',$cart);
            session()->flash('success', 'Carrello aggiornato con successo');
        }
    }
    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success', 'Pacchetto rimosso con successo!');
        }
    }
}