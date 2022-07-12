

@extends('layout.appad')
@section('title')
  Liste des jeunes
@endsection
{{Form::hidden('',$increment=1)}}
@section('content')
<div class="card">
        <div class="card-body">
          <h4 class="card-title"><i><h3>Liste des Jeunes de AD Avenou</h2></i></h4>
          
          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
        @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>nom </th>
                        <th>prenom </th>
                        <th>formation</th>
                        <th>profession</th>
                        <th>sexe</th>
                        {{-- <th>annee de provenace</th> --}}
                        <th>eglise de provenace</th>
                        {{-- <th>date_naiss</th> --}}
                        <th>tel</th>
                        <th>telwathsapp</th>
                        <th>ministere</th>
                        <th>baptise</th>
                        <th>status</th>
                        <th>actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jeunes as $user)
                      <tr>
                        <td>{{$increment}}</td>
                        <td>{{$user->nom}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->formation}}</td>
                        <td>{{$user->profession}}</td>
                        <td>{{$user->sexe}}</td>
                        {{-- <td>{{$user->annee_provenance}}</td> --}}
                        <td>{{$user->eglise_provenance}}</td>
                        {{-- <td>{{$user->date_naiss}}</td> --}}
                        <td>{{$user->tel}}</td>
                        <td>{{$user->telwathsap}}</td>
                        <td>{{$user->ministere}}</td>
                        <td>{{$user->baptise}}</td>
                       <td>
                          @if ($user->status==1)
                        <label class="badge badge-success">Activé</label>
                        @else
                        <label class="badge badge-danger">desactivé</label>
                        @endif
                        </td>
                        <td>
                          <button class="btn btn-outline-primary" >
                            <a href="{{url('/edit_jeune/'.$user->id)}}"> edit</a></button>
                          <a href="{{url('/deletejeune/'.$user->id)}}" id="delete" class="btn btn-outline-danger">Delete</a>
                          @if ($user->status==1)
                          <button class="btn btn-outline-warning" >
                               <a href="{{url('/desactiver_jeune/'.$user->id)}}"> desactivé</a></button>
                            @else
                             <button class="btn btn-outline-primary" >
                               <a href="{{url('/activer_jeune/'.$user->id)}}">activé</a></button>
                          
                           @endif
                        </td>
                      </tr>
                      {{Form::hidden('',$increment=$increment+1)}}
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
 
@endsection
@section('script')
<script src="backend/js/data-table.js"></script>    
@endsection