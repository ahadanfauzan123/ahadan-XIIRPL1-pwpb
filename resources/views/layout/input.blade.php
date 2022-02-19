@extends('layout.master')

@section('halaman')
    <h1>input</h1>
@endsection

@section('judul_card')
    Data Pribadi
@endsection

@section('body')

    <div class="card-body">
      <form method="POST" action="simpanInputPerjalanan">
        {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-12">
            <label for="first_name">id User</label>
            <input id="id" type="text" class="form-control bg-secondary" name="id" autofocus>
          </div>
          <div class="form-group col-12">
            <label for="last_name">tanggal</label>
            <input id="tanggal" type="date" class="form-control bg-secondary" name="tanggal">
          </div>
          <div class="form-group col-12">
            <label for="last_name">jam</label>
            <input id="jam" type="time" class="form-control bg-secondary" name="jam">
          </div>
          <div class="form-group col-12">
            <label for="last_name">lokasi</label>
            <input id="lokasi" type="text" class="form-control bg-secondary" name="lokasi">
          </div>
          <div class="form-group col-12">
            <label for="last_name">suhu</label>
            <input id="suhu" type="text" class="form-control bg-secondary" name="suhu">
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-lg btn-block col-4">
            input
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection