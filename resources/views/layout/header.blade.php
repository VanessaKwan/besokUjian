<div class="w-full h-[15vh] bg-yellow-400 text-white text-[3vw] flex font-thin">
    <h1 class="m-auto">Giant Book Supplier</h1>
</div>

<div>
    <ul class="flex flex-row gap-[3vw] justify-center text-blue-500 mt-[1vw] font-semibold">
        <li>
            <a href="/">
                Home
            </a>
        </li>

        <li data-dropdown-toggle="dropdown" class="hover:cursor-pointer flex">
            Category
            <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="1vw" height="1vw" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M7 9a1 1 0 0 0-.707 1.707l5 5a1 1 0 0 0 1.414 0l5-5A1 1 0 0 0 17 9H7Z" clip-rule="evenodd"/></svg>
        </li>

        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                @php
                    $categories = App\Models\Category::all()
                @endphp

                @foreach ($categories as $category)
                    <li>
                        <a href="/cat/{{$category->id}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <li>
            <a href="/publisher">
                Publisher
            </a>
        </li>

        <li>
            <a href="/contact">
                Contact
            </a>
        </li>
    </ul>
</div>

