    <!--navbar-->
    @extends('layout.master')
    @push('cssjsexternal')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
    <!--/navbar-->
    @section('content')
        <!--pages.conten-->
        <section class="mt-20">
            @csrf
            <div class="items-center max-w-screen-md mx-auto">
                <h3 class="text-5xl text-center font-hurricane">ImaGallery</h3>
            </div>
            <div class="max-w-screen-md mx-auto">
                <div class="flex flex-wrap items-center flex-container gap-2" id="exploredata">
                    <!--postingan-->

                </div>
            </div>
            <div class="mb-28"></div>
        </section>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
        @include('sweetalert::alert')
    @endsection
    @push('footerjsexternal')
        <script src="/javascript/explore.js"></script>
    @endpush
        
