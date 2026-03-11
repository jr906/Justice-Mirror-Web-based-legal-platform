@extends('layouts.admin')

@section('content')
<div class="mx-auto max-w-5xl">
    <div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <div class="mb-2 flex items-center gap-3">
                <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
                    Add Client
                </span>
            </div>

            <h2 class="text-3xl font-bold tracking-tight text-slate-800">
                Add New Client
            </h2>
            <p class="mt-2 text-base text-slate-500">
                Enter client information into the legal management system.
            </p>
        </div>

        <a href="{{ route('admin.clients.index') }}"
           class="inline-flex items-center justify-center rounded-2xl bg-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-300">
            Back to Clients
        </a>
    </div>

    <div class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm md:p-8">
        <form class="space-y-8">
            <div>
                <h3 class="text-lg font-semibold text-slate-800">Client Information</h3>
                <p class="mt-1 text-sm text-slate-500">
                    Provide basic details for the client profile.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Client Name</label>
                    <input
                        type="text"
                        placeholder="Enter client full name"
                        class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
                    >
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Phone Number</label>
                    <input
                        type="text"
                        placeholder="Enter phone number"
                        class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
                    >
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Email Address</label>
                    <input
                        type="email"
                        placeholder="Enter email address"
                        class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
                    >
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Address</label>
                    <input
                        type="text"
                        placeholder="Enter client address"
                        class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
                    >
                </div>
            </div>

            <div class="rounded-2xl border border-dashed border-[#d4a94d]/40 bg-[#fffaf1] p-4">
                <p class="text-sm text-[#8a6925]">
                    This form is currently part of the frontend phase. Save functionality will be connected in the backend phase.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3 pt-2">
                <button
                    type="button"
                    class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#0f172a] via-[#16213e] to-[#1e293b] px-6 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl"
                >
                    Save Client
                </button>

                <a
                    href="{{ route('admin.clients.index') }}"
                    class="inline-flex items-center justify-center rounded-2xl bg-slate-200 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-300"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection