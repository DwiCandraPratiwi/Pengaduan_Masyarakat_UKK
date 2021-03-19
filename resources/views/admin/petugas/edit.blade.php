@extends('layouts.admin')
@section('content')
<section>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                @foreach ($petugas as $item )
                <form action="/admin/petugas/{{$item->id_petugas}}"  method="POST">
                    @method('PUT')
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Input Petugas</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Petugas" name="nama" value="{{$item->nama_petugas}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="username" value="{{$item->username}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password" value="{{$item->password}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telpon</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Telpon" name="telp" value="{{$item->telp}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Level</label>
                        <select class="form-control" name="level" required>
                            @if($item->level == 'admin')
                            <option selected value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                            @else
                            <option selected value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                       

                            @endif   
                           
                        </select>
                    </div>
                   
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
                </form>
                @endforeach

               
            </div>
        </div>
    </div>
</section>
@endsection
      
 