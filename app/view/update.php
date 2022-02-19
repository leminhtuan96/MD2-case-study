<form action=""method="post">
    <input type="text" name="title" value="<?php echo $note->title?>">
    <input type="text" name="content" value="<?php echo $note->content?>">
    <input type="text" name="type_id" value="<?php echo $note->type_id?>">
    <button>Update</button>
</form>