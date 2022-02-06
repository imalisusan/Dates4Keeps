<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Birthdays') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
            <!-- component -->
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div
                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                </div>
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-full">
                    <thead>
                        <tr class="th text-lg leading-5 text-gray-900">
                        <th class="th">Id</th>
                        <th class="th">Friend's Name</th>
                        <th class="th">Date of Birth</th>
                        <th class="th">Description</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                                
                    <body>
                    @foreach ($birthdays as $birthday)
                    <tr>
                    <td class="td text-sm leading-5 text-gray-900">
                        {{$birthday->id}}
                    </td>
                    <td class="td text-sm leading-5 text-gray-900">
                        {{$birthday->name}}
                    </td>
                    <td class="td text-sm leading-5 text-gray-900">
                        {{$birthday->date}}
                    </td>
                    <td class="td text-sm leading-5 text-gray-900">
                        {{$birthday->description}}
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                    </table>
                    
                    </body>
                    <div class="my-4 work-sans">
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>