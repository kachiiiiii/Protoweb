<x-app-layout>
    <x-slot name="mainContent">
        <section class="w-4/6 mx-auto">
            <div class="grid grid-cols-3 gap-7 container p-32 shadow-2xl shadow-yellow-500">
                <div class="px-8 py-10 bg-violet-900 rounded-md font-semibold text">
                    <a href="">
                        <div>
                            <div class="text-yellow-100 text-center text-xl hover:text-3xl"><i
                                    class="fa-solid fa-inbox"></i>
                                Inbox
                            </div>
                            <div class="text-slate-400  text-center hover:text-4xl">
                                3
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-8 py-10 bg-violet-900 rounded-md font-semibold text">
                    <a href="">
                        <div>
                            <div class="text-yellow-100 text-center text-xl hover:text-3xl"><i
                                    class="fa-solid fa-envelope-circle-check"></i>
                                Sent
                            </div>
                            <div class="text-slate-400  text-center hover:text-4xl">
                                3
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-8 py-10 bg-violet-900 rounded-md font-semibold text">
                    <a href="">
                        <div>
                            <div class="text-yellow-100 text-center text-xl hover:text-3xl"><i
                                    class="fa-brands fa-firstdraft"></i>
                                Draft
                            </div>
                            <div class="text-slate-400  text-center hover:text-4xl">
                                3
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-8 py-10 bg-violet-900 rounded-md">
                    <a href="">
                        <div>
                            <div class="text-yellow-100 text-center text-xl hover:text-3xl"><i
                                    class="fa-solid fa-folder-open"></i>
                                Archive
                            </div>
                            <div class="text-slate-400  text-center hover:text-4xl">
                                3
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-8 py-10 bg-violet-900 rounded-md font-semibold text">
                    <a href="">
                        <div>
                            <div class="text-yellow-100 text-center text-xl hover:text-3xl"><i
                                    class="fa-solid fa-trash"></i>
                                Trash
                            </div>
                            <div class="text-slate-400  text-center hover:text-4xl">
                                3
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </x-slot>
</x-app-layout>
