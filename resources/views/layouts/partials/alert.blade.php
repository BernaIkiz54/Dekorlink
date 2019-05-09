@if(session()->has('mesaj'))
    <div class="container">
        <div class="alert alert-{{session('meaj_tur')}}">{{session('mesaj')}}</div>
    </div>
@endif