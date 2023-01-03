@extends('user.layout.layout')

@section('content')
        <section class="atas py-5 shadow px-3 mb-5 bg-body rounded mt-3">
            <div class="container px-4 px-lg-5 my-5 ">
                <form class="form form-vertical" action="/profile" method="post" enctype="multipart/form-data">

                    <div class="row rounded-2 text-center text-black  mb-5">
                        <div class="kv-avatar">
                            <img src="assets/images/user.png" alt="">
                        </div>
                        <h3 class="lead fw-bolder mb-0">{{ auth()->user()->name }}</h3>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4><i class="fa fa-user"></i> My Profile</h4>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td width="10">:</td>
                                                    <td>{{ $user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td>{{ $user->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>No HP</td>
                                                    <td>:</td>
                                                    <td>{{ $user->nohp }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td>{{ $user->alamat }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="card mb-3">
                                    <div class="card-body ">
                                        <h4><i class="bi bi-pencil-square "></i> Edit Profile</h4>
                                        <form method="POST" action="{{ url('profile') }}">
                                            @csrf
                                            <div class="form-group row ">
                                                <label for="name" class="col-md-2 col-form-label text-md-right mb-3">{{ __('Name') }}</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-2 col-form-label text-md-right mb-3">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nohp" class="col-md-2 col-form-label text-md-right mb-3">No. HP</label>

                                                <div class="col-md-6">
                                                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $user->nohp }}" required autocomplete="nohp" autofocus>

                                                    @error('nohp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="alamat" class="col-md-2 col-form-label text-md-right mb-3">Alamat</label>

                                                <div class="col-md-6">
                                                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror mb-3" required="">{{ $user->alamat }}</textarea>

                                                    @error('alamat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-2 col-form-label text-md-right mb-3">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-2 col-form-label text-md-right mb-3">{{ __('Confirm Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-2">
                                                    <button type="submit" class="btn btn-danger">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>

                        
                </form>
                
            
            
            
            
            
            
        
        

            








            <style type="text/css">
                .atas {
                    background-image: url("assets/images/bgprof.png" );
                    height: 1067px;
                    width:auto;
                }
                .kv-avatar .file-input {
                    display: table-cell;
                    width: 213px;
                    text-align: center;
                }
                .kv-reqd {
                    color: red;
                    font-family: monospace;
                    font-weight: normal;
                }
                .row {
                    text-align: left;
                }
                .col{
                    background-color: hsla(0, 0%, 50%, 0.6);;
                }
                textarea {
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: #f8f8f8;
                    resize: none;
                    text-align: left;
                    }

            </style>  
            
        </section> 
@endsection
