<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h4 class="m-2"><u>Create New Services</u></h4>
                    <form action="{{ route('addService') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group m-2">
                            <label for="serviceName">Service Man Name</label>
                            <input type="text" class="form-control" id="serviceName" name="serviceName" placeholder="Name of service Man">
                        </div>
                        <div class="form-group m-2">
                            <label for="serviceManContact">Service Man Contact</label>
                            <input type="number" class="form-control" id="serviceManContact" name="serviceManContact" placeholder="Contact no of service Man">
                        </div>
                        <div class="form-group m-2">
                            <label for="serviceManCategory">Category</label>
                            <select class="custom-select form-control" name="caterogy_no">
                                <option selected disabled>Please select category</option>
                                @foreach($allCategories as $ac)
                                    <option value="{{ $ac->id }}">{{ $ac->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary m-2">Add new</button>
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
                                <th scope="col">Contact no</th>
                                <th scope="col">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $key => $c)
                                <tr>
                                    <th scope="row">{{ $key +1 }}</th>
                                    <td>{{ $c->service_man_name }}</td>
                                    <td>{{ $c->contact_no }}</td>
                                    <td>{{ $c->category_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>