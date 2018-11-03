@extends('./fontEnd/master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">All Product</div>

                    <div class="panel-body">
                        @if (session('msg'))
                            <div class="alert alert-success text-center">
                                {{ session('msg') }}
                            </div>
                        @endif

                        <table class="table table-striped table-hover">
                            <tr>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Stock</td>
                                <td>Discount</td>
                                <td>Action</td>
                            </tr>
                            @forelse($allPdt as $pdt)

                                <tr>
                                    <td>{{$pdt->title}}</td>
                                    <td>{{$pdt->price}}</td>
                                    <td>{{$pdt->stock}}</td>
                                    <td>{{$pdt->discount}}</td>
                                    <td>
                                        <a href="{{url('/product-management/edit')}}/{{$pdt->id}}">Edit</a> |
                                        <a href="{{url('/product-management/delete')}}/{{$pdt->id}}">Delete</a>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8"><h1>No Data Found</h1></td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection