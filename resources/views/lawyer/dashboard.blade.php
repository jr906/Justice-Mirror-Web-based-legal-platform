@extends('layouts.lawyer')

@section('content')
<div class="mb-8">
    <div class="mb-2 flex items-center gap-3">
        <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
            Lawyer Dashboard
        </span>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-slate-800">
        Lawyer Dashboard
    </h2>
    <p class="mt-2 text-base text-slate-500">
        Overview of assigned cases, hearings, and legal activity.
    </p>
</div>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
    <div class="xl:col-span-8">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Assigned Cases</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">12</h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h10" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Upcoming Hearings</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">4</h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 10h18M5 6h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Pending Appointments</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">3</h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M4 11h16M5 5h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Uploaded Documents</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">18</h3>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l5 5v13a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-800">Quick Summary</h3>
            <p class="mt-1 text-sm text-slate-500">Lawyer activity snapshot</p>

            <div class="mt-6 space-y-5">
                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Active Cases</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">8</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">This Week Hearings</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">2</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Consultation Requests</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">3</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
    <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-slate-800">Recent Assigned Cases</h3>
        <p class="mt-1 text-sm text-slate-500">Latest legal files under your responsibility</p>

        <div class="mt-5 space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">Property Dispute Case</p>
                <p class="mt-1 text-sm text-slate-600">Client: Rahim Uddin</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">Family Settlement Case</p>
                <p class="mt-1 text-sm text-slate-600">Client: Amina Khatun</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">Divorce Petition Case</p>
                <p class="mt-1 text-sm text-slate-600">Client: Nusrat Jahan</p>
            </div>
        </div>
    </div>

    <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-slate-800">Upcoming Hearings</h3>
        <p class="mt-1 text-sm text-slate-500">Scheduled hearing timeline</p>

        <div class="mt-5 space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">15 March 2026</p>
                <p class="mt-1 text-sm text-slate-600">Property Dispute Case</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">18 March 2026</p>
                <p class="mt-1 text-sm text-slate-600">Family Settlement Case</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">24 March 2026</p>
                <p class="mt-1 text-sm text-slate-600">Divorce Petition Case</p>
            </div>
        </div>
    </div>
</div>
@endsection