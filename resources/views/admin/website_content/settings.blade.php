@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-6">
            <h1 class="dashboard-title">App Settings</h1>
        </div>
        {{-- <div class="col-6 dashboard-title text-end">
                    <button data-bs-toggle="modal" data-bs-target="#categoryAddModal" class="btn-outline">+ Add New</button>
                </div> --}}
    </div>
</div>

<div class="container-fluid section-padding">

    <div class="row mb-5 g-4">


        <div class="col-12">
            <!--   <div class="table-search">
                        <div class="row">
                            <div class="col-6">
                                <label for="showTable">Show:</label>
                                <select name="showTable" id="showTable">
                                    <option value="5">5 Entries</option>
                                    <option value="10">10 Entries</option>
                                    <option value="15">15 Entries</option>
                                </select>
                            </div>
                            <div class="col-6 text-end">
                                <div class="input-box">
                                    <input type="text" placeholder="Search Entries">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path fill="#BDBDBD"
                                                d="M21.71 20.29L18 16.61A9 9 0 1016.61 18l3.68 3.68a1 1 0 001.42 0 1 1 0 000-1.39zM11 18a7 7 0 110-14 7 7 0 010 14z" />
                                        </svg>

                                    </span>
                                </div>
                            </div>
                        </div>

                    </div> -->



            <div class="card summary-card" style="width: 100%">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle text-center dashboardTable customTable" id="category_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--
                                            	@if(!empty($contents))

                                            	@foreach($contents as $content) --}}

                                        <tr class="item{{ $content->id }}">
                                            <td><img class="img-fluid" src="{{asset('backend/'.$content->logo)}}" style="width: 116px; height: 22px;"></td>
                                            <td>{{$content->app_name}}</td>

                                            <td class="actionBtn text-center">

                                                <button onclick='editContent({{ $content->id }})'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="#BDBDBD" d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                                    </svg>

                                                </button>

                                            </td>
                                        </tr>
                                        {{-- @endforeach
                                                @endif --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>





</div>
<div class="modal custom-modal fade" id="contentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="contentEditForm">@csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit App Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#BDBDBD" d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="hidden_id" name="hidden_id" value="">
                    <div class="row">
                        <div class="col-12 form-input">
                            <label for="name">App Name</label>
                            <input class="form-control" type="text" placeholder="Category Name" id="edit_name" name="app_name">
                        </div>

                        <div class="col-12 form-input">
                            <label for="logo">Logo(174*33)</label>
                            <input type="file" name="logo" class="dropify" id="edit_logo" accept="image/*" />
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>




@endsection

@section('pageScripts')
<script>
    var toastMixin = Swal.mixin({
        toast: true,
        title: 'General Title',
        animation: false,
        position: 'top-right',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    var config = {
        routes: {
            edit: "{!! route('settings.edit') !!}",
            update: "{!! route('settings.update') !!}",
        }
    };

    var imagesUrl = '{!! URL::asset(' / backend / ') !!}';
    $(document).ready(function() {
        // data table
        $('#category_table').DataTable({
            "ordering": false,
        });
        // dropify table
        $('.dropify').dropify();
    });


    // add form validation
    $(document).ready(function() {


        $("#contentEditForm").validate({
            rules: {
                app_name: {
                    required: true,
                    maxlength: 50,
                }
            },
            messages: {
                app_name: {
                    required: 'Please insert  app name',
                }

            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                label.insertAfter(element);
            },
        });
    });
    //end
    //end




    // edit category methods
    function editContent(id) {

        $.ajax({
            url: config.routes.edit,
            method: "POST",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(response) {
                if (response.success == true) {

                    $('#edit_name').val(response.data.app_name);

                    if (response.data.logo) {
                        var img_url = imagesUrl + '/' + response.data.logo;

                        $("#edit_image").attr("data-height", 100);
                        $("#edit_image").attr("data-default-file", img_url);

                        $(".dropify-wrapper").removeClass("dropify-wrapper").addClass("dropify-wrapper has-preview");
                        $(".dropify-preview").css('display', 'block');
                        $('.dropify-render').html('').html('<img src=" ' + img_url + '" style="max-height: 100px;">')
                    } else {
                        $(".dropify-preview .dropify-render img").attr("src", "");
                    }



                    $('#edit_image').dropify();
                    $('#hidden_id').val(response.data.id);

                    $('#contentEditModal').modal('show');

                }

            } //success end
        }); //ajax end

        $(document).off('submit', '#contentEditForm');
        $(document).on('submit', '#contentEditForm', function(event) {
            event.preventDefault();
            $.ajax({
                url: config.routes.update,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(response) {

                    if (response.success == true) {


                        $('.item' + response.data.id).replaceWith(`<tr class='item${response.data.id}'> <td><img class="img-fluid" src="${imagesUrl+'/'+response.data.logo}" style="width: 116px; height: 22px;"></td><td>${response.data.app_name}</td><td class="actionBtn text-center">
                                                        <button  onclick='editContent(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="none" viewBox="0 0 24 24">
                                                                <path fill="#BDBDBD"
                                                                    d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                                            </svg>

                                                        </button></td></tr>`)
                        $('.app_logo').attr('src', imagesUrl + '/' + response.data.logo);
                        if (response.data.message) {
                            $('#contentEditModal').modal('hide');
                            toastMixin.fire({
                                icon: 'success',
                                animation: true,
                                title: response.data.message,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#contentEditForm').trigger('reset');

                        }

                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: response.data.error,
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }

                }, //success end

                // beforeSend: function() {
                //     $('#updateEducationInfo').modal('hide');
                //     $('.ajax_loader').show()
                // },
                // complete: function() {
                //     $('.ajax_loader').hide();
                // }
            });
        });


    }




    //end
</script>


@endsection
