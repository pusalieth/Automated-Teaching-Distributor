<!DOCTYPE HTML>
<html>

<script>
  require 'sinatra'
  require 'json'

  post '/payload'
  do
    push = JSON.parse(request.body.read)
  puts "I got some JSON: #{push.inspect}"
  end
</script>


// Javascript using JSZip to create directories
echo "
<script src="https://stuk.github.io/jszip/dist/jszip.min.js" type = 'text/javascript'>
  if (window.File && window.FileReader && window.FileList){
    // APIs supported in the browser
  } else {
    alert('The File Upload APIs are not fully supported in this browser');
  }

  var JSZip = require("jszip");
  var zip = JSZip();

  homeworkFolder = zip.folder("Homework")
  honorsFolder = zip.folder("Honors")
  zip.folder("Lecture Audio")
  zip.folder("Lecture Slides")
  zip.folder("Course Information")



</script>;"

<script>
  function createDir() { < button type = "button" > Click Me! < /button>
    <?php mkdir(test); ?>
    alert('Dir created');
  }

  function createFile() {
    alert(htmlString);
    alert('create File');
  }
</script>


<body bgcolor=white>

  <table border="0" cellpadding="10">
    <tr>
      <td>
        <img src="images/springsource.png">
      </td>
      <td>
        <h1>Sample "Hello, World" Application</h1>
      </td>
    </tr>
  </table>

  <form>
    First name:
    <br>
    <input type="file" id="files" name="files[]" multiple />
    <output id="list"></output>
    echo "<script>
        function handleFileSelect(evt) {
          var files = evt.target.files; // FileList object

          // files is a FileList of File objects. List some properties.
          var output = [];
          for (var i = 0, f; f = files[i]; i++) {
            output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                        f.size, ' bytes, last modified: ',
                        f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                        '</li>');
          }
          document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
        }

        document.getElementById('files').addEventListener('change', handleFileSelect, false);
      </script>"
    <br> Last name:
    <br>
    <input type="text" name="lastname">
  </form>
  <button onclick="createDir()"> Create Directory </button>
  <button onclick="createFile()"> Create File </button>
</body>

</html>
