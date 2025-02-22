<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Category') }}
        </h2>
    </x-slot>


    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">

            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="my-3">
                    <button type="button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah Category</a>
                    </button>
                </div>
                <div class="overflow-hidden">
                    <table class="table table-bordered w-full">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs border border-gray-400 font-medium text-gray-700 uppercase">No</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs border border-gray-400 font-medium text-gray-700 uppercase">Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs border border-gray-400 font-medium text-gray-700 uppercase">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-center border-b border-gray-400 whitespace-nowrap text-sm text-gray-800">
                                        {{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 text-center border-b border-gray-400 whitespace-nowrap text-sm text-gray-800">
                                        {{ $category->name }}</td>
                                    <td class="px-6 py-4 text-center border-b border-gray-400 whitespace-nowrap text-sm text-gray-800">
                                        <div class="flex justify-center gap-5">
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                  </svg>

                                                  </a>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underlin"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                  </svg>
                                                  </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-6">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
