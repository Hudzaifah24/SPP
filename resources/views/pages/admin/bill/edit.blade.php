@extends('pages.admin.layout.parent')

@section('title', 'Edit Tagihan SPP')

@section('content')
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Edit Tagihan SPP
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="{{ route('admin.bill.update', 1) }}" method="POST">
                        @csrf
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informasi Tagihan SPP
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Nominal PP*
                                    </label>
                                    <input id="nominal_pp" type="text" required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="" name="nominal_pp" />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Nominal MONDOK*
                                    </label>
                                    <input id="nominal_mondok" type="text" required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="" name="nominal_mondok" />
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password">
                                        Priode*
                                    </label>
                                    <select required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        name="children_id">
                                        <option disabled selected>--pilih--</option>
                                        <option value="">2023/2024</option>
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
        var nominalPp = document.getElementById('nominal_pp');
        nominalPp.addEventListener('keyup', function(e) {
            nominalPp.value = formatRupiahNP(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiahNP(angkaNP, prefix) {
            var number_string_n_p = angkaNP.replace(/[^,\d]/g, '').toString(),
                split = number_string_n_p.split(','),
                sisa = split[0].length % 3,
                rupiahNP = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiahNP += separator + ribuan.join('.');
            }

            rupiahNP = split[1] != undefined ? rupiahNP + ',' + split[1] : rupiahNP;
            return prefix == undefined ? rupiahNP : (rupiahNP ? 'Rp. ' + rupiahNP : '');
        }

        var nominalMondok = document.getElementById('nominal_mondok');
        nominalMondok.addEventListener('keyup', function(e) {
            nominalMondok.value = formatRupiahNM(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiahNM(angkaNM, prefix) {
            var number_string_n_m = angkaNM.replace(/[^,\d]/g, '').toString(),
                split = number_string_n_m.split(','),
                sisa = split[0].length % 3,
                rupiahnm = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiahnm += separator + ribuan.join('.');
            }

            rupiahnm = split[1] != undefined ? rupiahnm + ',' + split[1] : rupiahnm;
            return prefix == undefined ? rupiahnm : (rupiahnm ? 'Rp. ' + rupiahnm : '');
        }
    </script>
@endpush
