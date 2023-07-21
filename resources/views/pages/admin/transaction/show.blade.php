@extends('pages.admin.layout.parent')

@section('title', 'Detail Transaksi')

@section('breadcrumb')
    <ol class="flex text-white text-sm font-semibold">
        <li>><a href="{{ route('admin.transaction.index') }}">Transaksi</a></li>
        <li>>Detail</li>
    </ol>
@endsection

@section('content')
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            #invoice-HSKASJCJSAKSJJ
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Informasi Transaksi
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Jumlah
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Rp 300.000,-" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Tipe
                                </label>
                                <input type="email" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Online" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Tagihan Bulan
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Januari / 2023/2024" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Waktu Membayar
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="10/1/2023 15:10:11" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                    Kode Bayar
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="hx-09123921023" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                    Invoice
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="#invoice-HSKASJCJSAKSJJ" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                    Link Bayar
                                </label>
                                <div class="flex">
                                    <input type="text" disabled
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="https://invoice.bayar.com" />
                                    <a href="https://invoice.bayar.com" class="border-0 px-3 py-3 text-white bg-blue-300 rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150">
                                        <i class="fa fa-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4 flex justify-center">
                            <div class="relative">
                                <img alt="..." src="/assets/img/team-2-800x800.jpg"
                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-28 mb-5">
                        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            Abdurrohman
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fa fa-hashtag mr-2 text-lg text-blueGray-400"></i>
                            91092319
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10 capitalize">
                            <i class="fa fa-mars mr-2 text-lg text-blueGray-400"></i>
                            pria
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                            4 SD
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i class="fas fa-calendar mr-2 text-lg text-blueGray-400"></i>
                            2023/2024
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center mt-10">
                        <div class="w-full px-4 flex justify-center">
                            <div class="relative">
                                <img alt="..." src="/assets/img/team-2-800x800.jpg"
                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-28 mb-5">
                        <div class="mb-2 text-blueGray-600">
                            Wali Murid
                        </div>
                        <h3 class="text-xl font-semibold leading-normal text-blueGray-700 mb-2">
                            Hudzaifah
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            Karawang, Karawang, Indonesia, 41360
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
                            <i class="fa fa-envelope-open mr-2 text-lg text-blueGray-400"></i>
                            hudz1357@gmail.com
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i class="fa fa-mobile mr-2 text-lg text-blueGray-400"></i>
                            +6281575319184
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
