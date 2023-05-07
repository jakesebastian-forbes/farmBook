



function submit_comment(post_id,user_id){


    // console.log(user_id,",",post_id.substr(9, 45),",",toggle)
    var data = $("#write_comment_" + post_id)[0].value
  
    console.log("post_id", post_id)
    console.log("data" , data)
    if(data == ""){

    }else{
    try {
        
       
 


       $.post({
                type: "POST",
                url: "../php_func\\add_comment.php",
                data: 
                {
                    user_id : user_id,
                    post_id : post_id,
                    data : data

                },
                cache: false,
                success: function(data) {
                console.log("data : " , data, post_id);

                $("#write_comment_" + post_id)[0].value = ""
                
                    // Get the element
                    var elem = document.querySelector('.comment.d-flex.align-items-center.p-2');

                    // Create a copy of it
                    var clone = elem.cloneNode(true);
                    
                    // Inject it into the DOM
                    $("#write_comment_" + post_id).parent().parent().before(clone);

                },
                error: function(xhr, status, error) {
                console.error(xhr);
                }
                }
      );
    } catch (error) {
        console.log("error :", error);
        
    }
}

    //    console.log('di na mahal');
        

}



// var comment_box = document.getElementsByClassName("comment-write");
// comment_box.addEventListener("keyup", function(event) {
//     if (event.key === "Enter") {
//         // Do work
//         console.log("ENTER")
//     }
// });