@extends('layouts.master')
@section('content')

<div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="dashboard-title">User's Feedback</h1>
                </div>
                
            </div>
        </div>

        <div class="container-fluid section-padding">

            <div class="row mb-5 g-4">


                <div class="col-12">
               



                    <div class="card summary-card" style="width: 100%">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-borderless align-middle text-center dashboardTable customTable" id="userTable">
                                            <thead>
                                                <tr >
                                                   
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if(!empty($feedbacks))

                                                @foreach($feedbacks as $feedback)

                                                 <tr class="item{{ $feedback->id }}">
                                                   


                                                   
                                                    <td>{{$feedback->name}}</td>
                                                    <td>{{$feedback->email}}</td>
                                                   
                                                    <td class="actionBtn text-center">
                                                        <button 
                                                          onclick='viewUser({{ $feedback->id }})' ><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="none" viewBox="0 0 24 24">
                                                                <path fill="#BDBDBD"
                                                                    d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                                            </svg>
                                                        </button>
                                                       
                                                        <button  onclick='deletePerson({{ $feedback->id }})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="none" viewBox="0 0 24 24">
                                                                <path fill="#EB5757"
                                                                    d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                                                            </svg>

                                                        </button>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                          {{--   <tfoot>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>






     <div class="modal custom-modal view-modal fade" id="userViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Feedbacks Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#BDBDBD"
                                d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        
                        <div class="col-lg-6">
                            <h6>Name</h6>
                            <h5 id="view_name"></h5>
                        </div>
                        
                        <div class="col-lg-6">
                            <h6>Email Address</h6>
                            <h5 id="view_email"></h5>
                        </div>
                        
                        <div class="col-12">
                            <h6>Feedbacks</h6>
                            <h5 id="view_feedbacks"></h5>
                        </div>
                    </div>
                </div>
            </div>
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
                view: "{!! route('user.feedback.view') !!}",
                delete: "{!! route('user.feedback.delete') !!}",  
            }
        };
    $(document).ready(function() {
            // data table
            $('#userTable').DataTable({
                "ordering": false,
            });
        });
   

    
      
        //end

        //request end
         function viewUser(id){

            $.ajax({
              url:config.routes.view,
              method:"POST",
              data:{
                id:id,
                _token:  "{{ csrf_token() }}"
              },
             dataType:"json",
             success:function(response){
               if (response.success==true) {

                $('#view_name').text(response.data.name);
                
               
                // $('#view_person').text(response.data.family_name);
                $('#view_email').text(response.data.email);
                $('#view_feedbacks').text(response.data.feedbacks);
                
                
                
                // $('#hidden_id').val(response.data.id);
                  
                $('#userViewModal').modal('show');

                }

               }//success end
            });//ajax end

        }


      

       
  // // delete 

    function deletePerson(id) {
        // alert(id)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: config.routes.delete,
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'JSON',
                    success: function(response) {

                         if (response.success === true) {
                            Swal.fire(
                                'Deleted!',
                                "" + response.data.message + "",
                                'success'
                            )
                            // swal("Done!", response.data.message, "success");
                            $('#userTable').DataTable().row('.item' + response.data.id).remove()
                                .draw();
                        } else {
                            Swal.fire("Error!", "Can't delete item", "error");
                        }
                    }
                });

            }
        })


    }


   


</script>


@endsection