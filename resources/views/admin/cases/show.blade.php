@extends('layouts.admin')

@section('content')
<div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-3">
            <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
                Case Details
            </span>
        </div>

        <h2 class="text-3xl font-bold tracking-tight text-slate-800">
            Case Details
        </h2>
        <p class="mt-2 text-base text-slate-500">
            Detailed overview of the selected legal case file.
        </p>
    </div>

    <a href="{{ route('admin.cases.index') }}"
       class="inline-flex items-center justify-center rounded-2xl bg-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-300">
        Back to Cases
    </a>
</div>

<div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
    <div class="xl:col-span-8">
        <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-slate-800">Property Dispute Case</h3>
                    <p class="mt-2 text-sm text-slate-500">Case Type: Civil</p>
                </div>

                <span class="inline-flex rounded-full bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-700">
                    Open
                </span>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Client Name</p>
                    <p class="mt-2 text-base font-semibold text-slate-800">Rahim Uddin</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Assigned Lawyer</p>
                    <p class="mt-2 text-base font-semibold text-slate-800">Adv. Hasan Ali</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Case Filed Date</p>
                    <p class="mt-2 text-base font-semibold text-slate-800">10 March 2026</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Case Number</p>
                    <p class="mt-2 text-base font-semibold text-slate-800">JM-CIV-001</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="mb-3 text-sm font-semibold text-slate-700">Case Description</p>
                <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-5 text-sm leading-7 text-slate-600">
                    This case concerns a property ownership dispute between family members over inherited land.
                    The matter is currently active and under legal review. Relevant documents and hearing records
                    are maintained in this system for internal case tracking.
                </div>
            </div>
        </div>

        <div class="mt-6 rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <div class="mb-5 flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-slate-800">Recent Hearing Updates</h3>
                    <p class="mt-1 text-sm text-slate-500">Latest hearing notes connected to this case.</p>
                </div>

                <a href="{{ route('admin.hearings.index') }}"
                   class="text-sm font-semibold text-[#1d2b5b] transition hover:text-[#9c7421]">
                    View All Hearings
                </a>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                    <p class="font-semibold text-slate-800">15 March 2026</p>
                    <p class="mt-2 text-sm text-slate-600">Initial hearing completed. Documents requested by court.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                    <p class="font-semibold text-slate-800">22 March 2026</p>
                    <p class="mt-2 text-sm text-slate-600">Opposing party submitted written statement.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-[#f8fafc] p-4">
                    <p class="font-semibold text-slate-800">30 March 2026</p>
                    <p class="mt-2 text-sm text-slate-600">Next hearing scheduled for evidence review.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-800">Quick Actions</h3>
            <p class="mt-1 text-sm text-slate-500">Shortcuts for case handling.</p>

            <div class="mt-6 space-y-3">
                <a href="{{ route('admin.hearings.create') }}"
                   class="inline-flex w-full items-center justify-center rounded-2xl bg-gradient-to-r from-[#0f172a] via-[#16213e] to-[#1e293b] px-4 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl">
                    Add Hearing
                </a>

                <a href="#"
                   class="inline-flex w-full items-center justify-center rounded-2xl bg-amber-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-amber-400">
                    Edit Case
                </a>

                <a href="#"
                   class="inline-flex w-full items-center justify-center rounded-2xl bg-emerald-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-emerald-500">
                    View Documents
                </a>
            </div>
        </div>

        <div class="mt-6 rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-800">Case Summary</h3>
            <p class="mt-1 text-sm text-slate-500">Current file overview.</p>

            <div class="mt-6 space-y-4">
                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Total Hearings</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">3</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Uploaded Documents</p>
                    <p class="mt-2 text-2xl font-bold text-[#1d2b5b]">5</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-4">
                    <p class="text-xs uppercase tracking-[0.15em] text-slate-400">Current Status</p>
                    <p class="mt-2 text-lg font-semibold text-emerald-700">Open</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection