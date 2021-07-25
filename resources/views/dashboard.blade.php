<x-layout>
    <style>
        table, tr, td, th {
            border-width: 2px;
            color: #4a5568;
            padding: 12px;
        }
        table{
            width: 100%
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class=" text-center mt-5">
        <div>
            <table class="center">
                <tr>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Year</th>
                </tr>
                @foreach($students as $student )
                    <tr>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->RollNo }}</td>
                        <td>{{ $student->Contact }}</td>
                        <td>{{ $student->Email }}</td>
                        <td>{{ $student->Year }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-layout>
