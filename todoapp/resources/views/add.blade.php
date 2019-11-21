@extends('layouts.app')

@section('content')
<div class="container">
                <h2>Lisa ülesanne</h2>
               
    <form method="POST" action="/task" class="w-75">

        <div class="form-group">
            <textarea name="description" class="form-control"></textarea>
              
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Salvesta</button>
        </div>
    {{ csrf_field() }}
    </form>


</div>
@endsection