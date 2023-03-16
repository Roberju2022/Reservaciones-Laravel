<x-app-layout>
    <x-slot name="headers">
        <style>
		[x-cloak] {
			display: none;
		}
	</style>

    </x-slot>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi agenda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                   <div class="flex bg-gray-300">

                    <div class="w-1/3">
                        <x-calender></x-calender>
                    </div>
                    <div class="w-2/3">
                        Mis citas aca: {{$date->isoformat('dddd D MMMM YYYY')}}


                        @foreach ($dayScheduler as $schedule)

                        <div class="flex items-center mt-2 bg-indigo-100 p-3 rounded">
                                    <div class="w-1/2">
                                        <div>{{ $schedule->service->name }} con {{ $schedule->staffUser->name }}</div>
                                        <div>Desde <span class="font-bold">{{ $schedule->from->format('h:s') }}</span> hasta <span class="font-bold">{{ $schedule->to->format('h:s')}}</span></div>
                                    </div>
                        </div>

                   @endforeach




                    </div>


                   </div>









                </div>
            </div>
        </div>
    </div>
</x-app-layout>
