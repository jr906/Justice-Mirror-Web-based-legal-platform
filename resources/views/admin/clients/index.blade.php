@extends('layouts.admin')

@section('content')
<div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-3">
            <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
                Client Management
            </span>
        </div>

        <h2 class="text-3xl font-bold tracking-tight text-slate-800">
            Client Management
        </h2>
        <p class="mt-2 text-base text-slate-500">
            Manage all law firm clients from this panel.
        </p>
    </div>

    <a href="{{ route('admin.clients.create') }}"
       class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#0f172a] via-[#16213e] to-[#1e293b] px-5 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl">
        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
        </svg>
        Add New Client
    </a>
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
                placeholder="Search client by name, phone or email..."
                class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] py-3 pl-12 pr-4 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
            >
        </div>

        <div class="flex items-center gap-3 rounded-2xl bg-[#f8fafc] px-4 py-3 text-sm text-slate-500">
            <span class="font-medium">Total Clients</span>
            <span class="rounded-full bg-[#d4a94d]/15 px-3 py-1 font-semibold text-[#9c7421]">5</span>
        </div>
    </div>

    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Client Name</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Phone</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Address</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-slate-800">Rahim Uddin</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">01712345678</td>
                    <td class="px-6 py-4 text-sm text-slate-600">rahim.uddin@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Sonadanga, Khulna, Bangladesh</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#"
                               class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">
                                View
                            </a>
                            <a href="#"
                               class="rounded-xl bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-400">
                                Edit
                            </a>
                            <a href="#"
                               class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-slate-800">Amina Khatun</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">01823456789</td>
                    <td class="px-6 py-4 text-sm text-slate-600">amina.khatun@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Dhanmondi, Dhaka, Bangladesh</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#"
                               class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">
                                View
                            </a>
                            <a href="#"
                               class="rounded-xl bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-400">
                                Edit
                            </a>
                            <a href="#"
                               class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">3</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-slate-800">Sabbir Hasan</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">01934567890</td>
                    <td class="px-6 py-4 text-sm text-slate-600">sabbir.hasan@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Jessore Sadar, Jessore, Bangladesh</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#"
                               class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">
                                View
                            </a>
                            <a href="#"
                               class="rounded-xl bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-400">
                                Edit
                            </a>
                            <a href="#"
                               class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">4</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-slate-800">Nusrat Jahan</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">01645678901</td>
                    <td class="px-6 py-4 text-sm text-slate-600">nusrat.jahan@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Barisal Sadar, Barisal, Bangladesh</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#"
                               class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">
                                View
                            </a>
                            <a href="#"
                               class="rounded-xl bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-400">
                                Edit
                            </a>
                            <a href="#"
                               class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">5</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-slate-800">Karim Ahmed</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">01556789012</td>
                    <td class="px-6 py-4 text-sm text-slate-600">karim.ahmed@gmail.com</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Agrabad, Chattogram, Bangladesh</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#"
                               class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">
                                View
                            </a>
                            <a href="#"
                               class="rounded-xl bg-amber-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-400">
                                Edit
                            </a>
                            <a href="#"
                               class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection