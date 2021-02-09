<!DOCTYPE html>

<html>
<head>
<title>Easy CRUD</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
@yield('content')
</div>
</body>
<script>
$(document).ready(function () {
/* When click New customer button */
$('#new-article').click(function () {
$('#btn-save').val("create-article");
$('#article').trigger("reset");
$('#articleCrudModal').html("Add New Article");
$('#crud-modal').modal('show');
});
/* Edit customer */
$('body').on('click', '#edit-article', function () {
var customer_id = $(this).data('id');
$.get('articles/'+customer_id+'/edit', function (data) {
$('#articleCrudModal').html("Edit article");
$('#btn-update').val("Update");
$('#btn-save').prop('disabled',false);
$('#crud-modal').modal('show');
$('#art_id').val(data.id);
$('#nom_article').val(data.nom_article);
$('#description_technique').val(data.description_technique);

})
});
/* Show customer */
$('body').on('click', '#show-article', function () {
$('#articleCrudModal-show').html("Article Details");
$('#crud-modal-show').modal('show');
});
/* Delete customer */
$('body').on('click', '#delete-article', function () {
var article_id = $(this).data("id");
var token = $("meta[name='csrf-token']").attr("content");
confirm("Are You sure want to delete !");
$.ajax({
type: "DELETE",
url: "/todolist/public/articles/"+article_id,
data: {
"id": article_id,
"_token": token,
},
success: function (data) {
$('#msg').html('Article entry deleted successfully');
$("#article_id_" + article_id).remove();
},
error: function (data) {
console.log('Error:', data);
}
});
});
});
</script>
</html>