@extends('adminlte::page')

@section('title', 'Dashboard')




@section('content')
    <div class="container" >
        <h1 class="title">
            Aulas
        </h1>

        @include('site.teacher.lessons.index')

        <table class="table table-hover">
            @include('layouts.showResponse')
            <a href="{{route('lessons.create')}}" class="btn btn-primary">Agendar aula</a>
            <tr>
                <th>Data</th>
                <th>Local</th>
                <th>Aluno</th>
                <th width="150px">Excluir</th>
            </tr>

            @forelse( $lessons as $lesson )
                <tr>
                    <td>{{ date('d/m h:i', strtotime($lesson->date)) }}</td>
                    <td>{{ $lesson->location->address ?? 'Vazio' }}</td>
                    <td>{{$lesson->student_name}}</td>
                    <td>
                        <form action="{{route('permissions.destroy', $lesson->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="90">
                        <p>Nenhum Resultado!</p>
                    </td>
                </tr>
            @endforelse
        </table>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
