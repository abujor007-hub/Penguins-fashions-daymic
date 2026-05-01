
        @extends('layout.layout')

             @section('content')

                         <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Catagory Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Catagory Add </li>
                        </ol>

                        <div class="container">
                            <div class="header">
                                <h1 class="text-center fw-bold">Add Catagory</h1>
                            </div>
                            <form action="{{ route('catagory.store') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" placeholder="Add Catagory" name="add_catagory" id="catagory_name" class=" form-control">

                                <input type="submit" class="btn btn-success mt-3" value="Submit">
                            </form>

                            <div class="container-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($data as $name)
                                             <tr>
                                            <td>{{ $name->add_catagory }}</td>
                                            <td>
                                                <form action="{{ route('catagory.delete',$name->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('Delete')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                             </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

                    
                       
                    </div>
              
           </main>
        </div>
       <!-- main content end -->
 @endsection


   


       

      