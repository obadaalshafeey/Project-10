@extends('layout.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<form action="/book22" method='post'>
   @csrf
   @if(Session::get('data'))
    <p style='display:none'>{{$a=Session::get('data')}}</p>
    @endif
    @foreach($data as $i)
    <p style='display:none'>{{$c=true}}</p>
    @if(Session::get('data'))
    @foreach ($a as $b)
    {{-- <p>{{$b->room_id }} roa</p>
    
    <p>{{ $i->id }} roa1</p> --}}

    @if($b->rooms_id == $i->id)
    <p style='display:none'>{{$c=false}}</p>
    @endif
   
      @endforeach
      @endif
      @if($c == true)
      <div class="">
        <input class="form-check-input" type="radio" name="rooms_id" id="exampleRadios1" value="{{$i->id}}" >
        <label class="form-check-label" for="exampleRadios1">
       {{ $i->id}}  {{ $i->name}}
        </label>
        @error('rooms_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

      </div>
      <input type="hidden" value='{{$i->price}}' name='total_price'>
      @endif
      @endforeach
      <p>payment method</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" >
        <label class="form-check-label" for="exampleRadios1">
         cash
        </label>
   

      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="online">
        <label class="form-check-label" for="exampleRadios2">
          online
        </label>
        @error('payment')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type='submit'>Sumbit</button>
</form>
@endsection
