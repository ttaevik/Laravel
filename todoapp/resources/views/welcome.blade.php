@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card w-75 ">
        @if (Auth::check())
            <div class="card-header">ToDo</div>
            <div class="card-body">
                <a href="/task" class="btn btn-outline-success">Lisa uus ülesanne</a>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th colspan="2">Ülesanded</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user->tasks as $task)
                            <tr>
                                <td>
                                    {{$task->description}}
                                </td>
                                <td>
                                    
                                    <form action="/task/{{$task->id}}">
                                        <button type="submit" name="edit" class="btn btn-outline-primary">Muuda</button>
                                        <button type="submit" name="delete" formmethod="POST" class="btn btn-outline-danger">Kustuta</button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                            

                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="card-body">
                <h3>Jätkamiseks<a href="/register"> registreeri </a> või <a href="/login">Logi sisse!</a></h3>
            </div>
        @endif
    </div>                         
</div>
@endsection