<x-layout>
    <x-slot:haddings>
        Job Listings
    </x-slot:haddings>
    <ul>
        @foreach($jobs as $job)
            <li> <strong>{{ $job['title'] }}</strong> :  Pays {{ $job['salary'] }} per Year.</li>
        @endforeach
    </ul>
</x-layout>
