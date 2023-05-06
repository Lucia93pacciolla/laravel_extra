<x-layout header="Lista Giochi" layout="Lista giochi" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">

    <div class="container my-5">
        <div class="row justift-content-center">
            @foreach ($games as $game)
                <div class="col-12 col-md-4 my-3 mx-auto">
                    <div class="card">
                        <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title textC2">{{$game->title}}</h5>
                          <h5 class="fst-italic textC2">{{$game->producer}}</h5>
                          <p class="card-text textC1">{{$game->year}}</p>
                          <p class="card-text textC1">{{$game->review}}</p>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>