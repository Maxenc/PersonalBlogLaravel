<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
            <br/>
            <hr/><br/>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="" action="{{ route('home') }}">
                @csrf
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Titre de l'article
                    </label>
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Titre de l'article" required>
                    


                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." required></textarea>



                    <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Créer</button>
                </form>
            
            </div>
        
    </div>
    <div>
    </div>
    

</x-app-layout>
