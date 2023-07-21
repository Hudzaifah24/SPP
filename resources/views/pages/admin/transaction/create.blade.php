@extends('pages.admin.layout.parent')

@section('title', 'Tambah Transaksi')

@section('breadcrumb')
    <ol class="flex text-white text-sm font-semibold">
        <li>><a href="{{ route('admin.transaction.index') }}">Transaksi</a></li>
        <li>>Tambah</li>
    </ol>
@endsection

@section('content')
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Tambah Transaksi
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="{{ route('admin.transaction.store') }}" method="POST">
                        @csrf
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informasi Transaksi
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Nama*
                                    </label>
                                    <select required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        name="children_id">
                                        <option disabled selected>--pilih--</option>
                                        <option value="">Abdurrohman</option>
                                        <option value="">Nadiya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Jumlah*
                                    </label>
                                    <input id="amount" type="text" required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="" name="amount" />
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Tagihan SPP*
                                    </label>
                                    <select required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        name="children_id">
                                        <option disabled selected>--pilih--</option>
                                        <option value="">Januari</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300" />

                        <div class="w-full px-4 mt-6">
                            <p class="text-sm text-gray-500">* : Wajib Diisi</p>
                        </div>

                        <div class="w-full px-4 mt-6 flex justify-center">
                            <button type="submit"
                                class="lg:w-4/12 border-0 px-3 py-3 text-white bg-blue-500 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var amount = document.getElementById('amount');
        amount.addEventListener('keyup', function(e) {
            amount.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endpush
