<aside class="w-[280px] bg-gradient-to-b from-[#111827] via-[#17233b] to-[#1e2b45] text-white">
    <div class="flex h-full flex-col">
        <div class="border-b border-white/10 px-6 py-7">
            <div class="flex items-center gap-4">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#d4a94d]/40 bg-[#0f172a] text-[#d4a94d] shadow-lg">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M5 7l7-4 7 4M6 7v4m12-4v4M4 11h16M7 11l-3 8m13-8 3 8M9 19h6" />
                    </svg>
                </div>

                <div>
                    <h2 class="text-[15px] font-semibold uppercase tracking-[0.2em] text-[#d4a94d]">
                        Justice Mirror
                    </h2>
                    <p class="mt-1 text-xs text-slate-300">
                        Lawyer Workspace
                    </p>
                </div>
            </div>
        </div>

        <div class="px-4 py-6">
            <p class="mb-4 px-3 text-[11px] font-semibold uppercase tracking-[0.25em] text-slate-400">
                Navigation
            </p>

            <ul class="space-y-2">
                <li>
                    <a href="{{ route('lawyer.dashboard') }}"
                       class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-white transition hover:bg-white/10">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#d4a94d] text-[#16213e] shadow">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 3l9 7.5M5.25 9.75V21h13.5V9.75" />
                            </svg>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lawyer.cases.index') }}"
                       class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10 hover:text-white">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-[#d4a94d]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h10" />
                            </svg>
                        </span>
                        <span>My Cases</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.hearings.index') }}"
                       class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10 hover:text-white">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-[#d4a94d]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 10h18M5 6h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z" />
                            </svg>
                        </span>
                        <span>Hearings</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.appointments.index') }}"
                       class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-200 transition hover:bg-white/10 hover:text-white">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-[#d4a94d]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M4 11h16M5 5h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" />
                            </svg>
                        </span>
                        <span>Appointments</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-auto px-5 pb-6">
            <div class="rounded-2xl border border-[#d4a94d]/20 bg-white/5 p-4">
                <p class="text-xs uppercase tracking-[0.2em] text-[#d4a94d]">Lawyer Panel</p>
                <p class="mt-2 text-sm text-slate-300">
                    Review assigned cases, hearings, and consultation activity with a premium legal workflow.
                </p>
            </div>
        </div>
    </div>
</aside>