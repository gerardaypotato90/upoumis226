<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exposure') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors />

                    <form method="POST" action="{{ route('exposurep') }}">
                        @method('POST')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-1 gap-6">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="relative px-6 py-3">
                                                This is to notify that....
                                            </th>
                                        </tr>
                                </thead>
</table>
                                <div>
                                    @foreach ($expo as $expos)

                                    <label class="switch">
                                    <x-input id="exp" class=" mt-1" type="Checkbox" name="exposures[]" value="{{ $expos->expostat }}" autofocus />
                                    <span class="slider"></span>
                                    </label>
                                    <x-label2 for="exp" value="{{ $expos->expostat }}" /><br><br>
                                    <hr><br>
                                    @endforeach
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
