<x-layout>
    <x-slot:heading>
        Create Task
    </x-slot:heading>

    <form method="POST" action="/tasks">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Create a New Task</h2>
                

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Dishes" />

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="description">Description</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="description" id="description" placeholder="Use sponge and soap to wash the plates" />

                            <x-form-error name="description" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/tasks" class="text-sm font-semibold leading-6 text-white">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>