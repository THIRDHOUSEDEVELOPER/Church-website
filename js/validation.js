function validateForm() {

    //store the data  of  inputs
    var title=document.getElementById("title").value;
    var subtitle=document.getElementById("subtitle").value;
    var comment=document.getElementById("comment").value;
    

    //Quick validation
if(title==="") {
    window.alert("please enter title");
    
    }else if(subtitle==="") {
        window.alert("please enter subtitle");
        
        }else if(Comment==="") {
            window.alert("please comment");
            
            };
                return; 
        }

        //calling from the fuction
        document.getElementById("submitbtn").onclick = function() {validateForm();
                };