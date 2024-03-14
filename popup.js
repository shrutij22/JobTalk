   let modal = document.querySelector('.modal-wrapper');
     let btn = document.querySelector('button');
     let close_btn = document.querySelector('.modal-close');

     btn.addEventListener('image',display);

    //  display the modal after 3 second of page load

    setTimeout(()=>{
        display();
    },3000)

     function display(){
         modal.style.display = 'block';
     }

    //  when the user clicks on X button,close the modal
    close_btn.addEventListener('click',hide);

    // when user clicks anywhere outside the modal, close modal
    window.addEventListener('click',(event)=>{
        if(event.target == modal){
            modal.style.display = 'none';
        }
    });

    function hide(){
        modal.style.display = 'none';

    }
