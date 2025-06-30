@extends('admin.maindesign')

@section('addfood')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 class="h3 mb-4 text-gray-900 text-center border rounded p-4 shadow-sm bg-white">Add Food</h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form container with border -->
            <div class="border rounded p-4 shadow-sm bg-white">
                <form action="{{ route('admin.addfood') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="food_name">Food Name</label>
                        <input type="text" class="form-control" id="food_name" name="food_name" required>
                    </div>

                    <div class="form-group">
                        <label for="food_description">Food Description</label>
                        <textarea class="form-control" id="food_description" name="food_description" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="food_price">Food Price</label>
                        <input type="number" class="form-control" id="food_price" name="food_price" step="0.01" required>
                    </div>

                    <div class="form-group">
                        <label for="food_image">Food Image</label>
                        <input type="file" class="form-control-file" id="food_image" name="food_image" accept="image/*" onchange="previewImage(event)" required>
                    </div>

                    <div class="form-group">
                        <img id="image_preview" src="#" alt="Image Preview" style="display:none; max-width: 100%; margin-top: 10px;" class="img-thumbnail">
                    </div>

                    <button type="submit" class="btn btn-success w-100">Add Food</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for image preview -->
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('image_preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>





@endsection
