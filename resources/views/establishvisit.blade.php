<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Establishment Visit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors />
                 

                    <form method="POST" action="{{ route('establishvisit') }}">
                        @method('POST')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-label for="establishment" :value="__('Establishment')" />
                                    <x-input id="establishment" class="block mt-1 w-full" type="text" name="establishment" :value="old('establishment')" autofocus /><br>
                                    <x-label for="HealthDeclaration" :value="__('Health Declaration')" />
                                    @foreach ($symp as $symps)
                                    <x-input id="sympy" class=" mt-1" type="Checkbox" name="symptoms[]" value="{{ $symps->symp }}" autofocus />
                                    <x-label2 for="sympy" value="{{ $symps->symp }}" /><br>
                                    @endforeach
                                </div>                   
                            </div>
                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-label for="temperature" :value="__('Temperature')" />
                                    <x-input id="temperature" class="block mt-1 w-full" type="text" name="temperature" :value="old('temperature')" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
