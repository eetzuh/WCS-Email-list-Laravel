<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action= "{{route('contacts.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="col-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="file">Add profile picture</label>
                                <input type="file" name="file" accept="image/png, image/jpeg" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-success">Add contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
