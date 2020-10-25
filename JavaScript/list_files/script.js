var list_files = function(files) {
    // console.log(files)
    var insert = document.getElementById('contents');
    for (let i = 0; i<files.length; i++) {
        // console.log(files.i)
        fContents = files[i].name;
        console.log(fContents);
        path = files[i].webkitRelativePath;
        console.log(path);
        insert.insertAdjacentHTML('afterbegin', '<p class="br">'+path+'</p>');
    }
}