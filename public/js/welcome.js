document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});


function saveNewPicture() {
    const name = document.getElementById('pic-name');
    const path = document.getElementById('pic-file').files[0].name;
    console.log(path);
    const description = document.getElementById('pic-description');
    axios.post('localhost:8000/api/pictures',
        {
            name: name,
            path: path,
            description: description
        },
        {
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            }
        }
    ).then((res) => {
        console.log(res);
    });
}
