<x-app-layout>
    <x-slot name="mainContent">
        <section class="w-4/6 mx-auto container p-20 shadow-2xl shadow-yellow-500">
            @if (session('message'))
                <div>
                    <script>
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: '{{ session('message') }}'
                        })
                    </script>
                </div>
            @endif

                    @if (session('error'))
                <div>
                    <script>
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: '{{ session('error') }}'
                        })
                    </script>
                </div>
            @endif
            <div>
                <h3 class="p-2 font-extrabold text-stone-600 text-2xl">Inbox</h3>
            </div>
            <table class="w-full border border-black">
                <tr class="border border-black divide-x-2 divide-yellow-300">
                    <th class="text-left p-3">s/n</th>
                    <th class="text-left p-3">Sender</th>
                    <th class="text-left p-3">Subject</th>
                    <th class="text-left p-3">Content</th>
                    <th class="text-left p-3">Action</th>
                </tr>
                @foreach ($msg as $msg)
                    
                <tr class="border border-black font-serif divide-x-2 divide-yellow-300">
                    <td class="p-3">{{ $msg->id }}</td>
                    <td class="p-3">{{ $msg->sender_name }}</td>
                    <td class="p-3">{{ $msg->subject }}</td>
                    <td class="p-3">{{ $msg->message }}</td>
                    <td class="p-3"><a href=""><span><i
                                    class="fa-solid fa-trash px-2 text-red-600 hover:text-2xl"></i></span></a><a
                            href=""><span><i
                                    class="fa-solid fa-eye text-blue-600 hover:text-2xl"></i></span></a><a
                            href=""><span><i
                                    class="fa-solid fa-box-archive px-2 text-green-500 hover:text-2xl"></i></span></a>
                    </td>
                </tr>
                                @endforeach

            </table>

        </section>
    </x-slot>
</x-app-layout>
