@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
{{--    {{dd($students)}}--}}
    <p class="font-semibold">Dashboard</p>
    <div class="py-2 mb-8">

        <a href="#" class="block w-48 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah  </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">8 Mahasiswa</p>
        </a>

    </div>

    <p>Daftar Mahasiswa</p>
    <div class="mt-4">
        <table class="w-max text-sm py-2 text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Mahasiswa
                </th>
                <th scope="col" class="py-3 px-6">
                    NRP
                </th>
                <th scope="col" class="py-3 px-6">
                    Tahun Angkatan
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$student['name']}}
                    </th>
                    <td class="py-4 px-6">
                        {{$student['nrp']}}
                    </td>
                    <td class="py-4 px-2">
                        2019
                    </td>
                    <td class="py-4 px-6">
                        <a href="/application/approval/{{$student['nrp']}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-3 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              view
                          </span>
                        </a>
                    </td>
                </tr>
            @endforeach



            </tbody>
        </table>
    </div>



@endsection
