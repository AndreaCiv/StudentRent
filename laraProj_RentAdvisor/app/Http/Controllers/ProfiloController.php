<?php

namespace App\Http\Controllers;

use App\Http\Requests\RichiestaModificaDati;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Catalogo;
use App\Models\Resources\Messaggio;

class ProfiloController extends Controller
{
    protected $modello_user;
    protected $modello_catalogo;
    protected $modello_messaggio;

    public function __construct(){
        $this->modello_user = new User;
        $this->modello_catalogo = new Catalogo;
        $this->modello_messaggio = new Messaggio;
    }
    public function pagina_profilo_locatario(){

        $user = $this->modello_user::where('username', auth()->user()->username)->get()->first();
        return view('views_html/visualizza_profilo_locatario')
        ->with('user', $user);
    }

    public function pagina_profilo_locatore(){

        $user = $this->modello_user::where('username', auth()->user()->username)->get()->first();
        $annunci = $this->modello_catalogo->get_annunci_locatore(auth()->user()->username);
        $immagini = $this->modello_catalogo->get_immagini_annunci($annunci);
        $messaggi = $this->modello_messaggio->get_utenti_ultimi_messaggi_locatore(auth()->user()->username);
        return view('views_html/area_personale_locatore')
            ->with('user', $user)
            ->with('annunci', $annunci)
            ->with('immagini', $immagini)
            ->with('messaggi', $messaggi);

    }

    public function modifica_dati_locatore(RichiestaModificaDati $richiesta){
        $dati_validi = $richiesta->validated();
        $this->modello_user::where('username', $dati_validi['username'])
            ->limit(1)
            ->update(['nome' => $dati_validi['nome'], 'cognome' => $dati_validi['cognome'], 'genere' => $dati_validi['genere'], 'data_nascita' => $dati_validi['data_nascita'], 'telefono' => $dati_validi['telefono']]);

        return redirect()->action('ProfiloController@pagina_profilo_locatore');
    }

    public function modifica_dati_locatario(RichiestaModificaDati $richiesta){
        $dati_validi = $richiesta->validated();
        $this->modello_user::where('username', $dati_validi['username'])
            ->limit(1)
            ->update(['nome' => $dati_validi['nome'], 'cognome' => $dati_validi['cognome'], 'genere' => $dati_validi['genere'], 'data_nascita' => $dati_validi['data_nascita'], 'telefono' => $dati_validi['telefono']]);

        return redirect()->action('ProfiloController@pagina_profilo_locatario');
    }
}
