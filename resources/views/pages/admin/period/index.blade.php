@extends('pages.admin.layout.parent')

@section('title', 'Priode')

@section('breadcrumb')
    <ol class="flex text-white text-sm font-semibold">
        <li>>Priode</li>
    </ol>
@endsection

@section('content')
<div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white"
      >
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div
              class="relative w-full px-4 max-w-full text-center flex justify-between"
            >
                <h3 class="font-semibold text-lg text-blueGray-700">
                    Priode
                </h3>
                <a
                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    href="{{ route('admin.period.create') }}"
                >
                    Tambah Priode
                </a>
            </div>
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <!-- Projects table -->
          <table
            class="items-center w-full bg-transparent border-collapse"
          >
            <thead>
              <tr>
                <th
                  class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                >
                  Tahun Ajaran
                </th>
                <th
                  class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                >
                  Status
                </th>
                <th
                  class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                ></th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th
                      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                    >
                      <span class="font-bold text-blueGray-600">
                        2020 / 2021
                      </span>
                    </th>
                    <td
                      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                    >
                        <i class="fas fa-circle text-orange-500 mr-2"></i>
                        Tidak Aktif
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
                          href="{{ route('admin.period.edit', 1) }}"
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
                <th
                  class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                >
                  <span class="font-bold text-blueGray-600">
                    2023 / 2024
                  </span>
                </th>
                <td
                  class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                >
                    <i class="fas fa-circle text-emerald-500 mr-2"></i>
                    Aktif
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
                      href="{{ route('admin.period.edit', 1) }}"
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
@endsection
