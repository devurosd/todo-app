<x-layout>
    <x-slot:heading>
        Edit Task: {{ $task->title }}
    </x-slot:heading>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-lime-500 sm:max-w-md">
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-white/80 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder=""
                                    value="{{ $task->title }}"
                                    required>
                            </div>

                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="description" class="block text-sm font-medium leading-6 text-white">Description</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-lime-500 sm:max-w-md"
                            >
                                <input
                                    type="text"
                                    name="description"
                                    id="description"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-white/80 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder=""
                                    value="{{ $task->description }}"
                                    required>
                            </div>

                            @error('description')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="rounded-md px-3 py-2 text-red-500 text-sm font-bold transition hover:bg-red-500 hover:text-white">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/tasks/{{ $task->id }}" class="text-sm font-semibold leading-6 text-white">Cancel</a>

                <div>
                    <button type="submit"
                            class="rounded-md bg-lime-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="/tasks/{{ $task->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>