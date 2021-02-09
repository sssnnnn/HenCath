

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="" id="editPost" data-toggle="modal" data-target='#practice_modal' data-id="{{ $item->id }}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="modal fade" id="practice_modal">
                        <div class="modal-dialog">
                           <form id="postdata">
                                <div class="modal-content">
                                <input type="hidden" id="color_id" name="color_id" value="">
                                <div class="modal-body">
                                    <input type="text" name="title" id="title" value="" class="form-control">
                                </div>
                                <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
                            </div>
                           </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#color_id").val();
    var title = $("#title").val();
   
    $.ajax({
      url: 'color/' + id,
      type: "POST",
      data: {
        id: id,
        title: title,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#postdata').trigger("reset");
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#editPost', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('color/' + id + '/edit', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#practice_modal').modal('show');
         $('#color_id').val(data.data.id);
         $('#title').val(data.data.title);
     })
});

}); 
</script>
@endpush 