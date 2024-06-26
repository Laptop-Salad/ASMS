<div class="bg-off-white text-pine min-h-screen">
    <x-navigation.navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">{{ $school->name }} Reports</h1>

        <x-school.menu active="reports" :$school />

        <div class="relative overflow-x-auto rounded-t-md">
            <table class="table-fixed w-full">
                <thead class="bg-pine text-white">
                <th class="text-start p-2">Name</th>
                <th class="text-start p-2">Created At</th>
                <th class="p-2"></th>
                </thead>
                <tbody>
                @foreach($this->reports as $report)
                    <tr class="border-b-2 border-pine/50">
                        <td class="p-2 font-semibold">
                            <a
                                class="text-blue-500 hover:underline"
                                href="{{route('school.report', [$this->school, $report])}}">
                                {{$report->name}}
                            </a>
                        </td>
                        <td class="p-2 font-semibold">{{ isset($report->created_at) ? $report->created_at->toDateString() : '' }}</td>
                        <td>
                            <x-btn wire:confirm="Are you sure you want to delete this report?" wire:click="deleteReport({{$report->id}})">
                                <i class="fa-solid fa-trash me-2"></i>
                                Delete
                            </x-btn>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{$this->reports->links()}}
            </div>
        </div>
    </div>
</div>
