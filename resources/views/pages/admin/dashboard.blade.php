@extends('pages.admin.layout.parent')

@section('title', 'Dashboard | Pembayaran SPP Mutiara Ihsan')

@section('chart_top')
    <div class="w-full mb-3 px-4">
        <div
        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
        >
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
            <div
                class="relative w-full pr-4 max-w-full flex-grow flex-1"
            >
                <h5
                class="text-blueGray-400 uppercase font-bold text-xs"
                >
                Balance Xendit
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                Rp {{ number_format($balance['balance']) }}
                </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                >
                <i class="fa fa-credit-card"></i>
                </div>
            </div>
            </div>
            {{-- <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-emerald-500 mr-2">
                <i class="fas fa-arrow-up"></i> 3.48%
            </span>
            <span class="whitespace-nowrap">
                Since last month
            </span>
            </p> --}}
        </div>
        </div>
    </div>
    <div class="w-full mb-3 px-4">
        <div
        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
        >
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
            <div
                class="relative w-full pr-4 max-w-full flex-grow flex-1"
            >
                <h5
                class="text-blueGray-400 uppercase font-bold text-xs"
                >
                Total Balance System
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                Rp {{ number_format($balance['balance']) }}
                </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                >
                <i class="fa fa-money-bill"></i>
                </div>
            </div>
            </div>
            {{-- <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-emerald-500 mr-2">
                <i class="fas fa-arrow-up"></i> 3.48%
            </span>
            <span class="whitespace-nowrap">
                Since last month
            </span>
            </p> --}}
        </div>
        </div>
    </div>
    <div class="w-full mb-3 px-4">
        <div
        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
        >
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
            <div
                class="relative w-full pr-4 max-w-full flex-grow flex-1"
            >
                <h5
                class="text-blueGray-400 uppercase font-bold text-xs"
                >
                Pemasukan Hari Ini
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                Rp 350,897
                </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                >
                <i class="far fa-chart-bar"></i>
                </div>
            </div>
            </div>
            {{-- <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-emerald-500 mr-2">
                <i class="fas fa-arrow-up"></i> 3.48%
            </span>
            <span class="whitespace-nowrap">
                Since last month
            </span>
            </p> --}}
        </div>
        </div>
    </div>
    <div class="w-full mb-3 px-4">
        <div
        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
        >
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
            <div
                class="relative w-full pr-4 max-w-full flex-grow flex-1"
            >
                <h5
                class="text-blueGray-400 uppercase font-bold text-xs"
                >
                Total Pengguna
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                2,356
                </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                >
                <i class="fas fa-users"></i>
                </div>
            </div>
            </div>
            {{-- <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-red-500 mr-2">
                <i class="fas fa-arrow-down"></i> 3.48%
            </span>
            <span class="whitespace-nowrap"> Since last week </span>
            </p> --}}
        </div>
        </div>
    </div>
    <div class="w-full mb-3 px-4">
        <div
        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
        >
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
            <div
                class="relative w-full pr-4 max-w-full flex-grow flex-1"
            >
                <h5
                class="text-blueGray-400 uppercase font-bold text-xs"
                >
                Pengguna Sudah Membayar
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                924
                </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                >
                <i class="fa fa-handshake"></i>
                </div>
            </div>
            </div>
            {{-- <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-orange-500 mr-2">
                <i class="fas fa-arrow-down"></i> 1.10%
            </span>
            <span class="whitespace-nowrap"> Since yesterday </span>
            </p> --}}
        </div>
        </div>
    </div>
@endsection

@section('content')
    <div>
        <div class="flex flex-wrap">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700"
              >
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                      <h6
                        class="uppercase text-blueGray-100 mb-1 text-xs font-semibold"
                      >
                        Perkembangan
                      </h6>
                      <h2 class="text-white text-xl font-semibold">
                        Grafik Transaksi Tahun Ini
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-350-px">
                    <canvas id="line-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full xl:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                      <h6
                        class="uppercase text-blueGray-400 mb-1 text-xs font-semibold"
                      >
                        Performa
                      </h6>
                      <h2 class="text-blueGray-700 text-xl font-semibold">
                        Total Transaksi
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-350-px">
                    <canvas id="bar-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Transaksi Terakhir
                      </h3>
                    </div>
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                      <button
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button"
                      >
                        Lihat Semua
                      </button>
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
                          class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        >
                          Nama
                        </th>
                        <th
                          class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        >
                            Jumlah
                        </th>
                        <th
                          class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        >
                          Tipe
                        </th>
                        <th
                          class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        >
                          Bulan / Priode
                        </th>
                        <th
                          class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        >
                          Waktu Membayar
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                        >
                          Abdurrahman
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                          Rp 300.000,-
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          Online
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          Januari / 2023
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
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
@endsection

@push('script')
<script type="text/javascript">
    (function () {
      /* Chart initialisations */
      /* Line Chart */
      var config = {
        type: "line",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [65, 78, 66, 44, 56, 67, 75],
              fill: false
            },
            {
              label: new Date().getFullYear() - 1,
              fill: false,
              backgroundColor: "#fff",
              borderColor: "#fff",
              data: [40, 68, 86, 74, 56, 60, 87]
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          title: {
            display: false,
            text: "Sales Charts",
            fontColor: "white"
          },
          legend: {
            labels: {
              fontColor: "white"
            },
            align: "end",
            position: "bottom"
          },
          tooltips: {
            mode: "index",
            intersect: false
          },
          hover: {
            mode: "nearest",
            intersect: true
          },
          scales: {
            xAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255,.7)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Month",
                  fontColor: "white"
                },
                gridLines: {
                  display: false,
                  borderDash: [2],
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.3)",
                  zeroLineColor: "rgba(0, 0, 0, 0)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255,.7)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value",
                  fontColor: "white"
                },
                gridLines: {
                  borderDash: [3],
                  borderDashOffset: [3],
                  drawBorder: false,
                  color: "rgba(255, 255, 255, 0.15)",
                  zeroLineColor: "rgba(33, 37, 41, 0)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };
      var ctx = document.getElementById("line-chart").getContext("2d");
      window.myLine = new Chart(ctx, config);

      /* Bar Chart */
      config = {
        type: "bar",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              backgroundColor: "#ed64a6",
              borderColor: "#ed64a6",
              data: [30, 78, 56, 34, 100, 45, 13],
              fill: false,
              barThickness: 8
            },
            {
              label: new Date().getFullYear() - 1,
              fill: false,
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [27, 68, 86, 74, 10, 4, 87],
              barThickness: 8
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          title: {
            display: false,
            text: "Orders Chart"
          },
          tooltips: {
            mode: "index",
            intersect: false
          },
          hover: {
            mode: "nearest",
            intersect: true
          },
          legend: {
            labels: {
              fontColor: "rgba(0,0,0,.4)"
            },
            align: "end",
            position: "bottom"
          },
          scales: {
            xAxes: [
              {
                display: false,
                scaleLabel: {
                  display: true,
                  labelString: "Month"
                },
                gridLines: {
                  borderDash: [2],
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.3)",
                  zeroLineColor: "rgba(33, 37, 41, 0.3)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value"
                },
                gridLines: {
                  borderDash: [2],
                  drawBorder: false,
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.2)",
                  zeroLineColor: "rgba(33, 37, 41, 0.15)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };
      ctx = document.getElementById("bar-chart").getContext("2d");
      window.myBar = new Chart(ctx, config);
    })();
  </script>
@endpush
