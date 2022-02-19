@extends('layout.master')



@section('halaman')
    <h1>Dashboard</h1>
@endsection
@section('judul_card')
    Data Perjalanan User
@endsection
@section('body')
    

        <div class="card-body">

          <table class="table table-sm">
            <thead>
              @php
                  $no=1
              @endphp
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Suhu</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                  
              <tr>
                <th scope="col">{{ $no++ }}</th>
                <th scope="col">{{ $d->tanggal }}</th>
                <th scope="col">{{ $d->jam }}</th>
                <th scope="col">{{ $d->lokasi }}</th>
                <th scope="col">{{ $d->suhu }}</th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        </div>
      </div>
    </div>
</div>
@endsection