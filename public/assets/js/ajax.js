$(".save-data").click(function(event){
    event.preventDefault();

    let name = $("input[name=name]").val();
    let _token   = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: "",
      type:"POST",
      data:{
        name:name,
        _token: _token
      },
      success:function(response){
        console.log(response);
        if(response) {
          $('.success').text(response.success);
          $("#ajaxform")[0].reset();
          $(".item-chat").append("<div class='comments'>" + response.data.name +"</div>");
        }
      },
     });
});