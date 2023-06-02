<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('contacts.create')}}" method="get">
                        <button class="btn btn-success">Add new contact</button>
                    </form>
                    @if($contacts->count()==0)
                        <p>No contacts found!</p>
                    @else
                   <table>
                    <thead>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <p>{{$contact->image_path}}</p>
                            <td><img src='{{asset($contact->image_path)}}'></td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
