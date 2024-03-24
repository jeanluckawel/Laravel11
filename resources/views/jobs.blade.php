<x-layout>
    <x-slot:haddings>
        Job Listings
    </x-slot:haddings>
    <ul>
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="text-blue-500">
                <li> <strong>{{ $job['title'] }}</strong> :  Pays {{ $job['salary'] }} per Year.</li>
            </a>
        @endforeach
    </ul>
</x-layout>
