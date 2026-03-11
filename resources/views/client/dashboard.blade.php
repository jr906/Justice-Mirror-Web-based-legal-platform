@extends('layouts.client')

@section('content')
<div class="mb-8">
    <div class="mb-2 flex items-center gap-3">
        <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
            Client Dashboard
        </span>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-slate-800">
        Client Dashboard
    </h2>
    <p class="mt-2 text-base text-slate-500">
        Track your legal cases, hearing status, and appointments.
    </p>
</div>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
    <div class="xl:col-span-8">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div>
                    <p class="text-sm font-medium text-slate-500">My Cases</p>
                    <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">3</h3>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div>
                    <p class="text-sm font-medium text-slate-500">Upcoming Hearings</p>
                    <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">2</h3>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                <div>
                    <p class="text-sm font-medium text-slate-500">Appointments</p>
                    <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">2</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-800">Quick Summary</h3>
            <p class="mt-1 text-sm text-slate-500">Personal legal activity snapshot</p>

            <div class="mt-6 space-y-5">
                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Active Cases</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">2</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Pending Requests</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">1</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Next Meeting</p>
                    <p class="mt-2 text-lg font-semibold text-[#1d2b5b]">15 Mar 2026</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
    <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-slate-800">My Active Cases</h3>
        <p class="mt-1 text-sm text-slate-500">Current ongoing legal matters</p>

        <div class="mt-5 space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">Property Dispute Case</p>
                <p class="mt-1 text-sm text-slate-600">Status: Open</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">Land Ownership Dispute</p>
                <p class="mt-1 text-sm text-slate-600">Status: In Progress</p>
            </div>
        </div>
    </div>

    <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-slate-800">Recent Appointments</h3>
        <p class="mt-1 text-sm text-slate-500">Latest consultation schedule</p>

        <div class="mt-5 space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">15 March 2026</p>
                <p class="mt-1 text-sm text-slate-600">Appointment with Adv. Hasan Ali</p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                <p class="font-semibold text-slate-800">20 March 2026</p>
                <p class="mt-1 text-sm text-slate-600">Appointment with Adv. Rafiq Islam</p>
            </div>
        </div>
    </div>
</div>
@endsection