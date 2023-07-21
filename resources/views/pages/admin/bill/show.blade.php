@extends('pages.admin.layout.parent')

@section('title', 'Detail Tagihan SPP')

@section('content')
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            SPP Priode 2023/2024
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Informasi Tagihan SPP
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Nominal Bagi Yang Pulang Pergi
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
                                    Nominal Bagi Yang Mondok
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Rp 800.000,-" />
                            </div>
                        </div>
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password">
                                    Tagihan Untuk Priode
                                </label>
                                <input type="text" disabled
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="2023/2024" />
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                    Kirim Ke Email
                                </label>
                                <form class="flex">
                                    <input type="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="hudz1357@gmail.com" />
                                    <button type="submit" class="border-0 px-3 py-3 text-white bg-red-500 rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150">
                                        <i class="fa fa-location-arrow"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                    Kirim Ke Semua Email
                                </label>
                                <form class="flex">
                                    <button type="submit" class="w-full border-0 px-3 py-3 text-white bg-red-500 rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150">
                                        <i class="fa fa-location-arrow"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
