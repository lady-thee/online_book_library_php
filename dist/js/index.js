// $(function(){
//     $("#show-modal").click(function(){
//         console.log("clicked");
//     })
// })


    $(document).ready(function(){
        $(".registerbox").hide();
        $(".neww").click(function(){
            $(".loginbox").hide();
            $(".registerbox").fadeIn(500);
        });
        $(".member").click(function(){
            $(".registerbox").hide();
            $(".loginbox").fadeIn(500);
        });
    });

    $(document).ready(function(){
        $(".registerbox").hide();
        $(".neww").click(function(){
            $(".loginbox").hide();
            $(".registerbox").fadeIn(500);
        });
        $(".member").click(function(){
            $(".registerbox").hide();
            $(".loginbox").fadeIn(500);
        });
    });

    
    //function that will show the button
   $(window).scroll(function () {
       if ($(this).scrollTop() > 20) {
           $('#mybtn').fadeIn('slow');
       }else{
           $('#mybtn').fadeOut('slow');
       }
   });

   //scroll to top

   $('#mybtn').click(function () {
       $('html, body').animate({ scrollTop: 0}, 'slow');
       return false;
   })

   signupbut = document.querySelector("#show-modal");
       if (localStorage.getItem("loginItems")) {
           signupbut.style.display = "none";
        }else{
            document.querySelector("#image").style.display = "none";
        }

    document.getElementById("register").addEventListener("submit", e => {
        e.preventDefault();
        name = e.target[0].value;
        email = e.target[1].value;
        pass = e.target[2].value;
     
       var jsonDetails = "{name:"+name+",email:"+email+",password:"+pass+"}";
       localStorage.setItem("loginItems",jsonDetails)
        
       document.location = document.documentURI;
        console.log(name,email,pass)
    })
   window.onload = function() {

       console.log(localStorage.getItem("loginItems"));
   }
    