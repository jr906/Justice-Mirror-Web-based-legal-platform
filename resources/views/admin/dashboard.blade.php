@extends('layouts.admin')

@section('content')
<div class="mb-8">
    <div class="mb-2 flex items-center gap-3">
        <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
            Admin Dashboard
        </span>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-slate-800">
        Admin Dashboard
    </h2>
    <p class="mt-2 text-base text-slate-500">
        Welcome to Justice Mirror Web-Based System
    </p>
</div>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
    <div class="xl:col-span-8">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Clients</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">120</h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 14a4 4 0 1 0-4-4 4 4 0 0 0 4 4ZM8 16a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm8 0c2.761 0 5 1.567 5 3.5V21H11v-1.5c0-1.933 2.239-3.5 5-3.5ZM8 17c-2.761 0-5 1.343-5 3V21h5" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Cases</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">85</h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h10" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Upcoming Hearings</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">14</h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 10h18M5 6h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-slate-500">Pending Appointments</p>
                        <h3 class="mt-4 text-5xl font-bold tracking-tight text-[#1d2b5b]">9</h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d4a94d]/15 text-[#b8892d]">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M4 11h16M5 5h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-800">Quick Summary</h3>
            <p class="mt-1 text-sm text-slate-500">
                Snapshot of administrative activity
            </p>

            <div class="mt-6 space-y-5">
                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Open Cases</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">42</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Today’s Hearings</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">3</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">New Documents</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">11</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection