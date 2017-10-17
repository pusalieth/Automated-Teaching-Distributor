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

<script>
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
</script>

<head>
  <title>Sample "Hello, World" Application</title>
</head>


<button onclick="createDir()"> Create Directory </button>
<button onclick="createFile()"> Create File </button>


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

  <p>This is the home page for the HelloWorld Web application. </p>
  <p>To prove that they work, you can execute either of the following links:
    <ul>
      <li>To a
        <a href="hello.jsp">JSP page</a>.
        <li>To a
          <a href="hello">servlet</a>.
    </ul>
  </p>
</body>

</html>