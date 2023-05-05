<x-layout layout="BlogH72" header="Benvenuti sul Blog H72" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">
    @if (session('gameCreated'))
        <div class="alert alert-success text-center">
            {{session('gameCreated')}}
        </div>
    @endif
</x-layout>