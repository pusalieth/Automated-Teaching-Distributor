function createDir() {
    var myObject, newfolder;
    myObject = new ActiveXObject("Scripting.FileSystemObject");
    newfolder = myObject.CreateFolder("/home/jake/GitHub/Automated-Teaching-Distributor");
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