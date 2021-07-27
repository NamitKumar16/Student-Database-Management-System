@extends('layouts.app')
<x-layout>
    @section('content')


        {{-- AddStudentModal --}}
        <div class="modal fade" id="AddStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" class="name form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Roll No</label>
                            <input type="text" class="rollno form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Contact</label>
                            <input type="text" class="contact form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" class="email form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Year</label>
                            <input type="text" class="year form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add_student">Save</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End - AddStudentModal --}}

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Students Data
                                <a href="#" data-bs-toggle="modal" data-bs-target="#AddStudentModal"
                                   class="btn btn-primary float-end btn-sm">Add Student</a>
                            </h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('scripts')
        <script>
            $(document).ready(function () {

                $(document).on('click', '.add_student', function (e) {
                    e.preventDefault();
                    var data = {
                        'name': $('.name').val(),
                        'rollno': $('.rollno').val(),
                        'contact': $('.contact').val(),
                        'email': $('.email').val(),
                        'year': $('.year').val()
                    }
                    // console.log(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/student",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            console.log(response);
                        }
                    })
                });
            });
        </script>
    @endsection
</x-layout>
