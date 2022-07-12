@extends('layout.appad')
@section('title')
Modifier un jeune 
@endsection
@section('content')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">modifier un jeune</h4>
              
              @if (Session::has('status'))
                  <div class="alert alert-success">
                    {{Session::get('status')}}
                  </div>
                @endif
                @if (count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
               @endif
               <form action="App\Http\Controllers\JadController@modifierjeune" method="POST"
                class="cmxform" id="commentForm">
                
                 {{ Form::hidden ('id',$jeune->id) }}

                 <div class="form-group">
                  <label for="cnom">nom(required)</label>
                  <input id="cnom" class="form-control" value="$jeune->nom" type="text" name="nom" required>
                </div>
                <div class="form-group">
                  <label for="cemail">prenom (required)</label>
                  <input id="prenom" class="form-control" type="prenom" name="prenom" required>
                </div>

                <div class="form-group">
                  <label for="cformation">formation (required)</label>
                  <input id="cformation" class="form-control" type="text" name="formation" required>
                </div>

                <div class="form-group">
                  <label for="cprofession">profession (required)</label>
                  <input id="cprofession" class="form-control" type="text" name="profession" required>
                </div>
                <div class="form-group">
                  <label for="csexe">sexe (required)</label>
                  <input id="csexe" class="form-control" type="text" name="sexe" required>
                </div>
                <div class="form-group">
                  <label for="ceglise_provenance">eglise de p (required)</label>
                  <input id="ceglise_provenance" class="form-control" type="text" name="eglise_provenance" required>
                </div>
                <div class="form-group">
                  <label for="ctel">telwatsapp (required)</label>
                  <input id="ctel" class="form-control" type="number" name="tel" required>
                </div>
                <div class="form-group">
                  <label for="cministere">ministere (required)</label>
                  <input id="cministere" class="form-control" type="number" name="ministere" required>
                </div>

                <div class="form-group">
                  <label for="cbaptise">baptise(required)</label>
                  <input id="cbaptise" class="form-control" type="text" name="baptise" required>
                </div>

                <div class="form-group">
                  <label for="cstatus">status</label>
                  <input id="cstatus" class="form-control" type="number" name="status" required>
                </div>
                
                 {{-- <div class="form-group">
                  {{Form::label('','nom du jeune',['for'=>'cname'])}}
                  {{Form::text('nom',$jeune->nom,['class'=>'form-control','id'=>'cname'])}}
                 </div> --}}

                 {{-- <div class="form-group">
                   {{Form::label('','prenom du jeune',['for'=>'cprenom'])}}
                   {{Form::text('prenom',$jeune->prenom,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','formation du jeune',['for'=>'cprenom'])}}
                   {{Form::text('formation',$jeune->formation,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','profession du jeune',['for'=>'cprenom'])}}
                   {{Form::text('profession',$jeune->profession,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','sexe du jeune',['for'=>'cprenom'])}}
                   {{Form::text('sexe',$jeune->sexe,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  {{-- <div class="form-group">
                   {{Form::label('','annee de provenance du jeune',['for'=>'cprenom'])}}
                   {{Form::text('annee_provenance',$jeune->annee_provenance,['class'=>'form-control','id'=>'cprenom'])}}
                  </div> --}}

                  {{-- <div class="form-group">
                   {{Form::label('','eglise de provenance du jeune',['for'=>'cprenom'])}}
                   {{Form::text('eglise_provenance',$jeune->eglise_provenance,['class'=>'form-control','id'=>'cprenom'])}}
                  </div> --}}
                  {{-- <div class="form-group">
                     {{Form::label('','date de naissance du jeune',['for'=>'cprenom'])}}
                     {{Form::text('date_naiss',$jeune->date_naiss,['class'=>'form-control','id'=>'cprenom'])}}
                    </div> --}}

                    
                  {{-- <div class="form-group">
                   {{Form::label('','telephone du jeune',['for'=>'cprenom'])}}
                   {{Form::number('tel',$jeune->tel,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','telephone wathsapp du jeune',['for'=>'cprenom'])}}
                   {{Form::number('telwathsap',$jeune->telwathsap,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                   <div class="form-group">
                   {{Form::label('','ministere du jeune dans l\'eglise',['for'=>'cprenom'])}}
                   {{Form::text('ministere',$jeune->ministere,['class'=>'form-control','id'=>'cprenom'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','baptise ou pas',['for'=>'cprenom'])}}
                   {{Form::text('baptise',$jeune->baptise,['class'=>'form-control','id'=>'cprenom'])}}
                  </div> --}} 

                  {{--<div class="form-group">
                    <label for="cemail">E-Mail (required)</label>
                    <input id="cemail" class="form-control" type="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="curl">URL (optional)</label>
                    <input id="curl" class="form-control" type="url" name="url">
                  </div>
                  <div class="form-group">
                    <label for="ccomment">Your comment (required)</label>
                    <textarea id="ccomment" class="form-control" name="comment" required></textarea>
                  </div>--}}
                  {{-- <div class="form-group">
                    {{Form::label('','status du jeune',['for'=>'cstatus'])}}
                    {{Form::text('status','$jeune->status',['class'=>'form-control','id'=>'cstatus'])}}
                   </div>
                  
                  {{Form::submit('modifier',['class'=>'btn btn-primary'])}}
                  {!!Form::close()!!} --}}
               
              </form>
            </div>
          </div>
        </div>
     
      </div>
@endsection

@section('script')
{{-- <script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script> --}}
@endsection