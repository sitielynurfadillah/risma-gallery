<!--navbar-->
@extends('layout.master')
<!--/navbar-->
@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto">
            <h3 class="text-5xl text-center font-hurricane">Upload Foto Anda</h3>
        </div>
    </section>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <section class="mt-10">
            <div class="max-w-screen-md mx-auto">
                <div class="flex flex-wrap px-2 flex-container">
                    <div class="w-3/5 max-[480px]:w-full">
                        <div class="flex justify-center px-3">
                            <div class="flex items-center justify-center w-full">
                                <div class="container">
                                    <input type="file" id="file" accept="image/*" name="file" hidden />
                                    <div class="img-area select-image" data-img="">
                                        <i class='bx bxs-cloud-upload icon'></i>
                                        <h3>Upload Image</h3>
                                        <p>Image size must be less than <span>5MB</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="w-2/5  max-[480px]:w-full px-2">
                        <div class="flex flex-col flex-wrap ">
                            <h3 class="mb-2">Judul</h3>
                            <input type="text" name="judul_foto" id="#"
                                class="mb-2 py-2 rounded-md border-slate-500 bg-gray-100">
                                <h3 class="mt-2">Deskripsi</h3>
                                <div class="mb-3"></div>
                                <textarea name="deksripsi_foto" id="" cols="30" rows="10"
                                    class="w-full h-36 border-slate-500 rounded-xl bg-gray-100"></textarea>
                            <h3 label = "album" class="mb-2">Album</h3>
                            <div class="flex flex-row justify-between gap-2">
                                <select name="album" id=""
                                    class="bg-gray-100 border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">-- Pilih Album --</option>
                                    @foreach ($data_album as $item)
                                        <option value="{{ $item->id }}"> {{ $item->Nama_Album }}</option>
                                    @endforeach
                                </select>
                                <div class="mb-2"></div>
                                <!-- Modal toggle -->
                                <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class= "w-full py-2 text-white  bg-blue-500 rounded-md hover:bg-blue-600" type="button">
                                    +Album
                                </button>
                                <!-- Main modal -->
                            </div class = "ms-2">
                            <div class=" mb-3"></div>
                            <div class="flex flex-row justify-between">
                                <button type="submit" class="w-full py-2 text-white  bg-blue-500 hover:bg-blue-600 rounded-md">Upload</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <form action="/tambah_album" method="post">
        @csrf
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Album
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    album</label>
                                <input type="text" name="Nama_Album" id="Nama_Album"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Masukan dengan #(hastag)" required="">
                                <br>
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Deskripsi Album" required="">
                            </div>
                        </div>
                        <button type="submit" class="w-full py-2 text-white rounded-full bg-blue-500 hover:bg-blue-600">Tambah</button>
                    </div>
                    <script>
                    const selectImage = document.querySelector('.select-image');
                    const inputFile = document.querySelector('#file');
                    const imgArea = document.querySelector('.img-area');

                    selectImage.addEventListener('click', function () {
                        inputFile.click();
                    })

                    inputFile.addEventListener('change', function () {
                        const image = this.files[0]
                        if(image.size < 5000000) {
                            const reader = new FileReader();
                            reader.onload = ()=> {
                                const allImg = imgArea.querySelectorAll('img');
                                allImg.forEach(item=> item.remove());
                                const imgUrl = reader.result;
                                const img = document.createElement('img');
                                img.src = imgUrl;
                                imgArea.appendChild(img);
                                imgArea.classList.add('active');
                                imgArea.dataset.img = image.name;
                            }
                            reader.readAsDataURL(image);
                        } else {
                            alert("Image size more than 2MB");
                        }
                    })
</script>
    </form>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    @include('sweetalert::alert')
@endsection
