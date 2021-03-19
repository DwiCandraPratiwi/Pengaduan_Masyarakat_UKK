@extends('layouts.admin')
@section('content')
<section>
    <div class="col-12">
        <h1 class="h2 mb-3 mt-3">Dashboard Admin</h1>
        <div class="card">
            <div class="card-body">
                <a class="btn-sm btn-success" href="{{route('petugas.create')}}">Buat Petugas</a>                                                

                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">Telp</th>
                          <th scope="col">Level</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($petugas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_petugas}}</td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->password}}</td>
                                <td>{{$item->telp}}</td>
                                @if($item->level == 'admin')
                                <td>Admin</td>
                                @else
                                <td>Petugas</td>
                                @endif
                                <td>
                                    <div class="row">
                                        <form action="petugas/{{$item->id_petugas}}/edit" method="GET">
                                            <button type="submit" class="btn btn-info mr-2">
                                                Edit
                                            </button>
                                        </form>   
                                        <form action="petugas/{{$item->id_petugas}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>  
                                    </div>
                                    
                                </td>
                                <td>
                                  
                                </td>
                            </tr>
                        @endforeach
                 
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
      
 