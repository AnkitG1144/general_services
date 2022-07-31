<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="m-2"><u>Create New Category</u></h4>
                    <form action="{{ route('addCategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group m-2">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Name">
                        </div>
                        <div class="form-group m-2">
                            <label for="categoryImage">Category Image</label>
                            <input type="file" class="form-control" id="categoryImage" name="categoryImage">
                        </div>

                        <button type="submit" class="btn btn-primary m-2">Add New</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadw-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="m-2"><u>All Category</u></h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key => $c)
                                <tr>
                                    <th scope="row">{{ $key +1 }}</th>
                                    <td>{{ $c->name }}</td>
                                    <td><img src="{{ asset('storage/products/'.$c->image) }}" style="height: 100px; width: 150px;"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>