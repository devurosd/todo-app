<x-layout>
    <x-slot:heading>
        Tasks listing
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($tasks as $task)
            <a href="/tasks/{{ $task['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg transition delay-50 hover:bg-lime-500">
                
                <div class="font-semibold text-white">
                    <strong><u>{{ $task['title'] }}</u></strong><br/>{{ $task['description'] }}
                </div>
                <div class="text-white flex justify-end">
                    {{ $task['created_at'] }}
                </div>
                
            </a>
        @endforeach

        <div>
            {{ $tasks->links() }}
        </div>
    </div>
</x-layout>