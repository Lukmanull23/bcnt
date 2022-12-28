@extends('user.layout.layout')

@section('content')
        <section class="atas py-5 shadow px-3 mb-5 bg-body rounded mt-3">
            <div class="container px-4 px-lg-5 my-5 ">
                <form class="form form-vertical" action="/profile" method="post" enctype="multipart/form-data">

                    <div class="row rounded-2 text-center text-black mx-auto">
                        <div class="kv-avatar">
                            <img src="assets/images/user.png" alt="">
                        </div>
                        <h3 class="lead fw-bolder mb-0">{{ auth()->user()->name }}</h3>
                    </div>

                    <div class="row rounded-2 px-4 px-lg-5 my-5 text-black">

                        <div class="col px-5 pb-5">
                            <div class="row pt-5 px-5 ">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                            </div>

                            <div class="row pt-3 px-5">
                                <div class="form-group ">
                                    <label for="email">Email<span class="kv-reqd">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row pt-3 px-5">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>

                            <div class="row pt-3 px-5">
                                <div class="form-group">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <input type="radio" name="jeniskelamin" value="pria"> Pria
                                    <input type="radio" name="jeniskelamin" value="wanita"> Wanita</p>        
                                </div>
                            </div>

                            <div class="row pt-3 px-5">
                                <div class="form-group">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input id="idtanggallahir" type="date" name="tanggallahir" width="150px" />
                                </div>
                            </div>
                        </div>


                        <div class="col  px-5">
                            <div class="row pt-3 px-5 pt-5">
                                    <div class="form-group">
                                        <label for="telpname">No. Telepon</label>
                                        <input type="text" class="form-control" name="telpname" required>
                                    </div>
                                </div>
                                
                                <div class="row pt-3 px-5">
                                    <div class="form-group">
                                        <label for="alamatname">Alamat</label>
                                        <textarea id="w3review" name="alamatname" rows="4" cols="55">
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row pt-3 px-5">
                                    <div class="d-flex flex-row mb-3">
                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary">Edit Profil</button>
                                        </div>
                                        <div class="text-right ps-1">
                                            <button type="button" class="btn btn-success">Save</button>
                                        </div>
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
