@extends('layouts.app')

@section('content')
    {{ dd($student, $thesis) }}

    <p class="text-xl font-bold">Thesis Approval Process</p>
    <p class="text-lg font-semibold">Student Information</p>
    <div class="py-2">
        <p> Nama : Beni Setiawan</p>
        <p> NRP : 05211940000111</p>
        <p> Tahun Masuk : 2019</p>
        <p> No HP : 081331013216</p>
        <p> Alamat : Jalan Surabaya 2020</p>
    </div>

    <p class="text-lg font-semibold">Thesis Information</p>
    <p>Topik Tugas Akhir  : Aspect Based Sentiment Analysis</p>
    <p>Judul Tugas Akhir  : Integrasi Data Bantuan Pemerintah Kota Terhadap Penduduk Surabaya Menggunakan Identity Correlation Approach </p>
    <p>Dosen Pembimbing 1 : Renny Pradina, S.T., M.T.,</p>
    <p>Dosen Pembimbing 2 : Radityo S.Kom., M.Kom.</p>
    <p class="pt-4">Status Proposal : Belum Disetujui </p>
    <div class="pt-4">
        <a href="https://google.com" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Download Proposal</a>
    </div>
    <br>
    <p class="font-semibold text-xl mt-3 pb-4">Feedback Form</p>
    <form action="/thesis/approval">
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="feedbacklink" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Docs Notes Proposal</label>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Feedback</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        </div>
        <div class="flex flex-row my-3">
            <button type="button" name="button" value="reject" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tolak Proposal</button>
            <button type="button" name="button" value="approve" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Setujui Proposal</button>
        </div>

    </form>




@endsection
