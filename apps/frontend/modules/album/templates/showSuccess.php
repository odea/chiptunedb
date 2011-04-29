<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $album->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $album->getTitle() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $album->getImage() ?></td>
    </tr>
    <tr>
      <th>Year:</th>
      <td><?php echo $album->getYear() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $album->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Is va:</th>
      <td><?php echo $album->getIsVa() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $album->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $album->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('album/edit?id='.$album->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('album/index') ?>">List</a>
