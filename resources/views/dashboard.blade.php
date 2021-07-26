<x-layout>

    <div class="text-left">
        <div>
            <table class="content-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Year</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student )
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->RollNo }}</td>
                        <td>{{ $student->Contact }}</td>
                        <td>{{ $student->Email }}</td>
                        <td>{{ $student->Year }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px auto auto;
            width: 95%;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;

        }

        .content-table th, .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        
    </style>
</x-layout>
