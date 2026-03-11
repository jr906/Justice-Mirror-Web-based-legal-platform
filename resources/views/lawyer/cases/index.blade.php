@extends('layouts.lawyer')

@section('content')
<div class="mb-8">
    <div class="mb-2 flex items-center gap-3">
        <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
            My Cases
        </span>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-slate-800">
        My Cases
    </h2>
    <p class="mt-2 text-base text-slate-500">
        View and monitor your assigned legal case files.
    </p>
</div>

<div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
    <div class="mb-6 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div class="relative w-full lg:max-w-md">
            <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" />
                </svg>
            </span>
            <input
                type="text"
                placeholder="Search by case title or client..."
                class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] py-3 pl-12 pr-4 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
            >
        </div>

        <div class="flex items-center gap-3 rounded-2xl bg-[#f8fafc] px-4 py-3 text-sm text-slate-500">
            <span class="font-medium">Assigned Cases</span>
            <span class="rounded-full bg-[#d4a94d]/15 px-3 py-1 font-semibold text-[#9c7421]">3</span>
        </div>
    </div>

    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Case Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Client</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Case Type</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Status</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Property Dispute Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Rahim Uddin</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Civil</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Open</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('admin.cases.show') }}" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Divorce Petition Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Nusrat Jahan</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Family</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">In Progress</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('admin.cases.show') }}" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">3</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Land Ownership Dispute</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Karim Ahmed</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Civil</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">Closed</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('admin.cases.show') }}" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection