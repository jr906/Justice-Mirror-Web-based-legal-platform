@extends('layouts.admin')

@section('content')
<div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-3">
            <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
                Appointment Management
            </span>
        </div>

        <h2 class="text-3xl font-bold tracking-tight text-slate-800">
            Appointment Management
        </h2>
        <p class="mt-2 text-base text-slate-500">
            Manage consultation requests, meeting schedules, and appointment updates.
        </p>
    </div>
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
                placeholder="Search by client, lawyer or date..."
                class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] py-3 pl-12 pr-4 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
            >
        </div>

        <div class="flex items-center gap-3 rounded-2xl bg-[#f8fafc] px-4 py-3 text-sm text-slate-500">
            <span class="font-medium">Total Appointments</span>
            <span class="rounded-full bg-[#d4a94d]/15 px-3 py-1 font-semibold text-[#9c7421]">5</span>
        </div>
    </div>

    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Client</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Lawyer</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Requested At</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Appointment Date</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Note</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Rahim Uddin</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Hasan Ali</td>
                    <td class="px-6 py-4 text-sm text-slate-600">11 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">15 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Discuss property documents</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">Approve</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Reject</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Amina Khatun</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4 text-sm text-slate-600">12 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">16 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Approved</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Family case consultation</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">View</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">3</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Sabbir Hasan</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Mehedi Rahman</td>
                    <td class="px-6 py-4 text-sm text-slate-600">13 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">17 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">Rejected</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Urgent criminal complaint issue</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">View</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">4</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Nusrat Jahan</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Hasan Ali</td>
                    <td class="px-6 py-4 text-sm text-slate-600">14 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">18 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Approved</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Discuss divorce petition status</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">View</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">5</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Karim Ahmed</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4 text-sm text-slate-600">15 Mar 2026</td>
                    <td class="px-6 py-4 text-sm text-slate-600">20 Mar 2026</td>
                    <td class="px-6 py-4">
                        <span class="rounded-full bg-slate-200 px-3 py-1 text-xs font-semibold text-slate-700">Completed</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Land ownership follow-up</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">View</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection