
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
 $('body').on('click','#saveEmail', function(){ 
    var email  = $('.email').val(); 
    $.ajax({
        type: "post",
        url: "{{ route('save.email') }}",    
        data: { 
            "_token": "{{ csrf_token() }}",
            email:email
        },
        success: function(response){
            if(response.code == 200){
               $('.success').text(response.success);
                setTimeout(function(){
                window.location.reload();
                }, 1500);
            }else{  
              $('.data').text(response);
            }
        }
    }); 
 });


</script>