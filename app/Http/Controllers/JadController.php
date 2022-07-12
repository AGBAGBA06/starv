<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadavenou;
use App\Models\Product;
class JadController extends Controller
{
    //pour acceder a la page ajouter jeune
    public function page1(){

        return view ('admin.page1');
    }
    
    //pour acceder a la page ajouter jeune
    public function ajouterjeune(){

        return view ('admin.ajouterjeune');
    }
     //pour acceder a la page jeunes
     public function jeunes(){
            $jeunes= Jadavenou::get();
         return view ('admin.jeunes')->with('jeunes',$jeunes);
     }
         //pour l'ajout
     public function sauverjeune(Request $request){
         //$this->validate($request, [''=>'required|unique:jadavenous']);
         $this->validate($request, ['nom'=>'required',
                                    'prenom'=>'required',
                                    'formation'=>'required',
                                    'profession'=>'required',
                                    'sexe'=>'required',
                                    // 'annee_provenance'=>'required',
                                    'eglise_provenance'=>'required',
                                    // 'date_naiss'=>'required',
                                    'tel'=>'required',
                                    'telwathsap'=>'required',
                                    'ministere'=>'required',
                                    'status'=>'required',
                                    'baptise'=>'required']);
            $jeunes=new Jadavenou();
            $jeunes->nom=$request->input('nom');
            $jeunes->prenom=$request->input('prenom');
            $jeunes->formation=$request->input('formation');
            $jeunes->profession=$request->input('profession');
            $jeunes->sexe=$request->input('sexe');
            // $jeunes->annee_provenance=$request->input('annee_provenance');
            $jeunes->eglise_provenance=$request->input('eglise_provenance');
            // $jeunes->date_naiss=$request->input('date_naiss');
            $jeunes->tel=$request->input('tel');
            $jeunes->telwathsap=$request->input('telwathsap');
            $jeunes->ministere=$request->input('ministere');
            $jeunes->baptise=$request->input('baptise');
            $jeunes->status=1;
                $jeunes->save();
                return redirect('/jeunes')->with('status',
                'le(a) jeune '.$jeunes->nom.' a ete bien ajoute');
                }
    
    //pour la modification
    public function edit_jeune($id){
        $jeune= Jadavenou::find($id);
        return view ('admin.edit_jeune')->with('jeune',$jeune);

         }
         public function modifierjeune(Request $request){
            $this->validate($request, ['nom'=>'required',
                                        'prenom'=>'required',
                                        'formation'=>'required',
                                        'profession'=>'required',
                                        'sexe'=>'required',
                                        // 'annee_provenance'=>'required',
                                        'eglise_provenance'=>'required',
                                        // 'date_naiss'=>'required',
                                        'tel'=>'required',
                                        'telwathsap'=>'required',
                                        'ministere'=>'required',
                                        'baptise'=>'required']);
            $jeune= Jadavenou::find($request->input('id'));
            $jeune->nom=$request->input('nom');
            $jeune->prenom=$request->input('prenom');
            $jeune->formation=$request->input('formation');
            $jeune->profession=$request->input('profession');
            $jeune->sexe=$request->input('sexe');
            // $jeune->annee_provenance=$request->input('annee_provenance');
            $jeune->eglise_provenance=$request->input('eglise_provenance');
            // $jeune->date_naiss=$request->input('date_naiss');
            $jeune->tel=$request->input('tel');
            $jeune->telwathsap=$request->input('telwathsap');
            $jeune->ministere=$request->input('ministere');
            $jeune->baptise=$request->input('baptise');
            $jeune->update();
            return redirect('/jeunes')->with('status',
          'le(a) jeune  '.$jeune->nom.'  a ete bien modifié');
         }

    //pour la suppression
    public function deletejeune($id){
    $jeunes=Jadavenou::find($id);
    $jeunes->delete();
     return redirect('/jeunes')->with('status',
    'le(a) jeune  '.$jeunes->nom.' a ete bien supprimer');

}

  //pour activer un jeune
  public function activer_jeune($id){
    $jeune=Jadavenou::find($id);
    $jeune->status=1;
        $jeune->update();
        return redirect('/jeunes')->with('status',
        'la jeune '.$jeune->nom.' a ete bien desactiverr');
        
        //pour desactiver un jeune
    }
     public function desactiver_jeune($id){
        $jeune=Jadavenou::find($id);
        $jeune->status=0;
        $jeune->update();
        return redirect('/jeunes')->with('status',
        'la jeune '.$jeune->nom.' a ete bien active');
}
   // public function sauverproduit(Request $request){ }
}
