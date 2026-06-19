@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Order</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.main.page') }}">Dashboard Home</a></li>
                <li class="breadcrumb-item active">Order List</li>
            </ol>

            <table class="table border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Payment Method</th>
                        <th>statsu</th>
                        <th>total Price</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($order as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->payment_method }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->total }}</td>
                            <th class="d-flex gap-3 align-items-center">
                                <a href="{{ route('order.info.page', $item->id) }}">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <form action="{{ route('order.item.delete', $item->id) }}" method="POST" style="display:inline;"
                                    onsubmit="return confirm('Delete this order?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger border-0 bg-transparent text-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </th>


                            @php
                                $i++;
                               @endphp
                        </tr>
                    @endforeach



                </tbody>
            </table>



        </div>

    </main>
    </div>
    <!-- main content end -->
@endsection