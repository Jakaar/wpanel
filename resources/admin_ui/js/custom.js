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
        short_content: $('#short_content').val(),
    }
    Axios.post('contact_us', data).then((resp)=>{
        console.log(resp);
    }).catch((err)=>{
        alert('errer')
    })
})
// contact us submit END
