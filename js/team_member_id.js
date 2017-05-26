$('.modallink').click(function(){
    var member_id = $(this).attr('data-content');

    $.ajax({url:"member.php?member_id="+member_id,cache:false,success:function(result){
        $(".modal-content").html(result);
    }});
}); 

