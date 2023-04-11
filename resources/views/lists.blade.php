@extends('homeLayout')

@section('title','Pain Tracker')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mainMenu.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="container">
        <div class="row" style="margin-top:20%">
            <div class="col-md-12">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Nivel</th>
                            <th>Menstruación</th>
                            <th>Medicinas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->created_at }}</td>
                                <td>{{ $registro->pain_level }}</td>
                                @if($registro->menstruation == 1)
                                    <td>Si</td>
                                @else
                                    <td>No</td>
                                @endif
                                <td>{{ $registro->medicines_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#example').DataTable({
        order: [[0, 'desc']],
        "columnDefs": [
            {"className": "dt-center", "targets": [1,2]}
        ],
    });
    });
</script>
@endsection