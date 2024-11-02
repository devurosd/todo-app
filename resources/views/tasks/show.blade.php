<x-layout>
    <x-slot:heading>
        Task
    </x-slot:heading>

    <h2 class="font-bold text-lg text-white">{{ $task->title }}</h2>
    
    <p class="text-white">
        {{ $task->description }}
    </p>

    <br/>

    <div class="text-white flex justify-start">
        <p><i>Created:</i> {{ $task->created_at }} | <i>Updated:</i> {{ $task->updated_at }}</p>
    </div>
    
    
    <p class="mt-6">
        <x-button href="/tasks/{{ $task->id }}/edit">Edit Task</x-button>
    </p>
    
</x-layout>