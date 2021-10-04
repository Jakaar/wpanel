import Axios from "axios"

// $(document).ready(function(){
//     Axios.post('/lang/kr').then((resp)=> {
//         console.log(resp);
//     })
// })


// contact us submit START
$('.contactSubmit').on('click', ()=>{
    const data = {
        title: $('#title').val(),
        email: $('#email').val(),
        phone:$('#phone').val(),
        short_content: $('#short_content').val(),
        address:$('#address').val(),
        facebook:$('#facebook').val(),
        youtube:$('#youtube').val(),
        twitter:$('#twitter').val(),
        linkedin:$("#linkedin").val()
    }
    Axios.post('contact_us', data).then((resp)=>{
        console.log(resp);
    }).catch((err)=>{
        alert('error')
    })
})
// contact us submit END
