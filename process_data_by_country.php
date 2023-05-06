<!-- This file holds a function that dysplays a table on by_country.php -->

<?php
    
    function getData() {
        
        // PHP code to retrieve data from API and display in table
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $country = $_POST['country'];

            // Initiate curl session in a variable (resource)
            $curl_handle = curl_init();

            // Construct API URL
            $url = "https://api.covid19api.com/country/{$country}?from={$start_date}T00:00:00Z&to={$end_date}T00:00:00Z";

            // Set the curl URL option
            curl_setopt($curl_handle, CURLOPT_URL, $url);

            // This option will return data as a string instead of direct output
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

            // Execute curl & store data in a variable
            $curl_data = curl_exec($curl_handle);

            curl_close($curl_handle);

            // Decode JSON into PHP array
            $response_data = (array) json_decode($curl_data);

            // The echo commands below will dysplay some html table on the page
            echo "
                <div class='relative overflow-x-auto shadow-md sm:rounded-lg'>

                    <table class='w-full text-sm text-left text-gray-500 dark:text-gray-400'>
                        <thead class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
                            <tr>
                                <th scope='col' class='px-6 py-3 bg-gray-50 dark:bg-gray-800'>
                                    Date
                                </th>
                                <th scope='col' class='px-6 py-3'>
                                    Total Confirmed
                                </th>
                                <th scope='col' class='px-6 py-3 bg-gray-50 dark:bg-gray-800'>
                                    Total Deaths
                                </th>
                                <th scope='col' class='px-6 py-3'>
                                    Case Fatality Rate (CFR)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
            ";

            // Loops through the response data and dysplay values in the table
            foreach ($response_data as $value){

                $date_formatted = htmlspecialchars(substr($value->Date,0,10)); // foramts date
                $cfr = round(($value->Deaths / $value->Confirmed), 3); // calculates cfr

                echo "
                    <tr class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
                        <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800'>
                            $date_formatted
                        </th>
                        <td class='px-6 py-4'>
                            $value->Confirmed
                        </td>
                        <td class='px-6 py-4 bg-gray-50 dark:bg-gray-800'>
                            $value->Deaths
                        </td>
                        <td class='px-6 py-4'>
                            $cfr
                        </td>
                    </tr>
                ";
            }

            echo "
                            </tbody>
                        </table>
                    </div>
            ";
        }
    }
?>