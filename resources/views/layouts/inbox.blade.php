@extends('layouts.main')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg h-screen ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400 dark:bg-gray-700">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">
                    Message
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    example@mail.com
                </th>
                <td class="px-6 py-4">
                    Product Request
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    Request Laptop Gaming
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    example1@mail.com
                </th>
                <td class="px-6 py-4">
                    Request Cancel
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    Laptop PC
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    example2@mail.com
                </th>
                <td class="px-6 py-4">
                    Black Keyboard
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    Accessories
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    example3@mail.com
                </th>
                <td class="px-6 py-4">
                    Gray Mouse
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    Wired
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    example4@mail.com
                </th>
                <td class="px-6 py-4">
                    SSD Request
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    New SSD
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection