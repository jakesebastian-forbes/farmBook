



function submit_comment(post_id,user_id){


    // console.log(user_id,",",post_id.substr(9, 45),",",toggle)
    var data = $("#write_comment_" + post_id)[0].value
    var comment = data;
  
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
                console.log("data : " , data);

                $("#write_comment_" + post_id)[0].value = ""
                
                    // Get the commentsection
                    var elem = $("#comment_section_"+post_id)[0].children[1];
                    // generate container
                    var cont =  $($.parseHTML('<div class="comment d-flex align-items-center p-2" id="comment_'+data+'"></div>'));
                    $(elem).append(cont);
                    var img = $("#write_comment > #profile_icon > img")[0];
                    // var img2 = img[0];
                    // $("#write_comment > #profile_icon")[0].appendTo(img2)
                    // cont.append($.parseHTML(""+img2));
                    $(cont).prepend(img);
                    
                    //another div
                    var time = Date.now();

                    var div2 = '<div class="p-3 rounded comment__input w-100" id ='+time+'> </div>'
                    // $("#"+time+" p-3.rounded.comment__input.w-100").append(div2);

                  
                    var name =$("#big_name")[0].innerText;
                    var name_cont ='<p class="fw-bold m-0">'+name+'</p>';
                    
                    
                    console.log(name);
                    console.log(name_cont);

                    $(div2).append($.parseHTML(name_cont));

                    // Create a copy of it
                    // var clone = elem.cloneNode(true);
                    
                    // Inject it into the DOM
                   
                    $

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