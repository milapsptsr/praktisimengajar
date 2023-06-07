@extends('layouts.main')
@section('body')
  <div class="d-flex justify-content-center">
    <div class="card mt-5">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
        <h6 class="card-subtitle mb-2 text-muted">Silahkan Masukkan Nama, E-mail dan Password Anda untuk Mendaftar</h6>
        <div class="row">
          <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan E-mail">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <input type="submit" class="btn btn-primary" id="submit" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
