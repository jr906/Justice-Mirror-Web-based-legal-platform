@extends('layouts.admin')

@section('content')
<div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-3">
            <span class="inline-flex rounded-full bg-[#d4a94d]/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#9c7421]">
                Document Management
            </span>
        </div>

        <h2 class="text-3xl font-bold tracking-tight text-slate-800">
            Document Management
        </h2>
        <p class="mt-2 text-base text-slate-500">
            Organize uploaded legal files, case attachments, and document access.
        </p>
    </div>

    <a href="{{ route('admin.documents.create') }}"
       class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-[#0f172a] via-[#16213e] to-[#1e293b] px-5 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:shadow-xl">
        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
        </svg>
        Upload Document
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
                placeholder="Search by case title or file name..."
                class="w-full rounded-2xl border border-slate-200 bg-[#f8fafc] py-3 pl-12 pr-4 text-sm text-slate-700 outline-none transition focus:border-[#d4a94d] focus:ring-2 focus:ring-[#d4a94d]/20"
            >
        </div>

        <div class="flex items-center gap-3 rounded-2xl bg-[#f8fafc] px-4 py-3 text-sm text-slate-500">
            <span class="font-medium">Total Documents</span>
            <span class="rounded-full bg-[#d4a94d]/15 px-3 py-1 font-semibold text-[#9c7421]">5</span>
        </div>
    </div>

    <div class="overflow-x-auto rounded-2xl border border-slate-200">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-[#f8fafc]">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Case Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">File Name</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">File Type</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Uploaded By</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Upload Date</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">1</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Property Dispute Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">land_deed_copy.pdf</td>
                    <td class="px-6 py-4 text-sm text-slate-600">PDF</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Hasan Ali</td>
                    <td class="px-6 py-4 text-sm text-slate-600">11 Mar 2026</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">Download</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Delete</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">2</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Family Settlement Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">family_agreement.docx</td>
                    <td class="px-6 py-4 text-sm text-slate-600">DOCX</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4 text-sm text-slate-600">12 Mar 2026</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">Download</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Delete</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">3</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Theft Complaint Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">complaint_statement.pdf</td>
                    <td class="px-6 py-4 text-sm text-slate-600">PDF</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Mehedi Rahman</td>
                    <td class="px-6 py-4 text-sm text-slate-600">13 Mar 2026</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">Download</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Delete</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">4</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Divorce Petition Case</td>
                    <td class="px-6 py-4 text-sm text-slate-600">petition_draft.docx</td>
                    <td class="px-6 py-4 text-sm text-slate-600">DOCX</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Hasan Ali</td>
                    <td class="px-6 py-4 text-sm text-slate-600">14 Mar 2026</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">Download</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Delete</a>
                        </div>
                    </td>
                </tr>

                <tr class="transition hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm font-medium text-slate-700">5</td>
                    <td class="px-6 py-4 font-semibold text-slate-800">Land Ownership Dispute</td>
                    <td class="px-6 py-4 text-sm text-slate-600">survey_report.pdf</td>
                    <td class="px-6 py-4 text-sm text-slate-600">PDF</td>
                    <td class="px-6 py-4 text-sm text-slate-600">Adv. Rafiq Islam</td>
                    <td class="px-6 py-4 text-sm text-slate-600">15 Mar 2026</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="#" class="rounded-xl bg-emerald-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-emerald-500">View</a>
                            <a href="#" class="rounded-xl bg-sky-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-500">Download</a>
                            <a href="#" class="rounded-xl bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection