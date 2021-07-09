@extends('layouts.app')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">halaman baru</div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                   
                    <div class="row"> 
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Doraemon&Nobita.jpg')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Doraemon & Nobita</h3></b></center></p>
                                </div>        
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Nobita.png')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Nobita</h3></b></center></p>
                                </div>        
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Doraemon1.jpg')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Doraemon</h3></b></center></p>
                                </div>        
                            </div>
                        </div>    
                    </div>
                    <br>
                   
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Doraemon&Nobita.jpg')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Doraemon & Nobita</h3></b></center></p>
                                </div>        
                            </div>
                        </div>                        
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Nobita.png')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Nobita</h3></b></center></p>
                                </div>        
                            </div>
                        </div>                       
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 150px" src="{{asset('image/Doraemon1.jpg')}}" alt="Card image cap">
                                <div class="card-body" style="background-color:#87C4F5">
                                    <p class="card-text"><center><b><h3>Doraemon</h3></b></center></p>
                                </div>        
                            </div>
                        </div>    
                    </div>
                    <br> 
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
