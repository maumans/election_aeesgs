@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="rounded bg-light">
            <h2 class="bienvenu p-2">
                Bienvenu cher etudiant
            </h2>
            <div style="background-color: black" class="mx-2 mb-4" id="ligne">

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-danger text-light text-center"><h2>Vote</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert  alert-success text-center" role="alert">
                            {{ session()->remove('status') }}
                        </div>

                    @endif
                   <div>
                       <form action="{{route('users.update',Auth::user()->id)}}"  method="post">
                           @csrf
                           @method("patch")
                           <div>
                               <h4>Etes vous d'accord pour la mise en place du status et reglement interieur enoncé ?</h4>
                           </div>
                           <div class="d-flex justify-content-around">
                               <div class="divbtn" id="divoui">
                                   <div>
                                       <span class="text-center sp p-3" style="font-size: 1.7rem">OUI</span>
                                   </div>
                                   <input type="checkbox" name="vote[]" id="oui" value="oui" class="d-none">
                               </div>
                               <div class=" divbtn" id="divnon">
                                   <div>
                                       <span class="text-center sp p-3" style="font-size: 1.7rem">NON</span>
                                   </div>
                                   <input type="checkbox" name="vote[]" id="non" value="non" class="d-none">
                               </div>
                           </div>

                           <div class="d-flex justify-content-center mt-5">
                               <button type="submit" class="btn btn-dark col-8">Valider</button>
                           </div>
                       </form>


                       <div class="d-flex justify-content-center mt-5">
                           <a href={{asset("pdf/reglement.pdf")}}>
                               <button class="btn btn-secondary">
                                   telecharger le document
                               </button>
                           </a>
                       </div>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
