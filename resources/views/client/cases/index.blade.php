@extends('layouts.client')

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
        View the status of your submitted legal cases.
    </p>
</div>

<div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Case Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Case Type</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Assigned Lawyer</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Status</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Property Dispute Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Civil</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Hasan Ali</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Open</span>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Land Ownership Dispute</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Civil</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">In Progress</span>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">3</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Family Settlement Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Family</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">Closed</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection