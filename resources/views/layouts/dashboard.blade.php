@extends('layouts.main')
@section('content')
    
{{-- <button id="darkModeToggle" type="button" class="mb-20 flex text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none  dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 ">
  <p class=" dark:text-gray-200 font-sans mr-3">Dark/Light Mode : </p>
  <svg id="dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
  <svg id="light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button> --}}
<div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3 sc1080:grid-cols-3">
  <div class="flex items-center justify-center h-24 dark:bg-gray-800 mb-72 lg:-mb-72">
     <div class="mt-40 mx-5 ">
      <div class="max-w-sm w-full bg-gray-100  dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between border-gray-200 dark:border-gray-700 pb-3">
          <dl>
            <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Profit</dt>
            <dd class="leading-none text-3xl font-bold text-gray-900 dark:text-white">$5,405</dd>
          </dl>
          <div class="mx-3">
            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
              <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
              Profit rate 23.5%
            </span>
          </div>
        </div>

        <div class="grid grid-cols-2 py-3">
          <dl>
            <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Income</dt>
            <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">$23,635</dd>
          </dl>
          <dl>
            <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Expense</dt>
            <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500">-$18,230</dd>
          </dl>
        </div>

        <div id="bar-chart"></div>
          <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
              <!-- Button -->
              <button
                id="dropdownDefaultButton1"
                data-dropdown-toggle="lastDaysdropdown1"
                data-dropdown-placement="bottom"
                class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                type="button">
                Last 6 months
                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="lastDaysdropdown1" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 6 months</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last year</a>
                    </li>
                  </ul>
              </div>
              <a
                href="#"
                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                Revenue Report
                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
              </a>
            </div>
          </div>
      </div>
     </div>
  </div>
  
  <div class="flex items-center justify-center h-24 dark:bg-gray-800 mt-16 lg:-mt-6 sc1080:mt-5 mb-80 sc1080:-mb-72">
    <div class="mt-40 mx-5">
      <div class="max-w-full bg-gray-100  dark:bg-gray-800 p-4 md:p-6 mt-16 sc1080:mt-1 sc1232:mt-0">
        <div class="flex justify-between pb-4 mb-4  dark:border-gray-700">
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
              <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
              </svg>
            </div>
            <div>
              <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">3.4k</h5>
              <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week</p>
            </div>
          </div>
          <div>
            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
              <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
              42.5%
            </span>
          </div>
        </div>
      
        <div class="grid grid-cols-2">
          <dl class="flex items-center mr-3 flex-wrap">
              <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal sc1080:-mt-9 me-1">Money spent:</dt>
              <dd class="text-gray-900 text-sm dark:text-white font-semibold sc1080:mt-1">$3,232</dd>
          </dl>
          <dl class="flex items-center justify-end ml-2 flex-wrap">
              <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal sc1080:-mt-9 me-1">Conversion rate:</dt>
              <dd class="text-gray-900 text-sm dark:text-white font-semibold sc1080:mt-1">1.2%</dd>
          </dl>
        </div>
        <div id="column-charts"></div>
          <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
              <!-- Button -->
              <button
                id="dropdownDefaultButton2"
                data-dropdown-toggle="lastDaysdropdown2"
                data-dropdown-placement="bottom"
                class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                type="button">
                Last 7 days
                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="lastDaysdropdown2" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                    </li>
                  </ul>
              </div>
              <a
                href="#"
                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                Leads Report
                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="flex items-center justify-center h-24 dark:bg-gray-800 mt-28 sc1080:mt-3 mb-20">
    <div class="mt-40 mx-5">
      <div class="max-w-sm w-full bg-gray-100 dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between items-start w-full">
          <div class="flex-col items-center">
            <div class="flex items-center mb-1">
              <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Website traffic</h5>
              <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
              </svg>
              <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                  <div class="p-3 space-y-2">
                      <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                      <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                      <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                      <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                      <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg></a>
              </div>
              <div data-popper-arrow></div>
          </div>
        </div>
        <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown" data-dropdown-ignore-click-outside-class="datepicker" type="button" class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">31 Nov - 31 Dev <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>
        <div id="dateRangeDropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
            <div class="p-3" aria-labelledby="dateRangeButton">
              <div date-rangepicker datepicker-autohide class="flex items-center">
                  <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date">
                  </div>
                  <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                  <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End date">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="flex justify-end items-center">
        <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown" data-dropdown-placement="bottom" type="button"  class="inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg class="w-3.5 h-3.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
          </svg><span class="sr-only">Open dropdown</span>
        </button>
        <div id="widgetDropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="widgetDropdownButton">
              <li>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                  </svg>Edit widget
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                    <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                  </svg>Download data
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5.953 7.467 6.094-2.612m.096 8.114L5.857 9.676m.305-1.192a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0ZM17 3.84a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Zm0 10.322a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Z"/>
                  </svg>Add to repository
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                  </svg>Delete widget
                </a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  
    <!-- Line Chart -->
    <div class="py-6" id="pie-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
          <div class="flex justify-between items-center pt-5">
            <!-- Button -->
            <button
              id="dropdownDefaultButton3"
              data-dropdown-toggle="lastDaysdropdown3"
              data-dropdown-placement="bottom"
              class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
              type="button">
              Last 7 days
              <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <div id="lastDaysdropdown3" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                  </li>
                </ul>
            </div>
            <a
              href="#"
              class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
              Traffic analysis
              <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="flex items-start justify-start mb-4 mt-56 dark:bg-gray-800">
  <div class="max-w-full w-full bg-gray-100 dark:bg-gray-800 p-4 md:p-6">
    <div class="flex justify-between mb-5">
      <div>
        <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Sales this week</p>
      </div>
      <div
        class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
        23%
        <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
        </svg>
      </div>
    </div>
    <div id="legend-chart"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
      <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="lastDaysdropdown"
          data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 7 days
          <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="lastDaysdropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
              </li>
            </ul>
        </div>
        <a
          href="#"
          class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
          Sales Report
          <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
  
</div>

<div class="mt-20 mb-5">
  <p class="text-2xl  font-bold text-gray-900 dark:text-white mb-5">Data</p>
<div class="relative overflow-x-auto sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-300  dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="p-4">
                  <div class="flex items-center">
                      <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-all-search" class="sr-only">checkbox</label>
                  </div>
              </th>
              <th scope="col" class="px-6 py-3">
                  Product name
              </th>
              <th scope="col" class="px-6 py-3">
                  Color
              </th>
              <th scope="col" class="px-6 py-3">
                  Category
              </th>
              <th scope="col" class="px-6 py-3">
                  Price
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple MacBook Pro 17"
              </th>
              <td class="px-6 py-4">
                  Silver
              </td>
              <td class="px-6 py-4">
                  Laptop
              </td>
              <td class="px-6 py-4">
                  $2999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Microsoft Surface Pro
              </th>
              <td class="px-6 py-4">
                  White
              </td>
              <td class="px-6 py-4">
                  Laptop PC
              </td>
              <td class="px-6 py-4">
                  $1999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Magic Mouse 2
              </th>
              <td class="px-6 py-4">
                  Black
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $99
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple Watch
              </th>
              <td class="px-6 py-4">
                  Black
              </td>
              <td class="px-6 py-4">
                  Watches
              </td>
              <td class="px-6 py-4">
                  $199
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple iMac
              </th>
              <td class="px-6 py-4">
                  Silver
              </td>
              <td class="px-6 py-4">
                  PC
              </td>
              <td class="px-6 py-4">
                  $2999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple AirPods
              </th>
              <td class="px-6 py-4">
                  White
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $399
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  iPad Pro
              </th>
              <td class="px-6 py-4">
                  Gold
              </td>
              <td class="px-6 py-4">
                  Tablet
              </td>
              <td class="px-6 py-4">
                  $699
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Magic Keyboard
              </th>
              <td class="px-6 py-4">
                  Black
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $99
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Smart Folio iPad Air
              </th>
              <td class="px-6 py-4">
                  Blue
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $79
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  AirTag
              </th>
              <td class="px-6 py-4">
                  Silver
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $29
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
      </tbody>
  </table>
  <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
      <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
      <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
          <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
          </li>
          <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
          </li>
          <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
          </li>
          <li>
              <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
          </li>
          <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
          </li>
          <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
          </li>
          <li>
      <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
          </li>
      </ul>
  </nav>
</div>

</div>
@endsection