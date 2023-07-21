@extends('pages.admin.layout.parent')

@section('title', 'Detail Pengguna')

@section('breadcrumb')
    <ol class="flex text-white text-sm font-semibold">
        <li>><a href="{{ route('admin.user.index') }}">Pengguna</a></li>
        <li>>Detail</li>
    </ol>
@endsection

@section('content')
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
            ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    <img alt="..." src="/assets/img/team-2-800x800.jpg"
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <button
                                        class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Block
                                    </button>
                                    <a
                                        class="bg-blue-500 active:bg-blue-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                        href="{{ route('admin.children.create') }}">
                                        Tambah Anak
                                    </a>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex lg:justify-start sm:justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">2</span><span
                                            class="text-sm text-blueGray-400">Anak</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">1</span><span
                                            class="text-sm text-blueGray-400">Transaksi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2">
                                Hudzaifah
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                                <i class="fas fa-hashtag mr-1 text-lg text-blueGray-400"></i>
                                hudzaifah
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-10">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                Guru
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                                Lampu Iman
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                KARAWANG, KARAWANG, INDONESIA, 41360
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full px-4">
                                    <div class="flex flex-wrap mt-4">
                                        <div class="w-full px-4">
                                            <div
                                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                                                <div class="rounded-t mb-0 px-4 py-3 border-0">
                                                    <div class="flex flex-wrap items-center">
                                                        <div
                                                            class="relative w-full px-4 max-w-full text-center flex justify-between">
                                                            <h3 class="font-semibold text-lg text-blueGray-700">
                                                                Anak / Murid / Pewaris
                                                            </h3>
                                                            <a
                                                                class="bg-blue-500 active:bg-blue-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                                                href="{{ route('admin.children.create') }}">
                                                                Tambah Anak
                                                        </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block w-full overflow-x-auto">
                                                    <!-- Projects table -->
                                                    <table class="items-center w-full bg-transparent border-collapse">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Nama
                                                                </th>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Kelas
                                                                </th>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    NIS
                                                                </th>
                                                                <th
                                                                    class="px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Jenis Kelamin
                                                                </th>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Tahun Ajaran
                                                                </th>
                                                                <th
                                                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                                                                ></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4 text-left">
                                                                    Abdurrohman
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    4 SD
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    91092319
                                                                </td>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    Laki-laki
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    2022/2023
                                                                </td>
                                                                <td
                                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                                                                >
                                                                    <a
                                                                        href="#pablo"
                                                                        class="text-blueGray-500 block py-1 px-3"
                                                                        onclick="openDropdown(event,'table-light-1-dropdown')"
                                                                    >
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </a>
                                                                    <div
                                                                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                                                        id="table-light-1-dropdown"
                                                                    >
                                                                        <a
                                                                        href="{{ route('admin.children.edit', 1) }}"
                                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-yellow-200 text-blueGray-700"
                                                                        >Edit</a
                                                                        >
                                                                        <div
                                                                        class="h-0 my-2 border border-solid border-blueGray-100"
                                                                        ></div>
                                                                        <button
                                                                        type="button"
                                                                        onclick="var confirmed = confirm('Anda Yakin Ingin Menghapus?'); alert(confirmed)"
                                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-red-200 text-blueGray-700"
                                                                        >Delete</button
                                                                        >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4 text-left">
                                                                    Nadiya
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    5 SD
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    91293832
                                                                </td>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    Perempuan
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    2022/2023
                                                                </td>
                                                                <td
                                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                                                                >
                                                                    <a
                                                                        href="#pablo"
                                                                        class="text-blueGray-500 block py-1 px-3"
                                                                        onclick="openDropdown(event,'table-light-1-dropdown')"
                                                                    >
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </a>
                                                                    <div
                                                                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                                                        id="table-light-1-dropdown"
                                                                    >
                                                                        <a
                                                                        href="{{ route('admin.user.edit', 1) }}"
                                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-yellow-200 text-blueGray-700"
                                                                        >Edit</a
                                                                        >
                                                                        <div
                                                                        class="h-0 my-2 border border-solid border-blueGray-100"
                                                                        ></div>
                                                                        <button
                                                                        type="button"
                                                                        onclick="var confirmed = confirm('Anda Yakin Ingin Menghapus?'); alert(confirmed)"
                                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-red-200 text-blueGray-700"
                                                                        >Delete</button
                                                                        >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full px-4">
                                    <div class="flex flex-wrap mt-4">
                                        <div class="w-full mb-12 px-4">
                                            <div
                                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                                                <div class="rounded-t mb-0 px-4 py-3 border-0">
                                                    <div class="flex flex-wrap items-center">
                                                        <div
                                                            class="relative w-full px-4 max-w-full text-center flex justify-between">
                                                            <h3 class="font-semibold text-lg text-blueGray-700">
                                                                History Transaksi
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block w-full overflow-x-auto">
                                                    <!-- Projects table -->
                                                    <table class="items-center w-full bg-transparent border-collapse">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Bayar Untuk
                                                                </th>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Jumlah
                                                                </th>
                                                                <th
                                                                    class="px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Tipe
                                                                </th>
                                                                <th
                                                                    class="px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Bulan / Priode
                                                                </th>
                                                                <th
                                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                                    Waktu Membayar
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    Abdurrohman
                                                                </th>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                                                    Rp 300.000,-
                                                                </td>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    Online
                                                                </td>
                                                                <td
                                                                    class="px-12 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    Januari / 2023
                                                                </td>
                                                                <td
                                                                    class="px-6 border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap py-4">
                                                                    10/1/2023 15:10:11
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
