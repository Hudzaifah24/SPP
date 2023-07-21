@extends('pages.admin.layout.parent')

@section('title', 'Edit Priode')

@section('breadcrumb')
    <ol class="flex text-white text-sm font-semibold">
        <li>><a href="{{ route('admin.period.index') }}">Priode</a></li>
        <li>>Edit</li>
    </ol>
@endsection

@section('content')
  <div class="flex flex-wrap">
    <div class="w-full px-4">
      <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
      >
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center">
            <h6 class="text-blueGray-700 text-xl font-bold">
              Edit Priode
            </h6>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <form action="{{ route('admin.user.update', 1) }}">
            <h6
              class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
            >
              Informasi Priode
            </h6>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      htmlFor="grid-password"
                    >
                      Mulai Tahun Ajaran*
                    </label>
                    <input
                      type="number"
                      required
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      value=""
                      name="start"
                    />
                  </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      htmlFor="grid-password"
                    >
                      Selesai Tahun Ajaran*
                    </label>
                    <input
                      type="number"
                      required
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      value=""
                      name="end"
                    />
                  </div>
                </div>
                <div class="w-full px-4">
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      htmlFor="grid-password"
                    >
                      Status*
                    </label>
                    <select
                      type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      name="status"
                    >
                      <option disabled selected>--pilih--</option>
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
              </div>

            <hr class="mt-6 border-b-1 border-blueGray-300" />

            <div class="w-full px-4 mt-6">
                <p class="text-sm text-gray-500">* : Wajib Diisi</p>
            </div>

            <div class="w-full px-4 mt-6 flex justify-center">
                <button
                    type="submit"
                    class="lg:w-4/12 border-0 px-3 py-3 text-white bg-blue-500 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                >
                    Simpan
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
