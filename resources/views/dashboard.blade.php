<x-app-layout>
    @section('title', __('Dashboard'))
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-primary leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="text-xs breadcrumbs">
            <ul>
                <li>
                    <a>
                        <x-tabler-home class="pr-2" /> /
                    </a>
                </li>
                <li>
                    <x-tabler-dashboard class="pr-2" />  Dashboard
                </li>
            </ul>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-neutral overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-neutral">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
