@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')


<div class="tbl-pagination">
<ul class="pagination">
<li class="page-item"><a class="page-link" href="#">
 @include('degree.create')
 </a></li>
</ul>
 </div> 
<script>
$(document).ready(function(){
 
 $(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });
 
 function fetch_data(page)
 {
  $.ajax({
   url:"get_ajax_data?page="+page,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>