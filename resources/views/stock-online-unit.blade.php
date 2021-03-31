@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Stock Online Unit</h3>

    <form action="{{url('stock-online-unit')}}" method="post">
    @csrf

    <div class="row mt-5">
        <div class="col-4">
            <div class="card">
                <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Tanggal Awal</label>
                    <input class="form-control" id="start_date" name="start_date" placeholder="MM/DD/YYY" type="text"/>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Tanggal Akhir</label>
                    <input class="form-control" id="end_date" name="end_date" placeholder="MM/DD/YYY" type="text"/>
                </div>
            </div>
        </div>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Download</button>
    </div>
    </form>
</div>
@endsection
