<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/assets/img/logo.png" />
    <link
      rel="stylesheet"
      href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" href="/assets/styles/tailwind.css" />
    <title>Pembayaran SPP | Mutiara Ihsan Indonesia</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="#"
            >Yayasan Mutiara Ihsan Indonesia</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul
            class="flex flex-col lg:flex-row list-none lg:ml-auto items-center"
          >
            {{-- <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-facebook text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://github.com/creativetimofficial/notus-js?ref=njs-landing"
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-github text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Star</span></a
              >
            </li> --}}
            <li class="flex items-center">
                <a
                  href="{{ route('register.page') }}"
                  class="bg-transparent md:text-white lg:text-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                >
                  Daftar
                </a>
            </li>
            <li class="flex items-center">
              <a
                href="{{ route('login.page') }}"
                class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
              >
                Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style="
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
          "
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Bayar SPP mu lebih mudah dan efektif.
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                  Sistem ini dibuat untuk memudahkan para orangtua dalam membayarkan SPP bulanan yang sekarang bisa dijangkau dari kejauhan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-blueGray-200 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Mudah Dipahami</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Kami telah merancang berbagai fitur yang mudah dipahami dalam transaksi digital.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400"
                  >
                    <i class="fa fa-handshake"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Bersahabat</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Transaksi digital terdapat biaya admin untuk setiap kali bertransaksi, sistem kami akan mempermudah para orang tua dalam masalah tersebut.
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400"
                  >
                    <i class="fa fa-user-shield"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Aman</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Kami telah berusaha se-maximal mungkin untuk mengamankan data diri anda dari berbagai hal-hal yang tidak diinginkan.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
              >
                <p class="font-bold text-3xl">
                    #
                </p>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Membayar tagihan SPP menjadi lebih mudah bersama kami
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
              >
                Di era digital ini banyak dari sekolah-sekolah islami yang sudah mengunakan berbagai jenis program, seperti profile yayasan, PPDB, management sekolah, dll.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600"
              >
                Maka dari itu, dari sekian banyak program yang dibuat, kami akan menjadikan ini salah satu bagian dari program kami dalam masalah keuangan, dan jelas bertujuan untuk mempermudah para wali murid dalam membayarkan SPP bulanan bagi anak-anak nya.
              </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-red-500"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block h-95-px -top-94-px"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-red-500 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Keuntungan menggunakan sistem
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    Diluar jangkauan pun para wali murid sekarang bisa membayarkan SPP Bulanan dengan tepat waktu.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                >
                  <i class="fas fa-money-bill-alt text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">Membayar SPP</h3>
                <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                    Dalam membayar SPP bulanan bagi para murid <span class="font-bold">Pondok Belajar Mutiara Ihsan</span>, kami membagi menjadi 2 tipe, yaitu :
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-money-bill-wave"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500">
                          Membayar langsung dimuka
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fa fa-comment-dollar"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500">
                            Membayar secara digital
                        </h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Teknologi Yang Dipakai</h2>
              <p class="text-lg leading-relaxed m-4 text-blueGray-500">
                Kami membuat sistem dengan bantuan teknologi yang insyaallah terjamin aman dan mudah.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/assets/img/laravel.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Laravel</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    UI & API
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/assets/img/tailwind.png"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Tailwind</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    Styling & interactive
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/assets/img/creativetim.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Creative Tim</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    Template
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/assets/img/xendit.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Xendit</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    Payment Gateway
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-20 relative block bg-blueGray-800">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-blueGray-800 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Website Kami</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-400">
                Kami juga telah menyiapkan beberapa website yang mungkin bisa anda kunjungi.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fa fa-building text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
                Profile Yayasan
              </h6>
              <p class="mt-2 mb-4 text-blueGray-400">
                Bisa kunjungi laman web berikut, <a class="underline" href="https://portfolio.yayasanmutiaraihsanindonesia.my.id/">Yayasan Mutiara Ihsan Indonesia</a>
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fa fa-user-plus text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">
                PPDB
              </h5>
              <p class="mt-2 mb-4 text-blueGray-400">
                Bisa kunjungi laman web berikut, <a class="underline" href="https://yayasanmutiaraihsanindonesia.my.id/daftar">PPDB YMII</a>
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-money-bill-wave text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">Pembayaran SPP</h5>
              <p class="mt-2 mb-4 text-blueGray-400">
                Bisa kunjungi laman web berikut, <a class="underline" href="">Pembayaran SPP YMII</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Ada pertanyaan untuk kami?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                    Form ini akan membawa anda ke Whatsapp dan kami insyaallah akan merespon anda secepatnya.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="full-name"
                      >Nama</label
                    ><input
                      id="nama"
                      type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Nama"
                      onchange="onHandleChange(this.name, this.value)"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="email"
                      >Email</label
                    ><input
                      id="email"
                      type="email"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Email"
                      onchange="onHandleChange(this.name, this.value)"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="message"
                      >Pesan</label
                    ><textarea
                      id="pesan"
                      rows="4"
                      cols="80"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Ketik pesan mu"
                      onchange="onHandleChange(this.name, this.value)"
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <a
                      id="submit"
                      href="https://wa.me/6281380401956"
                      target="_blank"
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button"
                    >
                      Kirim Pesan
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
        style="transform: translateZ(0px)"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-blueGray-200 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-center lg:text-left">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Ayo maksimalkan pembayaran SPP anda!</h4>
            <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
              Semoga sistem yang kami kembangkan mempermudah para wali murid sekalian.
            </h5>

            <div class="mt-6 lg:mb-0 mb-6">
              <ul class="list-unstyled">
                <li>
                  <p
                    class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                  >
                    mutiaraihsanpondokbelajar@gmail.com
                  </p>
                  <p
                    class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                  >
                    0813-8040-1956
                  </p>
                </li>
              </ul>
              {{-- <button
                class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button"
              >
                <i class="fab fa-twitter"></i></button
              ><button
                class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button"
              >
                <i class="fab fa-facebook-square"></i></button
              ><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button"
              >
                <i class="fab fa-dribbble"></i></button
              ><button
                class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button"
              >
                <i class="fab fa-github"></i>
              </button> --}}
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                  class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                  >Link</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                      href="{{ route('register.page') }}"
                      >Daftar</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                      href="{{ route('login.page') }}"
                      >Login</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                      href="https://portfolio.yayasanmutiaraihsanindonesia.my.id/"
                      >Profile YMII</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                      href="https://yayasanmutiaraihsanindonesia.my.id/"
                      >PPDB YMII</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                      href=""
                      >Pembayaran SPP</a
                    >
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <span
                  class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                  >Maps</span
                >
                <ul class="list-unstyled">
                  <li>
                    <iframe data-aos="zoom-in" width="100%" class="mb-5 aos-init aos-animate" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=kp.pasir panggang&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-blueGray-300" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
              Copyright © <span id="get-current-year"></span> by
              <a
                href="https://portfolio.sixredstarstech.my.id/"
                class="text-blueGray-500 hover:text-blueGray-800"
                >Six Red Stars Technology</a
              >.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    // Kontak
    let submit = document.getElementById('submit');
    let final = '';

    function onHandleChange (name, value) {
        if (name == 'nama') {
            final += value + ' - ';
        } else if (name = 'email') {
            final += value + ' - ';
        } else if (name == 'text') {
            final += value;
        }

        submit.href = `https://wa.me/6281380401956?text=${final}`;
        console.log(final);
    };

    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
          new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>
