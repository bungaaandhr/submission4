@extends('books.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                        <h2>Laravel CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class ="card-body">
                        <a href="{{ url('/book/create') }}" class="btn btn-success btn-sm" title= "Add New Book">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Judul buku</th>
                                        <th>No hp</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mahesa</td>
                                        <td>Malin Kundang</td>
                                        <td>08912456789</td>
                                        <td>Dago</td>

                                        <td>
                                            <a href="" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href ="" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href ="" title="Delete Student"><button class="btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection
