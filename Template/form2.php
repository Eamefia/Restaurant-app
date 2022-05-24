
<html>
<body>
<form action="up.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <label>write if you have the following below and if you do not have just write <h5>none</h5></label>
    <hr>
    <label>Kitchen</label>
    <input type="text" name="kitchen" placeholder="eg. general kitchen...">
    <label>Bed</label>
    <input type="text" name="bed" placeholder="eg. Bed and Matress...">
    <label>TV/Game room</label>
    <input type="text" name="tv" placeholder="eg. TV Room...">
    <label>Wardrobe</label>
	<input type="text" name="wardrobe" placeholder="eg. Wardrobes in bedroom...">
    <label>Studyroom</label>
	<input type="text" name="study" placeholder="eg. Study room...">
    <label>Stand by generator</label>
	<input type="text" name="plant" placeholder="eg. Stand by plant...">
    <label>Other Details</label>
	<textarea type="text" name="details"></textarea>
    <button type="submit" name="child">send all</button>

</form>

</body>
</html>
