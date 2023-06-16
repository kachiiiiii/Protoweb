<x-app-layout>
    <x-slot name="mainContent">
        <section class="w-4/6 mx-auto">
            <form action="" method="post">
                <div>
                    <label for="receiver">Receiver Email</label>
                    <input type="email" name="receiver" id="receiver"
                        class="border border-black px-10 w-10/12 block"><span class="-mt-7 ml-3 absolute"><i
                            class="fa-sharp fa-solid fa-envelope"></i></span> <br>
                </div>
                <div>
                    <label for="subject" class=" text-gray-700 font-serif">Subject Name</label>
                    <input type="text" name="subject" id="subject"
                        class="border border-black px-10 w-10/12 block"><span class="-mt-7 ml-3 absolute"><i
                            class="fa-sharp fa-solid fa-comment"></i></span>
                    <br>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="border-black w-10/12 block"></textarea> <br>
                </div>
                <button class="px-4 py-2 bg-black text-yellow-100 rounded hover:text-xl font-bold ">Send message</button>
            </form>
        </section>
    </x-slot>
</x-app-layout>
