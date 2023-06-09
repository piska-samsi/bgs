<?php
$id = $_POST['id'];
$link = mysqli_connect("localhost", "root", "", "bgs");
mysqli_set_charset($link, "utf8");
$res = mysqli_query($link, "SELECT * FROM books WHERE inv = '$id'");
$result = mysqli_fetch_array($res)


?>


<div id="OpenModal3" class="modalDialog" >
    <div style="width: 70%; height: 80%;">
      <a href="#close" title="Закрыть" class="close">X</a>
      <h1 style="margin-bottom: 5px;"><center>Редактировать книгу</center></h1><br>

      <form style="width: 49%; background-color: #f9f9ff34;" class="floated"> 
     <h2 style="margin-bottom: 5px; margin-left: 47%;">ДО</h2>
      <table class='table1'>
	<tbody>
		<tr class='tr1'>
			<td class='td1'><?php echo $result["title"]?></td>
		</tr>
		<tr class='tr1'>
			<td class='td1'><?php echo $result["author"] ?></td>
		</tr>
		<tr class='tr1'>
			<td class='td1'><?php echo $result["year"] ?></td>
		</tr>
		<tr class='tr1'>
			<td class='td1'><?php echo $result["about"] ?></td>
		</tr>
		<tr class='tr1'>
			<td class='td1'><?php echo $result["bo"] ?></td>
		</tr>
	</tbody>
</table>
      </form>
      <div class="vl"></div>
      
      <form style="width: 49%; background-color: #f9f9ff34;" class="floated" id="edit-form">
      <h2 style="margin-bottom: 5px; margin-left: 43%;">ПОСЛЕ</h2>
      <table class='table1' >
	<tbody>
		<tr class='tr1'>
			<td class='td1' style="padding: 0px;"><input type="text" style="width: 100%; max-width: 100%;" class="form-control" name="title" id="name"
                                        placeholder="Название"></td>
		</tr>
		<tr class='tr1'>
			<td class='td1' style="padding: 0px;"><input type="text" style="width: 100%; max-width: 100%;" class="form-control" name="author" id="phone"
                                        placeholder="Автор"></td>
		</tr>
		<tr class='tr1'>
			<td class='td1' style="padding: 0px;"><input type="text" style="width: 100%; max-width: 100%;" class="form-control" name="year" placeholder="Год"></td>
		</tr>
		<tr class='tr1'>
			<td class='td1' style="padding: 0px;"><textarea name="about" style="margin-bottom: -23px;" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Описание книги"></textarea></td>
		</tr>
		<tr class='tr1'>
			<td class='td1' style="padding: 0px;"><textarea name="bo" style="margin-bottom: -2px;" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Библиографическое описание"></textarea></td>
		</tr>
	</tbody>
</table>
      </form>
      <button type="submit"  class="btn medica-btn btn-3 mt-3">Редактировать книгу</button>

      <?php
if (isset($_POST['submit'])){


$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");

        $bo = $_POST['bo'];
        $title = $_POST['title'];
		$author = $_POST['author'];
        $year = $_POST['year'];
        $about = $_POST['about']; 
              
        
        
        $sql = "UPDATE books SET title = '$title', author = '$author', year = '$year', about  = '$about' WHERE inv = '$id'";   
mysqli_query($link, $sql);

   
}
?>


    </div>
  </div>