<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music</title>

    @include('layouts.app')

</head>

<body>

    <div class="global-container d-flex flex-column w-100 align-items-center">

        @include('layouts.navbar')
        @include('layouts.sidebar')


        <div class="pages-row d-flex w-100 flex-wrap p-2  mb-3 align-items-center rounded">


            {{-- CONTENT START HERE --}}

            <div class="transaction-container shadow p-3 rounded-1 d-flex flex-wrap m-auto gap-2 w-100">


                <div class="pages-header-box d-flex flex-column align-items-center w-100 position-relative p-3 mb-2">

                    {{-- @include('layouts.arrow-icon') --}}
                    <h4 class="text-center w-100 mb-4">Transactions</h4>
                </div>

                          <div class="mb-3 d-flex gap-2 w-100 flex-wrap align-items-center">

                             <div class="">
                                <input type="date" name="transaction_date" class=" input-field w-100"
                                    placeholder="">
                            </div>

                        <form class="d-flex " role="search">
                            <input class="input-field p-2 me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn search-btn" type="submit">Search</button>
                        </form>

                    </div>

                <div class="table-wrapper overflow-scroll  w-100">

                    {{-- ------TABLE----------- --}}
                <table class="table table-striped  caption-top  rounded">

                    <thead>
                        <tr>
                            <th>Trans ID</th>
                            <th>Data</th>
                            <th>Time</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="border-0">
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                        <tr>
                            <td>467463</td>
                            <td>03-05-2025</td>
                            <td>03:55pm</td>
                            <td>$ <span>50,000</span> </td>
                            <td class="trans-success">Completed</td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <div class="table-scroll-arrows-wrapper w-100 d-flex align-items-center justify-content-between">
                    <img src="{{asset('icons/arrow-left.svg')}}" alt="">
                    <img src="{{asset('icons/arrow-right.svg')}}" alt="">
                </div>

            </div>


            {{-- @include('layouts.footer-copyright') --}}

        </div>


</body>

</html>
