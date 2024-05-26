<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="csrf-token"]').val()
        },
    });
});
var endday = "{{ Carbon\Carbon::now()->addDays(2)->format('d F Y h:i:s') }}";
ShowCart();
function ShowCart(){
    $.ajax({
        type: 'post',
        url: '{{ route('home.store') }}',
        headers: {
            'X-CSRF-TOKEN': $('input[name="csrf-token"]').val()
        },
        success:function(res){
            $('.showqtycart').html(res.count);
        }
    })
}
$(document).on('click','.add_cart',function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    var qty = $('.hidden_proid'+id).val();

    $.ajax({
        type: 'get',
        url: '{{ route('home.create') }}',
        data: {
            id:id,
            qty:qty
        },
        success:function(res){
            if (res.action == 'login') {
                location.replace(res.url);
            }
            if (res.action == 'add') {
                alert(res.message);
                ShowCart();
            }
        }
    });
});
</script>