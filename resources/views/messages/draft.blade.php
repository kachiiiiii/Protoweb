<x-app-layout>
    <x-slot name="mainContent">
        <section class="w-4/6 mx-auto container p-20 shadow-2xl shadow-yellow-500">
            <div>
                <h3 class="p-2 font-extrabold text-stone-600 text-2xl">Draft</h3>
            </div>
            <table class="w-full border border-black">
                <tr class="border border-black">
                    <th class="text-left p-3">s/n</th>
                    <th class="text-left p-3">Sender</th>
                    <th class="text-left p-3">Subject</th>
                    <th class="text-left p-3">Content</th>
                    <th class="text-left p-3">Action</th>
                </tr>
                <tr class="border border-black font-serif">
                    <td class="p-3">1</td>
                    <td class="p-3">2</td>
                    <td class="p-3">3</td>
                    <td class="p-3">4</td>
                    <td class="p-3"><a href=""><span><i
                                    class="fa-solid fa-trash px-2 text-red-600 hover:text-2xl"></i></span></a><a
                            href=""><span><i class="fa-solid fa-eye text-blue-600 hover:text-2xl"></i></span></a><a
                            href=""><span><i
                                    class="fa-solid fa-box-archive px-2 text-green-500 hover:text-2xl"></i></span></a><span><a
                                href=""><i class="fa-solid fa-pen-to-square text-orange-500 hover:text-2xl"></i></a></span></td>
                </tr>
            </table>
        </section>
    </x-slot>
</x-app-layout>
