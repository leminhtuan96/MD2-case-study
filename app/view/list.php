<a href="index.php?page=note-create">Create</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>type_id</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($notes as $key => $note): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $note->title ?></td>
            <td><?php echo $note->content ?></td>
            <td><?php echo $note->type_id ?></td>
            <td onclick="return confirm('Are you sure?')"><a href="index.php?page=note-delete&id=<?php echo $note->id ?>">Delete</a></td>
            <td><a href="index.php?page=note-detail&id=<?php echo $note->id ?>">Detail</a></td>
            <td><a href="index.php?page=note-update&id=<?php echo $note->id ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>