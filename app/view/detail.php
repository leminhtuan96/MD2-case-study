<table border="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Type_id</th>
    </tr>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $note->title?></td>
        <td><?php echo $note->content?></td>
        <td><?php echo $note->type_id?></td>
    </tr>
</table>