@extends('layout.main')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <ul class="custom-wrapper p-5">
                    @foreach ( $trains as $train )
                        <li class="py-3">
                            <table class="table text-white">
                                <thead>
                                  <tr>
                                    <th scope="col">Codice Treno</th>
                                    <th scope="col">Compagnia</th>
                                    <th scope="col">Stazione Partenza</th>
                                    <th scope="col">Stazione Arrivo</th>
                                    <th scope="col">Orario Partenza</th>
                                    <th scope="col">Orario Arrivo</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">N° Carrozze</th>
                                    <th scope="col">In Orario</th>
                                    <th scope="col">Soppresso</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <th scope="row">{{$train->codice_treno}}</th>
                                    <td>{{$train->azienda}}</td>
                                    <td>{{$train->stazione_partenza}}</td>
                                    <td>{{$train->stazione_arrivo}}</td>
                                    <td>{{$train->orario_partenza}}</td>
                                    <td>{{$train->orario_arrivo}}</td>
                                    <td>{{$train->prezzo_biglietto}}</td>
                                    <td>{{$train->numero_carrozze}}</td>
                                    <td>{{$train->in_orario}}</td>
                                    <td>{{$train->cancellato}}</td>
                                  </tr>

                                </tbody>
                              </table>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
