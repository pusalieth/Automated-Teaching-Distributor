function createDir() {
    var htmlString = "<?php mkdir(\"testing\"); ?>";
    alert(htmlString);
    alert('Dir created');
}

function createFile() {
    var htmlString = "<? php $file = fopen(\"test.txt\",\"w\"); echo fwrite($file,\"Hello World. Testing!\"); fclose($file); ?>";
    alert(htmlString);
    alert('create File');
}

function addHeader() {
    var myHeading = document.querySelector('h1');
    myHeading.textContent = 'Hello world! Script Succesful';
}