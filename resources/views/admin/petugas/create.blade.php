@extends('layouts.admin')
@section('content')
<section>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="{{route('petugas.store')}}"  method="POST">
                    @csrf
                    @method('PUT')
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Input Petugas</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Petugas" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telpon</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="telp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Level</label>
                        <select class="form-control" name="level" required>
                            <option value="" selected disabled hidden>--Select Level--</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                   
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
      
 