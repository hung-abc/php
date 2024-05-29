@extends('layout.master')
@section('Content')
<form method="get" action="{{route('admin.product.getProductsByBand')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Select Band</h1> 
    <div class="mb-3">
            <label for="" class="form-label">Select Band</label>
            <select
                class="form-select form-select-lg"
                name="SelectBand"
                id=""
            >
                <option value="CAVALIER">CAVALIER</option>
                <option value="ALPRAZOLAM">ALPRAZOLAM</option>
                <option value="Acetaminophen">Acetaminophen</option>
                <option value="ibuprofen">ibuprofen</option>
            </select>
        </div>
        
        <button
            type="submit"
            class="btn btn-primary"
            name ="btSearch"
        >
            Submit
        </button>
</form>
<table>
    <tbody>
        <thead>
            <tr>    
                <th Class=\"text-center\">PID</th>
                <th Class=\"text-center\">Name</th>
                <th Class=\"text-center\">Company</th>
                <th Class=\"text-center\">Year</th>
                <th Class=\"text-center\">Band</th>
                <th Class=\"text-center\">Image</th>
                <th Class=\"text-center\">Edit</th>
                <th Class=\"text-center\">Delete</th>
            </tr>
        </thead>
    </tbody>
</table>
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
                <td class=\"text-left\"><img src="{{$product->pimage}}" alt = "Image"></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteProduct/{{$product->pid}}">Delete</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateProduct/{{$product->pid}}">Edit</a></td>
        </tr>
        </thead>
    </table>
</div>
@endforeach
@endsection