

@if(count($get) == 0)

    {{'Request is Empty'}}
@endif

@foreach($get as $dat)

<form method="post" action="{{ route('acept') }}">
    @csrf
    <div class="row" style="margin-bottom:10px">
        <div class="col-4">
            <input readonly name="myTxt" value="{{$dat->id}}">
        </div>
        <div class="col-4">
            Usrname
        </div>
    
        <div class="col-4">
            <button type="submit" class="btn btn-success">View</button>
        </div>
    </div>
</form>
@endforeach


