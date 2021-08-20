<div class="w-full lg:w-1/4 pl-4">
    <div class="bg-white p-3 mb-3">
        <div>
            <span class="text-lg font-bold">Who to follow</span>

        </div>
        @foreach ($users as $user)
            <div class="flex border-b border-solid border-grey-light">
                <div class="py-2">
                    @if ($user->image_path === null)
                        <div><a href="{{ route('users.show', $user) }}"><img
                                    src="https://source.unsplash.com/400x400" alt="avatar"
                                    class="rounded-full h-12 w-12 mr-2"></a></div>
                    @else
                        <div><a href="{{ route('users.show', $user) }}"><img
                                    src="{{ 'images/' . $user->image_path }}" alt="avatar"
                                    class="rounded-full h-12 w-12 mr-2"></a></div>
                    @endif
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="{{ route('users.show', $user) }}"
                                class="font-bold text-black">{{ $user->name }}</a> <a href="#"
                                class="text-grey-dark">@ {{ $user->nickname }} </a>
                        </div>

                        <div>

                        </div>
                    </div>
                    <div>
                        @if (Auth::user()->isFollowing($user->id))
                            <a href="{{ route('users.unfollow', $user) }}"
                            class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-500">
                                Unfollow
                            </a>
                        @else
                            <a href="{{ route('users.follow', $user) }}"
                            class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-500">
                                Follow
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach


        <div class="flex  ">
            <div class="py-4">

            </div>
            <div class="pl-2 py-2 w-full">
                <div class="flex justify-between">

                </div>
            </div>

            <div class="pt-2">

            </div>
        </div>

        <div class="bg-white p-3 mb-3">
            <div class="mb-3">
                <span class="text-lg font-bold">Trends for you</span>

            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">Happy New Year</a></div>
                <div><a href="#" class="text-grey-dark text-xs">645K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">Happy 2018</a></div>
                <div><a href="#" class="text-grey-dark text-xs">NYE 2018 Celebrations</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">#ByeBye2017</a></div>
                <div><a href="#" class="text-grey-dark text-xs">21.7K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">#SomeHashTag</a></div>
                <div><a href="#" class="text-grey-dark text-xs">45K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">Something Trending</a></div>
                <div><a href="#" class="text-grey-dark text-xs">36K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="text-teal font-bold">#ColdAF</a></div>
                <div><a href="#" class="text-grey-dark text-xs">100K Tweets</a></div>
            </div>

        </div>

        <div class="mb-3 text-xs">
            <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2021 Twitter</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
        </div>
    </div>