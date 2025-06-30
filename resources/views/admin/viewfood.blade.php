@extends('admin.maindesign')

@section('viewfood')
<div class="container">
    <h2 class="text-center mb-4">Food List</h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price (BDT)</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->food_name }}</td>
                <td>{{ number_format($food->food_price, 2) }}</td>
                <td>{{ $food->food_description }}</td>
                <td>
                    @if($food->food_image)
                        <img src="{{ asset('food_images/' . $food->food_image) }}" alt="{{ $food->food_name }}" style="width: 100px; height: auto;" class="img-thumbnail">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.editfood', $food->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.deletefood', $food->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ route('admin.addfood') }}" class="btn btn-success">Add New Food</a>
    </div>
</div>

@endsection
