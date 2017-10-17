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
    <input type="text" name="firstname">
    <br> Last name:
    <br>
    <input type="text" name="lastname">
  </form>
  <button onclick="createDir()"> Create Directory </button>
  <button onclick="createFile()"> Create File </button>
</body>

</html>