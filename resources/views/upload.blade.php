@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <form method="POST" action="store" enctype="multipart/form-data">
        @csrf
        Upload your own photo <br>

        <label for="dog-name">Your dogs name</label>
        <input type="text" class="entry-text" name="name" required>
        <input type="file" name="image" id="image" required>
        <br>
        <button type="submit" class="ml-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
    </form>
</div>

@endsection
