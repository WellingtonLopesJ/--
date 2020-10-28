@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')
    <div class="container">

        @include('layouts.showResponse')

        <form action="{{route('lessons.store')}}" method="POST">

            @csrf
            <header><h3>Agendar aula</h3></header>

            <div class="form-group">
                <label for="location">Local</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Endereço">
            </div>

            <div class="form-group">
                <label for="date">Data</label>
                <input type="datetime-local" class="form-control" id="date" name="date">
            </div>


            <div class="form-group">
                <label for="student">Aluno</label>
                @include('layouts.searchbar')
            </div>

            <div class="form-group">
                <label for="repeat">Repetir:</label>
                <select class="custom-select" id="repeat" name="repeat">
                    <option selected value="1">Aula única</option>
                    <option value="7">Semanalmente</option>
                    <option value="15">Quinzenalmente</option>
                    <option value="30">Mensalmente</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
