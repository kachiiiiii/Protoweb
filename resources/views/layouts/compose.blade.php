<x-app-layout>
    <x-slot name="mainContent">
        <section class="w-4/6 mx-auto">
            @if ($errors->any())

                @foreach ($errors->all() as $error)
                    <div class="text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="" method="post">
                @csrf
                <div>
                    <label for="receiver">Receiver Email</label>
                    <input type="email" name="receiver" value="{{ old('receiver') }}" id="receiver"
                        class="border border-black px-10 w-10/12 block"><span class="-mt-7 ml-3 absolute"><i
                            class="fa-sharp fa-solid fa-envelope"></i></span> <br>
                </div>
                <div>
                    <label for="subject" class=" text-gray-700 font-serif">Subject Name</label>
                    <input type="text" value="{{ old('subject') }}" name="subject" id="subject"
                        class="border border-black px-10 w-10/12 block"><span class="-mt-7 ml-3 absolute"><i
                            class="fa-sharp fa-solid fa-comment"></i></span>
                    <br>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message"  id="message" cols="30" rows="10" class="border-black w-10/12 block"></textarea> <br>
                </div>
                <div class="flex justify-between">
                    <div>
                        <button class="px-4 py-2 bg-black text-yellow-100 rounded hover:text-xl font-bold ">Send
                            message</button>
                    </div>
                    <div>
                        <button class="px-4 py-2 bg-violet-900 rounded hover:text-xl font-bold -ml-60 text-yellow-300">Add
                            Draft</button>
                    </div>
                </div>
            </form>
        </section>
    </x-slot>
</x-app-layout>
