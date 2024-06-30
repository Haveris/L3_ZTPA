<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               
     
                <div class="p-6 text-gray-900">
                    {{ __("Order a service") }}
                </div>
         
                <?php
                    $servername = "HAVERIS-PC\MSSQLSERVER01";
                    $database = "lab3_db";
                    $username = "";
                    $password = "";
                    // Create a connection
                    $conn = mysqli_connect($servername, $username, $password, $database);
                    // Check the connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    echo "Connected successfully";
                    $sql = "INSERT INTO order (Username, NumberOfModules, Language)
                    VALUES ('patryk.banaszak', '5', 'C#')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                ?>

               
               
            </div>
        </div>
    </div>
</x-app-layout>

