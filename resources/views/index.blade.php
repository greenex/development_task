<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 40px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {

                display: flex;

            }

            .position-ref {
                position: relative;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div>
                    <h3>Average tax rate of the country: <b>{{$averageTaxRate}}</b></h3>
                </div>
                <div>
                    <h3>Overall collected taxes of the country: <b>{{$overallCollectedAmount}}</b></h3>
                </div>
                <div>
                    <h3>Overall amount of taxes collected per state:</h3>
                    <table border="1">
                       <tr>
                           <th>State</th>
                           <th>Amount</th>
                       </tr>
                        @foreach($collectedAmountPerState as $state)
                            <tr>
                                <td>{{$state->state_name}}</td>
                                <td>{{number_format($state->collected_tax, 2, '.', ',')}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div>
                    <h3>Average amount of taxes collected per state:</h3>
                    <table border="1">
                        <tr>
                            <th>State</th>
                            <th>Avg. Amount</th>
                        </tr>
                        @foreach($averageCollectedAmountPerState as $state)
                            <tr>
                                <td>{{$state->state_name}}</td>
                                <td>{{number_format($state->avg_collected_tax, 2, '.', ',')}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div>
                    <h3>Average tax rate per state:</h3>
                    <table border="1">
                        <tr>
                            <th>State</th>
                            <th>Avg. Amount</th>
                        </tr>
                        @foreach($averageTaxRatePerState as $state)
                            <tr>
                                <td>{{$state->state_name}}</td>
                                <td>{{number_format($state->avg_tax_rate, 2, '.', ',')}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
