



function toggle_like(post_id,toggle,user_id){


    console.log(user_id,",",post_id.substr(9, 45),",",toggle)

    if(toggle == "false"){
       $("#"+post_id).children().children()[0].style.color = 'blue';
       $("#"+post_id).children().children()[1].style.color = 'blue';
       $("#"+post_id).children().children()[1].innerText = 'Liked';
       $("#"+post_id).attr('value','true');


       $.post({
                type: "POST",
                url: "../php_func\\like_post.php",
                data: 
                {
                    user_id : user_id,
                    post_id : post_id.substr(9, 45),
                    data : "LIKE"

                },
                cache: false,
                success: function(data) {
                console.log("data : " , data);
                
                },
                error: function(xhr, status, error) {
                console.error(xhr);
                }
                }
      );

    //    console.log('di na mahal');
    }else{

        $("#"+post_id).children().children()[0].style.color = 'black';
        $("#"+post_id).children().children()[1].style.color = 'black';
        $("#"+post_id).children().children()[1].innerText = 'Like';
        $("#"+post_id).attr('value','false');

        // console.log("iniwan si karen");

        $.post({
            type: "POST",
            url: "../php_func\\unlike_post.php",
            data: 
            {
                user_id : user_id,
                post_id : post_id.substr(9, 45)

            },
            cache: false,
            success: function(data) {
            console.log("data : " , data);
            
            },
            error: function(xhr, status, error) {
            console.error(xhr);
            }
            }
  );
    } 

}