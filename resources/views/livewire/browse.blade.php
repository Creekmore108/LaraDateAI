<div>

    <ul role="list" class="grid mt-4 grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

        @foreach ($results as $result)
            <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    {{-- <a href="{{ route('user-info', ['userId' => $userId]) }}" --}}
                    {{ $result->id }}
                    <a href="{{ route('user-profile',['userId' => $result->id]) }}">
                        <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="images/female07.jpg" alt="">
                    </a>
                    <h3 class="mt-6 text-sm font-medium text-gray-900">{{ $result->name }}</h3>
                    <dl class="mt-1 mb-4 flex flex-grow flex-col justify-between">
                        <dd class="text-sm text-gray-500">{{ $result->city }}, {{ $result->state }}</dt>
                        <dd class="text-sm text-gray-500">Height: {{ $result->height }}</dd>
                        <dd class="text-sm text-gray-500">Status: {{ $result->marital_status }}</dd>
                        <dd class="text-sm text-gray-500">Activity: {{ $result->energy_level }}</dd>
                    </dl>
                </div>
            </li>
        @endforeach
    </ul>

</div>
