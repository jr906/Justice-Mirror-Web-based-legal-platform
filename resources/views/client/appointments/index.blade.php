@extends('layouts.client')

@section('content')
<div class="mb-8">
    <div class="mb-2 flex items-center gap-3">
        <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
            My Appointments
        </span>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-slate-800">
        My Appointments
    </h2>
    <p class="mt-2 text-base text-slate-500">
        Track your appointment requests and scheduled consultations.
    </p>
</div>

<div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Lawyer</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Requested At</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Appointment Date</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Note</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Adv. Hasan Ali</td>
                    <td class="px-6 py-4 text-sm text-slate-600">11 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">15 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Approved</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Property case discussion</td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4 text-sm text-slate-600">14 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">20 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Land ownership issue</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection