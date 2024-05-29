@extends('layout.master')
@section('Content')

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th Class=\"text-center\">PID</th>
                <th Class=\"text-center\">Name</th>
                <th Class=\"text-center\">Company</th>
                <th Class=\"text-center\">Year</th>
                <th Class=\"text-center\">Band</th>
                <th Class=\"text-center\">Pimange</th>
                <th Class=\"text-center\">Edit</th>
                <th Class=\"text-center\">Delete</th>
            </tr>
            </thead>
    </table>
</div>
@foreach($products as $product)
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
        <tr>
                <td class=\"text-left\">{{$product->pid}}</td>
                <td class=\"text-left\">{{$product->pname}}</td>
                <td class=\"text-left\">{{$product->company}}</td>
                <td class=\"text-left\">{{$product->year}}</td>
                <td class=\"text-left\">{{$product->band}}</td>
                <td class=\"text-left\"><img src="{{$product->pimage}}" alt = "Image">' . </td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="admin/product/deleteProduct">Delete</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="admin/product/updateProduct/{{$product->pid}}">Edit</a></td>
        </tr>
        </thead>
    </table>
</div>
@endforeach
@endsection